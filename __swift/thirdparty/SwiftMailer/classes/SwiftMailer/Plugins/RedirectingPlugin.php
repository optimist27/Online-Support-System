<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Redirects all email to a single recipient.
 * @package SwiftMailer
 * @subpackage Plugins
 * @author Fabien Potencier
 */
class SwiftMailer_Plugins_RedirectingPlugin
  implements SwiftMailer_Events_SendListener
{
  /**
   * The recipient who will receive all messages.
   * @var string
   * @access private
   */
  private $_recipient;
  
  /**
   * Create a new RedirectingPlugin.
   * @param int $recipient
   */
  public function __construct($recipient)
  {
    $this->_recipient = $recipient;
  }
  
  /**
   * Set the recipient of all messages.
   * @param int $threshold
   */
  public function setRecipient($recipient)
  {
    $this->_recipient = $recipient;
  }
  
  /**
   * Get the recipient of all messages.
   * @return int
   */
  public function getRecipient()
  {
    return $this->_recipient;
  }
  
  /**
   * Invoked immediately before the Message is sent.
   * @param SwiftMailer_Events_SendEvent $evt
   */
  public function beforeSendPerformed(SwiftMailer_Events_SendEvent $evt)
  {
    $message = $evt->getMessage();
    $headers = $message->getHeaders();

    // save current recipients
    $headers->addMailboxHeader('X-SwiftMailer-To', $message->getTo());
    $headers->addMailboxHeader('X-SwiftMailer-Cc', $message->getCc());
    $headers->addMailboxHeader('X-SwiftMailer-Bcc', $message->getBcc());

    // replace them with the one to send to
    $message->setTo($this->_recipient);
    $headers->removeAll('Cc');
    $headers->removeAll('Bcc');
  }
  
  /**
   * Invoked immediately after the Message is sent.
   * 
   * @param SwiftMailer_Events_SendEvent $evt
   */
  public function sendPerformed(SwiftMailer_Events_SendEvent $evt)
  {
    $this->_restoreMessage($evt->getMessage());
  }
  
  // -- Private methods
  
  private function _restoreMessage(SwiftMailer_Mime_Message $message)
  {
    // restore original headers
    $headers = $message->getHeaders();

    if ($headers->has('X-SwiftMailer-To'))
    {
      $message->setTo($headers->get('X-SwiftMailer-To')->getNameAddresses());
      $headers->removeAll('X-SwiftMailer-To');
    }

    if ($headers->has('X-SwiftMailer-Cc'))
    {
      $message->setCc($headers->get('X-SwiftMailer-Cc')->getNameAddresses());
      $headers->removeAll('X-SwiftMailer-Cc');
    }

    if ($headers->has('X-SwiftMailer-Bcc'))
    {
      $message->setBcc($headers->get('X-SwiftMailer-Bcc')->getNameAddresses());
      $headers->removeAll('X-SwiftMailer-Bcc');
    }
  }
}
