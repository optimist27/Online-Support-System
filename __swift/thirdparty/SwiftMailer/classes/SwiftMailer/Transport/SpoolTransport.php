<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores Messages in a queue.
 * @package SwiftMailer
 * @author  Fabien Potencier
 */
class SwiftMailer_Transport_SpoolTransport implements SwiftMailer_Transport
{
  /** The spool instance */
  private $_spool;

  /** The event dispatcher from the plugin API */
  private $_eventDispatcher;

  /**
   * Constructor.
   */
  public function __construct(SwiftMailer_Events_EventDispatcher $eventDispatcher, SwiftMailer_Spool $spool = null)
  {
    $this->_eventDispatcher = $eventDispatcher;
    $this->_spool = $spool;
  }
  
  /**
   * Sets the spool object.
   * @param SwiftMailer_Spool $spool
   * @return SwiftMailer_Transport_SpoolTransport
   */
  public function setSpool(SwiftMailer_Spool $spool)
  {
    $this->_spool = $spool;
    return $this;
  }
  
  /**
   * Get the spool object.
   * @return SwiftMailer_Spool
   */
  public function getSpool()
  {
    return $this->_spool;
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
    
    $success = $this->_spool->queueMessage($message);
    
    if ($evt)
    {
      $evt->setResult($success ? SwiftMailer_Events_SendEvent::RESULT_SUCCESS : SwiftMailer_Events_SendEvent::RESULT_FAILED);
      $this->_eventDispatcher->dispatchEvent($evt, 'sendPerformed');
    }
    
    return 1;
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
