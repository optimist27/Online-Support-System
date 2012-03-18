<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * SendmailTransport for sending mail through a sendmail/postfix (etc..) binary.
 * 
 * Supported modes are -bs and -t, with any additional flags desired.
 * It is advised to use -bs mode since error reporting with -t mode is not
 * possible.
 * 
 * @package SwiftMailer
 * @subpackage Transport
 * @author Chris Corbyn
 */
class SwiftMailer_Transport_SendmailTransport
  extends SwiftMailer_Transport_AbstractSmtpTransport
{
  
  /**
   * Connection buffer parameters.
   * @var array
   * @access protected
   */
  private $_params = array(
    'timeout' => 30,
    'blocking' => 1,
    'command' => '/usr/sbin/sendmail -bs',
    'type' => SwiftMailer_Transport_IoBuffer::TYPE_PROCESS
    );
  
  /**
   * Create a new SendmailTransport with $buf for I/O.
   * @param SwiftMailer_Transport_IoBuffer $buf
   * @param SwiftMailer_Events_EventDispatcher $dispatcher
   */
  public function __construct(SwiftMailer_Transport_IoBuffer $buf,
    SwiftMailer_Events_EventDispatcher $dispatcher)
  {
    parent::__construct($buf, $dispatcher);
  }
  
  /**
   * Start the standalone SMTP session if running in -bs mode.
   */
  public function start()
  {
    if (false !== strpos($this->getCommand(), ' -bs'))
    {
      parent::start();
    }
  }
  
  /**
   * Set the command to invoke.
   * If using -t mode you are strongly advised to include -oi or -i in the
   * flags. For example: /usr/sbin/sendmail -oi -t
   * SwiftMailer will append a -f<sender> flag if one is not present.
   * The recommended mode is "-bs" since it is interactive and failure notifications
   * are hence possible.
   * @param string $command
   * @return SwiftMailer_Transport_SendmailTransport
   */
  public function setCommand($command)
  {
    $this->_params['command'] = $command;
    return $this;
  }
  
  /**
   * Get the sendmail command which will be invoked.
   * @return string
   */
  public function getCommand()
  {
    return $this->_params['command'];
  }
  
  /**
   * Send the given Message.
   * Recipient/sender data will be retrieved from the Message API.
   * The return value is the number of recipients who were accepted for delivery.
   * NOTE: If using 'sendmail -t' you will not be aware of any failures until
   * they bounce (i.e. send() will always return 100% success).
   * @param SwiftMailer_Mime_Message $message
   * @param string[] &$failedRecipients to collect failures by-reference
   * @return int
   */
  public function send(SwiftMailer_Mime_Message $message, &$failedRecipients = null)
  {
    $failedRecipients = (array) $failedRecipients;
    $command = $this->getCommand();
    $buffer = $this->getBuffer();
    
    if (false !== strpos($command, ' -t'))
    {
      if ($evt = $this->_eventDispatcher->createSendEvent($this, $message))
      {
        $this->_eventDispatcher->dispatchEvent($evt, 'beforeSendPerformed');
        if ($evt->bubbleCancelled())
        {
          return 0;
        }
      }
      
      if (false === strpos($command, ' -f'))
      {
        $command .= ' -f' . $this->_getReversePath($message);
      }
      
      $buffer->initialize(array_merge($this->_params, array('command' => $command)));
      
      if (false === strpos($command, ' -i') && false === strpos($command, ' -oi'))
      {
        $buffer->setWriteTranslations(array("\r\n" => "\n", "\n." => "\n.."));
      }
      else
      {
        $buffer->setWriteTranslations(array("\r\n"=>"\n"));
      }
      
      $count = count((array) $message->getTo())
        + count((array) $message->getCc())
        + count((array) $message->getBcc())
        ;
      $message->toByteStream($buffer);
      $buffer->flushBuffers();
      $buffer->setWriteTranslations(array());
      $buffer->terminate();
      
      if ($evt)
      {
        $evt->setResult(SwiftMailer_Events_SendEvent::RESULT_SUCCESS);
        $evt->setFailedRecipients($failedRecipients);
        $this->_eventDispatcher->dispatchEvent($evt, 'sendPerformed');
      }
      
      $message->generateId();
    }
    elseif (false !== strpos($command, ' -bs'))
    {
      $count = parent::send($message, $failedRecipients);
    }
    else
    {
      $this->_throwException(new SwiftMailer_TransportException(
        'Unsupported sendmail command flags [' . $command . ']. ' .
        'Must be one of "-bs" or "-t" but can include additional flags.'
        ));
    }
    
    return $count;
  }
  
  // -- Protected methods
  
  /** Get the params to initialize the buffer */
  protected function _getBufferParams()
  {
    return $this->_params;
  }
  
}
