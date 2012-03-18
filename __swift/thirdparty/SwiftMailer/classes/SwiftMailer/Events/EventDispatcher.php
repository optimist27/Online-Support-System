<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Interface for the EventDispatcher which handles the event dispatching layer.
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
interface SwiftMailer_Events_EventDispatcher
{
  
  /**
   * Create a new SendEvent for $source and $message.
   * @param SwiftMailer_Transport $source
   * @param SwiftMailer_Mime_Message
   * @return SwiftMailer_Events_SendEvent
   */
  public function createSendEvent(SwiftMailer_Transport $source,
    SwiftMailer_Mime_Message $message);
  
  /**
   * Create a new CommandEvent for $source and $command.
   * @param SwiftMailer_Transport $source
   * @param string $command That will be executed
   * @param array $successCodes That are needed
   * @return SwiftMailer_Events_CommandEvent
   */
  public function createCommandEvent(SwiftMailer_Transport $source,
    $command, $successCodes = array());
  
  /**
   * Create a new ResponseEvent for $source and $response.
   * @param SwiftMailer_Transport $source
   * @param string $response
   * @param boolean $valid If the response is valid
   * @return SwiftMailer_Events_ResponseEvent
   */
  public function createResponseEvent(SwiftMailer_Transport $source,
    $response, $valid);
  
  /**
   * Create a new TransportChangeEvent for $source.
   * @param SwiftMailer_Transport $source
   * @return SwiftMailer_Events_TransportChangeEvent
   */
  public function createTransportChangeEvent(SwiftMailer_Transport $source);
  
  /**
   * Create a new TransportExceptionEvent for $source.
   * @param SwiftMailer_Transport $source
   * @param SwiftMailer_TransportException $ex
   * @return SwiftMailer_Events_TransportExceptionEvent
   */
  public function createTransportExceptionEvent(SwiftMailer_Transport $source,
    SwiftMailer_TransportException $ex);
  
  /**
   * Bind an event listener to this dispatcher.
   * @param SwiftMailer_Events_EventListener $listener
   */
  public function bindEventListener(SwiftMailer_Events_EventListener $listener);
  
  /**
   * Dispatch the given Event to all suitable listeners.
   * @param SwiftMailer_Events_EventObject $evt
   * @param string $target method
   */
  public function dispatchEvent(SwiftMailer_Events_EventObject $evt, $target);
  
}
