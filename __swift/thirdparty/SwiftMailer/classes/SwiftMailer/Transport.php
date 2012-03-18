<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Sends Messages via an abstract Transport subsystem.
 * 
 * @package SwiftMailer
 * @subpackage Transport
 * @author Chris Corbyn
 */
interface SwiftMailer_Transport
{

  /**
   * Test if this Transport mechanism has started.
   * 
   * @return boolean
   */
  public function isStarted();
  
  /**
   * Start this Transport mechanism.
   */
  public function start();
  
  /**
   * Stop this Transport mechanism.
   */
  public function stop();
  
  /**
   * Send the given Message.
   * 
   * Recipient/sender data will be retrieved from the Message API.
   * The return value is the number of recipients who were accepted for delivery.
   * 
   * @param SwiftMailer_Mime_Message $message
   * @param string[] &$failedRecipients to collect failures by-reference
   * @return int
   */
  public function send(SwiftMailer_Mime_Message $message, &$failedRecipients = null);
  
  /**
   * Register a plugin in the Transport.
   * 
   * @param SwiftMailer_Events_EventListener $plugin
   */
  public function registerPlugin(SwiftMailer_Events_EventListener $plugin);
  
}
