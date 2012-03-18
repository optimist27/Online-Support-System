<?php
/*
 * This file is part of SwiftMailer.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Utility Class allowing users to simply check expressions again SwiftMailer Grammar
 * @package SwiftMailer
 * @author Xavier De Cock <xdecock@gmail.com>
 */
class SwiftMailer_Validate
{
  /**
   * Grammar Object
   * @var SwiftMailer_Mime_Grammar
   */
  private static $grammar = null;
  
  /**
   * Checks if an email matches the current grammars
   * @param string $email
   */
  public static function email($email)
  {
    if (self::$grammar===null)
    {
      self::$grammar = SwiftMailer_DependencyContainer::getInstance()
        ->lookup('mime.grammar');
    }
    return preg_match(
        '/^' . self::$grammar->getDefinition('addr-spec') . '$/D',
        $email
      );
  }
}