<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Provides a mechanism for storing data using two keys.
 * @package SwiftMailer
 * @subpackage KeyCache
 * @author Chris Corbyn
 */
interface SwiftMailer_KeyCache
{
  
  /** Mode for replacing existing cached data */
  const MODE_WRITE = 1;
  
  /** Mode for appending data to the end of existing cached data */
  const MODE_APPEND = 2;
  
  /**
   * Set a string into the cache under $itemKey for the namespace $nsKey.
   * @param string $nsKey
   * @param string $itemKey
   * @param string $string
   * @param int $mode
   * @see MODE_WRITE, MODE_APPEND
   */
  public function setString($nsKey, $itemKey, $string, $mode);
  
  /**
   * Set a ByteStream into the cache under $itemKey for the namespace $nsKey.
   * @param string $nsKey
   * @param string $itemKey
   * @param SwiftMailer_OutputByteStream $os
   * @param int $mode
   * @see MODE_WRITE, MODE_APPEND
   */
  public function importFromByteStream($nsKey, $itemKey, SwiftMailer_OutputByteStream $os,
    $mode);
  
  /**
   * Provides a ByteStream which when written to, writes data to $itemKey.
   * NOTE: The stream will always write in append mode.
   * If the optional third parameter is passed all writes will go through $is.
   * @param string $nsKey
   * @param string $itemKey
   * @param SwiftMailer_InputByteStream $is, optional
   * @return SwiftMailer_InputByteStream
   */
  public function getInputByteStream($nsKey, $itemKey,
    SwiftMailer_InputByteStream $is = null);
  
  /**
   * Get data back out of the cache as a string.
   * @param string $nsKey
   * @param string $itemKey
   * @return string
   */
  public function getString($nsKey, $itemKey);
  
  /**
   * Get data back out of the cache as a ByteStream.
   * @param string $nsKey
   * @param string $itemKey
   * @param SwiftMailer_InputByteStream $is to write the data to
   */
  public function exportToByteStream($nsKey, $itemKey, SwiftMailer_InputByteStream $is);
  
  /**
   * Check if the given $itemKey exists in the namespace $nsKey.
   * @param string $nsKey
   * @param string $itemKey
   * @return boolean
   */
  public function hasKey($nsKey, $itemKey);
  
  /**
   * Clear data for $itemKey in the namespace $nsKey if it exists.
   * @param string $nsKey
   * @param string $itemKey
   */
  public function clearKey($nsKey, $itemKey);
  
  /**
   * Clear all data in the namespace $nsKey if it exists.
   * @param string $nsKey
   */
  public function clearAll($nsKey);
  
}
