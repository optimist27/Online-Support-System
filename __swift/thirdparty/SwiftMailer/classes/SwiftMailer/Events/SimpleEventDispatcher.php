<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * The EventDispatcher which handles the event dispatching layer.
 * 
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
class SwiftMailer_Events_SimpleEventDispatcher implements SwiftMailer_Events_EventDispatcher
{
  
  /** A map of event types to their associated listener types */
  private $_eventMap = array();
  
  /** Event listeners bound to this dispatcher */
  private $_listeners = array();
  
  /** Listeners queued to have an Event bubbled up the stack to them */
  private $_bubbleQueue = array();
  
  /**
   * Create a new EventDispatcher.
   */
  public function __construct()
  {
    $this->_eventMap = array(
      'SwiftMailer_Events_CommandEvent' => 'SwiftMailer_Events_CommandListener',
      'SwiftMailer_Events_ResponseEvent' => 'SwiftMailer_Events_ResponseListener',
      'SwiftMailer_Events_SendEvent' => 'SwiftMailer_Events_SendListener',
      'SwiftMailer_Events_TransportChangeEvent' => 'SwiftMailer_Events_TransportChangeListener',
      'SwiftMailer_Events_TransportExceptionEvent' => 'SwiftMailer_Events_TransportExceptionListener'
      );
  }
  
  /**
   * Create a new SendEvent for $source and $message.
   * 
   * @param SwiftMailer_Transport $source
   * @param SwiftMailer_Mime_Message
   * @return SwiftMailer_Events_SendEvent
   */
  public function createSendEvent(SwiftMailer_Transport $source,
    SwiftMailer_Mime_Message $message)
  {
    return new SwiftMailer_Events_SendEvent($source, $message);
  }
  
  /**
   * Create a new CommandEvent for $source and $command.
   * 
   * @param SwiftMailer_Transport $source
   * @param string $command That will be executed
   * @param array $successCodes That are needed
   * @return SwiftMailer_Events_CommandEvent
   */
  public function createCommandEvent(SwiftMailer_Transport $source,
    $command, $successCodes = array())
  {
    return new SwiftMailer_Events_CommandEvent($source, $command, $successCodes);
  }
  
  /**
   * Create a new ResponseEvent for $source and $response.
   * 
   * @param SwiftMailer_Transport $source
   * @param string $response
   * @param boolean $valid If the response is valid
   * @return SwiftMailer_Events_ResponseEvent
   */
  public function createResponseEvent(SwiftMailer_Transport $source,
    $response, $valid)
  {
    return new SwiftMailer_Events_ResponseEvent($source, $response, $valid);
  }
  
  /**
   * Create a new TransportChangeEvent for $source.
   * 
   * @param SwiftMailer_Transport $source
   * @return SwiftMailer_Events_TransportChangeEvent
   */
  public function createTransportChangeEvent(SwiftMailer_Transport $source)
  {
    return new SwiftMailer_Events_TransportChangeEvent($source);
  }
  
  /**
   * Create a new TransportExceptionEvent for $source.
   * 
   * @param SwiftMailer_Transport $source
   * @param SwiftMailer_TransportException $ex
   * @return SwiftMailer_Events_TransportExceptionEvent
   */
  public function createTransportExceptionEvent(SwiftMailer_Transport $source,
    SwiftMailer_TransportException $ex)
  {
    return new SwiftMailer_Events_TransportExceptionEvent($source, $ex);
  }
  
  /**
   * Bind an event listener to this dispatcher.
   * 
   * @param SwiftMailer_Events_EventListener $listener
   */
  public function bindEventListener(SwiftMailer_Events_EventListener $listener)
  {
    foreach ($this->_listeners as $l)
    {
      //Already loaded
      if ($l === $listener)
      {
        return;
      }
    }
    $this->_listeners[] = $listener;
  }
  
  /**
   * Dispatch the given Event to all suitable listeners.
   * 
   * @param SwiftMailer_Events_EventObject $evt
   * @param string $target method
   */
  public function dispatchEvent(SwiftMailer_Events_EventObject $evt, $target)
  {
    $this->_prepareBubbleQueue($evt);
    $this->_bubble($evt, $target);
  }
  
  // -- Private methods
  
  /** Queue listeners on a stack ready for $evt to be bubbled up it */
  private function _prepareBubbleQueue(SwiftMailer_Events_EventObject $evt)
  {
    $this->_bubbleQueue = array();
    $evtClass = get_class($evt);
    foreach ($this->_listeners as $listener)
    {
      if (array_key_exists($evtClass, $this->_eventMap)
        && ($listener instanceof $this->_eventMap[$evtClass]))
      {
        $this->_bubbleQueue[] = $listener;
      }
    }
  }
  
  /** Bubble $evt up the stack calling $target() on each listener */
  private function _bubble(SwiftMailer_Events_EventObject $evt, $target)
  {
    if (!$evt->bubbleCancelled() && $listener = array_shift($this->_bubbleQueue))
    {
      $listener->$target($evt);
      $this->_bubble($evt, $target);
    }
  }
  
}
