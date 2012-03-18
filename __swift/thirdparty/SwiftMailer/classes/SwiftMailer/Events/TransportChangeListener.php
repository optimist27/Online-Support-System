<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Listens for changes within the Transport system.
 * 
 * @package SwiftMailer
 * @subpackage Events
 * 
 * @author Chris Corbyn
 */
interface SwiftMailer_Events_TransportChangeListener extends SwiftMailer_Events_EventListener
{
  
  /**
   * Invoked just before a Transport is started.
   * 
   * @param SwiftMailer_Events_TransportChangeEvent $evt
   */
  public function beforeTransportStarted(SwiftMailer_Events_TransportChangeEvent $evt);
  
  /**
   * Invoked immediately after the Transport is started.
   * 
   * @param SwiftMailer_Events_TransportChangeEvent $evt
   */
  public function transportStarted(SwiftMailer_Events_TransportChangeEvent $evt);
  
  /**
   * Invoked just before a Transport is stopped.
   * 
   * @param SwiftMailer_Events_TransportChangeEvent $evt
   */
  public function beforeTransportStopped(SwiftMailer_Events_TransportChangeEvent $evt);
  
  /**
   * Invoked immediately after the Transport is stopped.
   * 
   * @param SwiftMailer_Events_TransportChangeEvent $evt
   */
  public function transportStopped(SwiftMailer_Events_TransportChangeEvent $evt);
  
}
