<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Does real time reporting of pass/fail for each recipient.
 * @package SwiftMailer
 * @subpackage Plugins
 * @author Chris Corbyn
 */
class SwiftMailer_Plugins_ReporterPlugin
  implements SwiftMailer_Events_SendListener
{
  
  /**
   * The reporter backend which takes notifications.
   * @var SwiftMailer_Plugin_Reporter
   * @access private
   */
  private $_reporter;
  
  /**
   * Create a new ReporterPlugin using $reporter.
   * @param SwiftMailer_Plugins_Reporter $reporter
   */
  public function __construct(SwiftMailer_Plugins_Reporter $reporter)
  {
    $this->_reporter = $reporter;
  }
  
  /**
   * Not used.
   */
  public function beforeSendPerformed(SwiftMailer_Events_SendEvent $evt)
  {
  }
  
  /**
   * Invoked immediately after the Message is sent.
   * @param SwiftMailer_Events_SendEvent $evt
   */
  public function sendPerformed(SwiftMailer_Events_SendEvent $evt)
  {
    $message = $evt->getMessage();
    $failures = array_flip($evt->getFailedRecipients());
    foreach ((array) $message->getTo() as $address => $null)
    {
      $this->_reporter->notify(
        $message, $address, (array_key_exists($address, $failures)
        ? SwiftMailer_Plugins_Reporter::RESULT_FAIL
        : SwiftMailer_Plugins_Reporter::RESULT_PASS)
        );
    }
    foreach ((array) $message->getCc() as $address => $null)
    {
      $this->_reporter->notify(
        $message, $address, (array_key_exists($address, $failures)
        ? SwiftMailer_Plugins_Reporter::RESULT_FAIL
        : SwiftMailer_Plugins_Reporter::RESULT_PASS)
        );
    }
    foreach ((array) $message->getBcc() as $address => $null)
    {
      $this->_reporter->notify(
        $message, $address, (array_key_exists($address, $failures)
        ? SwiftMailer_Plugins_Reporter::RESULT_FAIL
        : SwiftMailer_Plugins_Reporter::RESULT_PASS)
        );
    }
  }
  
}
