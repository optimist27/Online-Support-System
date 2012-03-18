<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Allows StreamFilters to operate on a stream.
 * @package SwiftMailer
 * @author Chris Corbyn
 */
interface SwiftMailer_Filterable
{
  
  /**
   * Add a new StreamFilter, referenced by $key.
   * @param SwiftMailer_StreamFilter $filter
   * @param string $key
   */
  public function addFilter(SwiftMailer_StreamFilter $filter, $key);
  
  /**
   * Remove an existing filter using $key.
   * @param string $key
   */
  public function removeFilter($key);
  
}
