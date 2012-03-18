<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Pretends messages have been sent, but just ignores them.
 * @package SwiftMailer
 * @author  Fabien Potencier
 */
class SwiftMailer_Transport_NullTransport implements SwiftMailer_Transport
{
  /** The event dispatcher from the plugin API */
  private $_eventDispatcher;

  /**
   * Constructor.
   */
  public function __construct(SwiftMailer_Events_EventDispatcher $eventDispatcher)
  {
    $this->_eventDispatcher = $eventDispatcher;
  }
  
  /**
   * Tests if this Transport mechanism has started.
   *
   * @return boolean
   */
  public function isStarted()
  {
    return true;
  }
  
  /**
   * Starts this Transport mechanism.
   */
  public function start()
  {
  }
  
  /**
   * Stops this Transport mechanism.
   */
  public function stop()
  {
  }
  
  /**
   * Sends the given message.
   *
   * @param SwiftMailer_Mime_Message $message
   * @param string[] &$failedRecipients to collect failures by-reference
   *
   * @return int The number of sent emails
   */
  public function send(SwiftMailer_Mime_Message $message, &$failedRecipients = null)
  {
    if ($evt = $this->_eventDispatcher->createSendEvent($this, $message))
    {
      $this->_eventDispatcher->dispatchEvent($evt, 'beforeSendPerformed');
      if ($evt->bubbleCancelled())
      {
        return 0;
      }
    }
    
    if ($evt)
    {
      $evt->setResult(SwiftMailer_Events_SendEvent::RESULT_SUCCESS);
      $this->_eventDispatcher->dispatchEvent($evt, 'sendPerformed');
    }
    
    return 0;
  }
  
  /**
   * Register a plugin.
   *
   * @param SwiftMailer_Events_EventListener $plugin
   */
  public function registerPlugin(SwiftMailer_Events_EventListener $plugin)
  {
    $this->_eventDispatcher->bindEventListener($plugin);
  }
}
