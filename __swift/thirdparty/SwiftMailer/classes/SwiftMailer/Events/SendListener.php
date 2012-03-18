<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Listens for Messages being sent from within the Transport system.
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
interface SwiftMailer_Events_SendListener extends SwiftMailer_Events_EventListener
{
  
  /**
   * Invoked immediately before the Message is sent.
   * @param SwiftMailer_Events_SendEvent $evt
   */
  public function beforeSendPerformed(SwiftMailer_Events_SendEvent $evt);
  
  /**
   * Invoked immediately after the Message is sent.
   * @param SwiftMailer_Events_SendEvent $evt
   */
  public function sendPerformed(SwiftMailer_Events_SendEvent $evt);
  
}
