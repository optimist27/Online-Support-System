<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Writes data to a KeyCache using a stream.
 * @package SwiftMailer
 * @subpackage KeyCache
 * @author Chris Corbyn
 */
interface SwiftMailer_KeyCache_KeyCacheInputStream extends SwiftMailer_InputByteStream
{
  
  /**
   * Set the KeyCache to wrap.
   * @param SwiftMailer_KeyCache $keyCache
   */
  public function setKeyCache(SwiftMailer_KeyCache $keyCache);
  
  /**
   * Set the nsKey which will be written to.
   * @param string $nsKey
   */
  public function setNsKey($nsKey);
  
  /**
   * Set the itemKey which will be written to.
   * @param string $itemKey
   */
  public function setItemKey($itemKey);
  
  /**
   * Specify a stream to write through for each write().
   * @param SwiftMailer_InputByteStream $is
   */
  public function setWriteThroughStream(SwiftMailer_InputByteStream $is);
  
  /**
   * Any implementation should be cloneable, allowing the clone to access a
   * separate $nsKey and $itemKey.
   */
  public function __clone();
  
}
