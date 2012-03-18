<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Redudantly and rotationally uses several Transport implementations when sending.
 * @package SwiftMailer
 * @subpackage Transport
 * @author Chris Corbyn
 */
class SwiftMailer_LoadBalancedTransport extends SwiftMailer_Transport_LoadBalancedTransport
{
  
  /**
   * Creates a new LoadBalancedTransport with $transports.
   * @param array $transports
   */
  public function __construct($transports = array())
  {
    call_user_func_array(
      array($this, 'SwiftMailer_Transport_LoadBalancedTransport::__construct'),
      SwiftMailer_DependencyContainer::getInstance()
        ->createDependenciesFor('transport.loadbalanced')
      );
    
    $this->setTransports($transports);
  }
  
  /**
   * Create a new LoadBalancedTransport instance.
   * @param string $transports
   * @return SwiftMailer_LoadBalancedTransport
   */
  public static function newInstance($transports = array())
  {
    return new self($transports);
  }
  
}
