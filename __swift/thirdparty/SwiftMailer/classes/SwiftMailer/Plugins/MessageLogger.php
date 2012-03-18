<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2011 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores all sent emails for further usage.
 * @package SwiftMailer
 * @subpackage Plugins
 * @author Fabien Potencier
 */
class SwiftMailer_Plugins_MessageLogger
  implements SwiftMailer_Events_SendListener
{
  /**
   * @var array
   */
  private $messages;
  
  public function __construct()
  {
    $this->messages = array();
  }
  
  /**
   * Get the message list
   *
   * @return array
   */
  public function getMessages()
  {
    return $this->messages;
  }
  
  /**
   * Get the message count
   *
   * @return int count
   */
  public function countMessages()
  {
    return count($this->messages);
  }
  
  /**
   * Empty the message list
   *
   */
  public function clear()
  {
    $this->messages = array();
  }
  
  /**
   * Invoked immediately before the Message is sent.
   *
   * @param SwiftMailer_Events_SendEvent $evt
   */
  public function beforeSendPerformed(SwiftMailer_Events_SendEvent $evt)
  {
    $this->messages[] = clone $evt->getMessage();
  }
  
  /**
   * Invoked immediately after the Message is sent.
   *
   * @param SwiftMailer_Events_SendEvent $evt
   */
  public function sendPerformed(SwiftMailer_Events_SendEvent $evt)
  {
  }
}
