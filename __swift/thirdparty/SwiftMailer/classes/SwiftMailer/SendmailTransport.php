<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * SendmailTransport for sending mail through a sendmail/postfix (etc..) binary.
 * @package SwiftMailer
 * @subpackage Transport
 * @author Chris Corbyn
 */
class SwiftMailer_SendmailTransport extends SwiftMailer_Transport_SendmailTransport
{
  
  /**
   * Create a new SendmailTransport, optionally using $command for sending.
   * @param string $command
   */
  public function __construct($command = '/usr/sbin/sendmail -bs')
  {
    call_user_func_array(
      array($this, 'SwiftMailer_Transport_SendmailTransport::__construct'),
      SwiftMailer_DependencyContainer::getInstance()
        ->createDependenciesFor('transport.sendmail')
      );
    
    $this->setCommand($command);
  }
  
  /**
   * Create a new SendmailTransport instance.
   * @param string $command
   * @return SwiftMailer_SendmailTransport
   */
  public static function newInstance($command = '/usr/sbin/sendmail -bs')
  {
    return new self($command);
  }
  
}
