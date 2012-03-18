<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Generated when a TransportException is thrown from the Transport system.
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
class SwiftMailer_Events_TransportExceptionEvent extends SwiftMailer_Events_EventObject
{
  
  /**
   * The Exception thrown.
   * @var SwiftMailer_TransportException
   */
  private $_exception;
  
  /**
   * Create a new TransportExceptionEvent for $transport.
   * @param SwiftMailer_Transport $transport
   * @param SwiftMailer_TransportException $ex
   */
  public function __construct(SwiftMailer_Transport $transport,
    SwiftMailer_TransportException $ex)
  {
    parent::__construct($transport);
    $this->_exception = $ex;
  }
  
  /**
   * Get the TransportException thrown.
   * @return SwiftMailer_TransportException
   */
  public function getException()
  {
    return $this->_exception;
  }
  
}
