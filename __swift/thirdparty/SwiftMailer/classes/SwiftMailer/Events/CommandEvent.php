<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Generated when a command is sent over an SMTP connection.
 * @package SwiftMailer
 * @subpackage Events
 * @author Chris Corbyn
 */
class SwiftMailer_Events_CommandEvent extends SwiftMailer_Events_EventObject
{
  
  /**
   * The command sent to the server.
   * @var string
   */
  private $_command;
  
  /**
   * An array of codes which a successful response will contain.
   * @var int[]
   */
  private $_successCodes = array();
  
  /**
   * Create a new CommandEvent for $source with $command.
   * @param SwiftMailer_Transport $source
   * @param string $command
   * @param array $successCodes
   */
  public function __construct(SwiftMailer_Transport $source,
    $command, $successCodes = array())
  {
    parent::__construct($source);
    $this->_command = $command;
    $this->_successCodes = $successCodes;
  }
  
  /**
   * Get the command which was sent to the server.
   * @return string
   */
  public function getCommand()
  {
    return $this->_command;
  }
  
  /**
   * Get the numeric response codes which indicate success for this command.
   * @return int[]
   */
  public function getSuccessCodes()
  {
    return $this->_successCodes;
  }
  
}