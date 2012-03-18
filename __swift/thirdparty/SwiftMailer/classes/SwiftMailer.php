<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * General utility class in SwiftMailer Mailer, not to be instantiated.
 * 
 * @package SwiftMailer
 * 
 * @author Chris Corbyn
 */
abstract class SwiftMailer
{
  
  static $initialized = false;
  static $initPath;
  
  /** SwiftMailer Mailer Version number generated during dist release process */
  const VERSION = '4.1.3';
  
  /**
   * Internal autoloader for spl_autoload_register().
   * 
   * @param string $class
   */
  public static function autoload($class)
  {
    //Don't interfere with other autoloaders
    if (0 !== strpos($class, 'SwiftMailer_'))
    {
      return;
    }

    $path = dirname(__FILE__).'/'.str_replace('_', '/', $class).'.php';

    if (!file_exists($path))
    {
      return;
    }

    if (self::$initPath && !self::$initialized)
    {
      self::$initialized = true;
      require self::$initPath;
    }

    require $path;
  }
  
  /**
   * Configure autoloading using SwiftMailer Mailer.
   * 
   * This is designed to play nicely with other autoloaders.
   *
   * @param string $initPath The init script to load when autoloading the first SwiftMailer class
   */
  public static function registerAutoload($initPath = null)
  {
    self::$initPath = $initPath;
    spl_autoload_register(array('SwiftMailer', 'autoload'));
  }
  
}
