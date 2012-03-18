<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Interface for all Transfer Encoding schemes.
 * @package SwiftMailer
 * @subpackage Mime
 * @author Chris Corbyn
 */
interface SwiftMailer_Mime_ContentEncoder extends SwiftMailer_Encoder
{
  
  /**
   * Encode $in to $out.
   * @param SwiftMailer_OutputByteStream $os to read from
   * @param SwiftMailer_InputByteStream $is to write to
   * @param int $firstLineOffset
   * @param int $maxLineLength - 0 indicates the default length for this encoding
   */
  public function encodeByteStream(
    SwiftMailer_OutputByteStream $os, SwiftMailer_InputByteStream $is, $firstLineOffset = 0,
    $maxLineLength = 0);
  
  /**
   * Get the MIME name of this content encoding scheme.
   * @return string
   */
  public function getName();
  
}
