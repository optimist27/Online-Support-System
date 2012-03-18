<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Listens for Transports to send commands to the server.
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
interface SwiftMailer_Events_CommandListener extends SwiftMailer_Events_EventListener
{
  
  /**
   * Invoked immediately following a command being sent.
   * @param SwiftMailer_Events_ResponseEvent $evt
   */
  public function commandSent(SwiftMailer_Events_CommandEvent $evt);
  
}
