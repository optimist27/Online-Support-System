<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Creates StreamFilters.
 * @package SwiftMailer
 * @author Chris Corbyn
 */
interface SwiftMailer_ReplacementFilterFactory
{
  
  /**
   * Create a filter to replace $search with $replace.
   * @param mixed $search
   * @param mixed $replace
   * @return SwiftMailer_StreamFilter
   */
  public function createFilter($search, $replace);
  
}
