<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Contains a list of redundant Transports so when one fails, the next is used.
 * @package SwiftMailer
 * @subpackage Transport
 * @author Chris Corbyn
 */
class SwiftMailer_FailoverTransport extends SwiftMailer_Transport_FailoverTransport
{
  
  /**
   * Creates a new FailoverTransport with $transports.
   * @param array $transports
   */
  public function __construct($transports = array())
  {
    call_user_func_array(
      array($this, 'SwiftMailer_Transport_FailoverTransport::__construct'),
      SwiftMailer_DependencyContainer::getInstance()
        ->createDependenciesFor('transport.failover')
      );
    
    $this->setTransports($transports);
  }
  
  /**
   * Create a new FailoverTransport instance.
   * @param string $transports
   * @return SwiftMailer_FailoverTransport
   */
  public static function newInstance($transports = array())
  {
    return new self($transports);
  }
  
}
