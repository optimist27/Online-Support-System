<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier <fabien.potencier@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Stores Messages in a queue.
 * @package SwiftMailer
 * @author  Fabien Potencier
 */
class SwiftMailer_SpoolTransport extends SwiftMailer_Transport_SpoolTransport
{
  /**
   * Create a new SpoolTransport.
   * @param SwiftMailer_Spool $spool
   */
  public function __construct(SwiftMailer_Spool $spool)
  {
    $arguments = SwiftMailer_DependencyContainer::getInstance()
      ->createDependenciesFor('transport.spool');

    $arguments[] = $spool;

    call_user_func_array(
      array($this, 'SwiftMailer_Transport_SpoolTransport::__construct'),
      $arguments
    );
  }
  
  /**
   * Create a new SpoolTransport instance.
   * @param SwiftMailer_Spool $spool
   * @return SwiftMailer_SpoolTransport
   */
  public static function newInstance(SwiftMailer_Spool $spool)
  {
    return new self($spool);
  }
}
