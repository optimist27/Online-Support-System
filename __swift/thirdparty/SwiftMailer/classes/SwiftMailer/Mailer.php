<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * SwiftMailer Mailer class.
 * 
 * @package SwiftMailer
 * @author Chris Corbyn
 */
class SwiftMailer_Mailer
{
  
  /** The Transport used to send messages */
  private $_transport;
  
  /**
   * Create a new Mailer using $transport for delivery.
   * 
   * @param SwiftMailer_Transport $transport
   */
  public function __construct(SwiftMailer_Transport $transport)
  {
    $this->_transport = $transport;
  }

  /**
   * Create a new Mailer instance.
   * 
   * @param SwiftMailer_Transport $transport
   * @return SwiftMailer_Mailer
   */
  public static function newInstance(SwiftMailer_Transport $transport)
  {
    return new self($transport);
  }

  /**
   * Create a new class instance of one if the message services
   * For example 'mimepart' would create a 'message.mimepart' instance
   *
   * @param string $service
   * @return object
   */
  public function createMessage($service = 'message')
  {
    return SwiftMailer_DependencyContainer::getInstance()
      ->lookup('message.'.$service);
  }

  /**
   * Send the given Message like it would be sent in a mail client.
   * 
   * All recipients (with the exception of Bcc) will be able to see the other
   * recipients this message was sent to.
   * 
   * Recipient/sender data will be retrieved from the Message object.
   * 
   * The return value is the number of recipients who were accepted for
   * delivery.
   * 
   * @param SwiftMailer_Mime_Message $message
   * @param array &$failedRecipients, optional
   * @return int
   */
  public function send(SwiftMailer_Mime_Message $message, &$failedRecipients = null)
  {
    $failedRecipients = (array) $failedRecipients;
    
    if (!$this->_transport->isStarted())
    {
      $this->_transport->start();
    }
    
    $sent = 0;
    
    try
    {
      $sent = $this->_transport->send($message, $failedRecipients);
    }
    catch (SwiftMailer_RfcComplianceException $e)
    {
      foreach ($message->getTo() as $address => $name)
      {
        $failedRecipients[] = $address;
      }
    }
    
    return $sent;
  }
  
  /**
   * Register a plugin using a known unique key (e.g. myPlugin).
   * 
   * @param SwiftMailer_Events_EventListener $plugin
   * @param string $key
   */
  public function registerPlugin(SwiftMailer_Events_EventListener $plugin)
  {
    $this->_transport->registerPlugin($plugin);
  }
  
  /**
   * The Transport used to send messages.
   * @return SwiftMailer_Transport
   */
  public function getTransport()
  {
    return $this->_transport;
  }
}
