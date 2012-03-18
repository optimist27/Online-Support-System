<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Provides quick access to each encoding type.
 * 
 * @package SwiftMailer
 * @subpackage Encoder
 * @author Chris Corbyn
 */
class SwiftMailer_Encoding
{
  
  /**
   * Get the Encoder that provides 7-bit encoding.
   * 
   * @return SwiftMailer_Mime_ContentEncoder
   */
  public static function get7BitEncoding()
  {
    return self::_lookup('mime.7bitcontentencoder');
  }
  
  /**
   * Get the Encoder that provides 8-bit encoding.
   * 
   * @return SwiftMailer_Mime_ContentEncoder
   */
  public static function get8BitEncoding()
  {
    return self::_lookup('mime.8bitcontentencoder');
  }
  
  /**
   * Get the Encoder that provides Quoted-Printable (QP) encoding.
   * 
   * @return SwiftMailer_Mime_ContentEncoder
   */
  public static function getQpEncoding()
  {
    return self::_lookup('mime.qpcontentencoder');
  }
  
  /**
   * Get the Encoder that provides Base64 encoding.
   * 
   * @return SwiftMailer_Mime_ContentEncoder
   */
  public static function getBase64Encoding()
  {
    return self::_lookup('mime.base64contentencoder');
  }
  
  // -- Private Static Methods
  
  private static function _lookup($key)
  {
    return SwiftMailer_DependencyContainer::getInstance()->lookup($key);
  }
  
}
