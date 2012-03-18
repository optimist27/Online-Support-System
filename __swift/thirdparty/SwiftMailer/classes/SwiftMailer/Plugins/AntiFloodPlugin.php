<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Reduces network flooding when sending large amounts of mail.
 * @package SwiftMailer
 * @subpackage Plugins
 * @author Chris Corbyn
 */
class SwiftMailer_Plugins_AntiFloodPlugin
  implements SwiftMailer_Events_SendListener, SwiftMailer_Plugins_Sleeper
{
  
  /**
   * The number of emails to send before restarting Transport.
   * @var int
   * @access private
   */
  private $_threshold;
  
  /**
   * The number of seconds to sleep for during a restart.
   * @var int
   * @access private
   */
  private $_sleep;
  
  /**
   * The internal counter.
   * @var int
   * @access private
   */
  private $_counter = 0;
  
  /**
   * The Sleeper instance for sleeping.
   * @var SwiftMailer_Plugins_Sleeper
   * @access private
   */
  private $_sleeper;
  
  /**
   * Create a new AntiFloodPlugin with $threshold and $sleep time.
   * @param int $threshold
   * @param int $sleep time
   * @param SwiftMailer_Plugins_Sleeper $sleeper (not needed really)
   */
  public function __construct($threshold = 99, $sleep = 0,
    SwiftMailer_Plugins_Sleeper $sleeper = null)
  {
    $this->setThreshold($threshold);
    $this->setSleepTime($sleep);
    $this->_sleeper = $sleeper;
  }
  
  /**
   * Set the number of emails to send before restarting.
   * @param int $threshold
   */
  public function setThreshold($threshold)
  {
    $this->_threshold = $threshold;
  }
  
  /**
   * Get the number of emails to send before restarting.
   * @return int
   */
  public function getThreshold()
  {
    return $this->_threshold;
  }
  
  /**
   * Set the number of seconds to sleep for during a restart.
   * @param int $sleep time
   */
  public function setSleepTime($sleep)
  {
    $this->_sleep = $sleep;
  }
  
  /**
   * Get the number of seconds to sleep for during a restart.
   * @return int
   */
  public function getSleepTime()
  {
    return $this->_sleep;
  }
  
  /**
   * Invoked immediately before the Message is sent.
   * @param SwiftMailer_Events_SendEvent $evt
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
    ++$this->_counter;
    if ($this->_counter >= $this->_threshold)
    {
      $transport = $evt->getTransport();
      $transport->stop();
      if ($this->_sleep)
      {
        $this->sleep($this->_sleep);
      }
      $transport->start();
      $this->_counter = 0;
    }
  }
  
  /**
   * Sleep for $seconds.
   * @param int $seconds
   */
  public function sleep($seconds)
  {
    if (isset($this->_sleeper))
    {
      $this->_sleeper->sleep($seconds);
    }
    else
    {
      sleep($seconds);
    }
  }
  
}
