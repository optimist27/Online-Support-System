<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Pretends messages have been sent, but just ignores them.
 * @package SwiftMailer
 * @author  Fabien Potencier
 */
class SwiftMailer_NullTransport extends SwiftMailer_Transport_NullTransport
{
  /**
   * Create a new NullTransport.
   */
  public function __construct()
  {
    call_user_func_array(
      array($this, 'SwiftMailer_Transport_NullTransport::__construct'),
      SwiftMailer_DependencyContainer::getInstance()
        ->createDependenciesFor('transport.null')
    );
  }
  
  /**
   * Create a new NullTransport instance.
   * @return SwiftMailer_NullTransport
   */
  public static function newInstance()
  {
    return new self();
  }
}
