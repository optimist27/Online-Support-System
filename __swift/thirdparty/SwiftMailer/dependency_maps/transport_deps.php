<?php

SwiftMailer_DependencyContainer::getInstance()
  
  -> register('transport.smtp')
  -> asNewInstanceOf('SwiftMailer_Transport_EsmtpTransport')
  -> withDependencies(array(
    'transport.buffer',
    array('transport.authhandler'),
    'transport.eventdispatcher'
  ))
  
  -> register('transport.sendmail')
  -> asNewInstanceOf('SwiftMailer_Transport_SendmailTransport')
  -> withDependencies(array(
    'transport.buffer',
    'transport.eventdispatcher'
  ))
  
  -> register('transport.mail')
  -> asNewInstanceOf('SwiftMailer_Transport_MailTransport')
  -> withDependencies(array('transport.mailinvoker', 'transport.eventdispatcher'))
  
  -> register('transport.loadbalanced')
  -> asNewInstanceOf('SwiftMailer_Transport_LoadBalancedTransport')
  
  -> register('transport.failover')
  -> asNewInstanceOf('SwiftMailer_Transport_FailoverTransport')
  
  -> register('transport.spool')
  -> asNewInstanceOf('SwiftMailer_Transport_SpoolTransport')
  -> withDependencies(array('transport.eventdispatcher'))
  
  -> register('transport.null')
  -> asNewInstanceOf('SwiftMailer_Transport_NullTransport')
  -> withDependencies(array('transport.eventdispatcher'))
  
  -> register('transport.mailinvoker')
  -> asSharedInstanceOf('SwiftMailer_Transport_SimpleMailInvoker')
  
  -> register('transport.buffer')
  -> asNewInstanceOf('SwiftMailer_Transport_StreamBuffer')
  -> withDependencies(array('transport.replacementfactory'))
  
  -> register('transport.authhandler')
  -> asNewInstanceOf('SwiftMailer_Transport_Esmtp_AuthHandler')
  -> withDependencies(array(
    array(
      'transport.crammd5auth',
      'transport.loginauth',
      'transport.plainauth'
    )
  ))
  
  -> register('transport.crammd5auth')
  -> asNewInstanceOf('SwiftMailer_Transport_Esmtp_Auth_CramMd5Authenticator')
  
  -> register('transport.loginauth')
  -> asNewInstanceOf('SwiftMailer_Transport_Esmtp_Auth_LoginAuthenticator')
  
  -> register('transport.plainauth')
  -> asNewInstanceOf('SwiftMailer_Transport_Esmtp_Auth_PlainAuthenticator')
  
  -> register('transport.eventdispatcher')
  -> asNewInstanceOf('SwiftMailer_Events_SimpleEventDispatcher')
  
  -> register('transport.replacementfactory')
  -> asSharedInstanceOf('SwiftMailer_StreamFilters_StringReplacementFilterFactory')
  
  ;
