<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Generated when the state of a Transport is changed (i.e. stopped/started).
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
class SwiftMailer_Events_TransportChangeEvent extends SwiftMailer_Events_EventObject
{
  
  /**
   * Get the Transport.
   * @return SwiftMailer_Transport
   */
  public function getTransport()
  {
    return $this->getSource();
  }
  
}