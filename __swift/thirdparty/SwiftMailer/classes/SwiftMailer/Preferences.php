<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Changes some global preference settings in SwiftMailer Mailer.
 * @package SwiftMailer
 * @author Chris Corbyn
 */
class SwiftMailer_Preferences
{
  
  /** Singleton instance */
  private static $_instance = null;
  
  /** Constructor not to be used */
  private function __construct() { }
  
  /**
   * Get a new instance of Preferences.
   * @return SwiftMailer_Preferences
   */
  public static function getInstance()
  {
    if (!isset(self::$_instance))
    {
      self::$_instance = new self();
    }
    return self::$_instance;
  }
  
  /**
   * Set the default charset used.
   * @param string
   * @return SwiftMailer_Preferences
   */
  public function setCharset($charset)
  {
    SwiftMailer_DependencyContainer::getInstance()
      ->register('properties.charset')->asValue($charset);
    return $this;
  }
  
  /**
   * Set the directory where temporary files can be saved.
   * @param string $dir
   * @return SwiftMailer_Preferences
   */
  public function setTempDir($dir)
  {
    SwiftMailer_DependencyContainer::getInstance()
      ->register('tempdir')->asValue($dir);
    return $this;
  }
  
  /**
   * Set the type of cache to use (i.e. "disk" or "array").
   * @param string $type
   * @return SwiftMailer_Preferences
   */
  public function setCacheType($type)
  {
    SwiftMailer_DependencyContainer::getInstance()
      ->register('cache')->asAliasOf(sprintf('cache.%s', $type));
    return $this;
  }
  
  /**
   * Add the
   * @param boolean $dotEscape
   * @return SwiftMailer_Preferences
   */
  public function setQPDotEscape($dotEscape)
  {
    $dotEscape=!empty($dotEscape);
    SwiftMailer_DependencyContainer::getInstance()
      -> register('mime.qpcontentencoder')
      -> asNewInstanceOf('SwiftMailer_Mime_ContentEncoder_QpContentEncoder')
      -> withDependencies(array('mime.charstream', 'mime.bytecanonicalizer'))
      -> addConstructorValue($dotEscape);
    return $this;
  }
  
}
