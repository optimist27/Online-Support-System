<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * An embedded file, in a multipart message.
 * @package SwiftMailer
 * @subpackage Mime
 * @author Chris Corbyn
 */
class SwiftMailer_Mime_EmbeddedFile extends SwiftMailer_Mime_Attachment
{
  
  /**
   * Creates a new Attachment with $headers and $encoder.
   * @param SwiftMailer_Mime_HeaderSet $headers
   * @param SwiftMailer_Mime_ContentEncoder $encoder
   * @param SwiftMailer_KeyCache $cache
   * @param SwiftMailer_Mime_Grammar $grammar
   * @param array $mimeTypes optional
   */
  public function __construct(SwiftMailer_Mime_HeaderSet $headers,
    SwiftMailer_Mime_ContentEncoder $encoder, SwiftMailer_KeyCache $cache,
    SwiftMailer_Mime_Grammar $grammar, $mimeTypes = array())
  {
    parent::__construct($headers, $encoder, $cache, $grammar, $mimeTypes);
    $this->setDisposition('inline');
    $this->setId($this->getId());
  }
  
  /**
   * Get the nesting level of this EmbeddedFile.
   * Returns {@link LEVEL_RELATED}.
   * @return int
   */
  public function getNestingLevel()
  {
    return self::LEVEL_RELATED;
  }
  
}
