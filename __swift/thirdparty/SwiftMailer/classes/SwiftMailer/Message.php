<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * The Message class for building emails.
 * @package SwiftMailer
 * @subpackage Mime
 * @author Chris Corbyn
 */
class SwiftMailer_Message extends SwiftMailer_Mime_SimpleMessage
{
  
  /**
   * Create a new Message.
   * Details may be optionally passed into the constructor.
   * @param string $subject
   * @param string $body
   * @param string $contentType
   * @param string $charset
   */
  public function __construct($subject = null, $body = null,
    $contentType = null, $charset = null)
  {
    call_user_func_array(
      array($this, 'SwiftMailer_Mime_SimpleMessage::__construct'),
      SwiftMailer_DependencyContainer::getInstance()
        ->createDependenciesFor('mime.message')
      );
    
    if (!isset($charset))
    {
      $charset = SwiftMailer_DependencyContainer::getInstance()
        ->lookup('properties.charset');
    }
    $this->setSubject($subject);
    $this->setBody($body);
    $this->setCharset($charset);
    if ($contentType)
    {
      $this->setContentType($contentType);
    }
  }
  
  /**
   * Create a new Message.
   * @param string $subject
   * @param string $body
   * @param string $contentType
   * @param string $charset
   * @return SwiftMailer_Mime_Message
   */
  public static function newInstance($subject = null, $body = null,
    $contentType = null, $charset = null)
  {
    return new self($subject, $body, $contentType, $charset);
  }
  
  /**
   * Add a MimePart to this Message.
   * @param string|SwiftMailer_OutputByteStream $body
   * @param string $contentType
   * @param string $charset
   */
  public function addPart($body, $contentType = null, $charset = null)
  {
    return $this->attach(SwiftMailer_MimePart::newInstance(
      $body, $contentType, $charset
      ));
  }
  
  public function __wakeup()
  {
    SwiftMailer_DependencyContainer::getInstance()->createDependenciesFor('mime.message');
  }
  
}
