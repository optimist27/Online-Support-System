<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Handles PLAIN authentication.
 * @package SwiftMailer
 * @subpackage Transport
 * @author Chris Corbyn
 */
class SwiftMailer_Transport_Esmtp_Auth_PlainAuthenticator
  implements SwiftMailer_Transport_Esmtp_Authenticator
{
  
  /**
   * Get the name of the AUTH mechanism this Authenticator handles.
   * @return string
   */
  public function getAuthKeyword()
  {
    return 'PLAIN';
  }
  
  /**
   * Try to authenticate the user with $username and $password.
   * @param SwiftMailer_Transport_SmtpAgent $agent
   * @param string $username
   * @param string $password
   * @return boolean
   */
  public function authenticate(SwiftMailer_Transport_SmtpAgent $agent,
    $username, $password)
  {
    try
    {
      $message = base64_encode($username . chr(0) . $username . chr(0) . $password);
      $agent->executeCommand(sprintf("AUTH PLAIN %s\r\n", $message), array(235));
      return true;
    }
    catch (SwiftMailer_TransportException $e)
    {
      $agent->executeCommand("RSET\r\n", array(250));
      return false;
    }
  }
  
}
