<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * RFC Compliance Exception class.
 * @package SwiftMailer
 * @author Chris Corbyn
 */
class SwiftMailer_RfcComplianceException extends SwiftMailer_SwiftMailerException
{
  
  /**
   * Create a new RfcComplianceException with $message.
   * @param string $message
   */
  public function __construct($message)
  {
    parent::__construct($message);
  }
  
}
