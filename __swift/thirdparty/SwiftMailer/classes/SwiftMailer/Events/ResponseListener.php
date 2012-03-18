<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Listens for responses from a remote SMTP server.
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
interface SwiftMailer_Events_ResponseListener extends SwiftMailer_Events_EventListener
{
  
  /**
   * Invoked immediately following a response coming back.
   * @param SwiftMailer_Events_ResponseEvent $evt
   */
  public function responseReceived(SwiftMailer_Events_ResponseEvent $evt);
  
}
