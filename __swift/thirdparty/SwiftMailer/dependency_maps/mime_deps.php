<?php

require dirname(__FILE__) . '/../mime_types.php';

SwiftMailer_DependencyContainer::getInstance()
    
  -> register('properties.charset')
  -> asValue('utf-8')
  
  -> register('mime.grammar')
  -> asSharedInstanceOf('SwiftMailer_Mime_Grammar')
  
  -> register('mime.message')
  -> asNewInstanceOf('SwiftMailer_Mime_SimpleMessage')
  -> withDependencies(array(
    'mime.headerset',
    'mime.qpcontentencoder',
    'cache',
    'mime.grammar',
    'properties.charset'
  ))
  
  -> register('mime.part')
  -> asNewInstanceOf('SwiftMailer_Mime_MimePart')
  -> withDependencies(array(
    'mime.headerset',
    'mime.qpcontentencoder',
    'cache',
    'mime.grammar',
    'properties.charset'
  ))
  
  -> register('mime.attachment')
  -> asNewInstanceOf('SwiftMailer_Mime_Attachment')
  -> withDependencies(array(
    'mime.headerset',
    'mime.base64contentencoder',
    'cache',
    'mime.grammar'
  ))
  -> addConstructorValue($swiftmailer_mime_types)
  
  -> register('mime.embeddedfile')
  -> asNewInstanceOf('SwiftMailer_Mime_EmbeddedFile')
  -> withDependencies(array(
    'mime.headerset',
    'mime.base64contentencoder',
    'cache',
    'mime.grammar'
  ))
  -> addConstructorValue($swiftmailer_mime_types)
  
  -> register('mime.headerfactory')
  -> asNewInstanceOf('SwiftMailer_Mime_SimpleHeaderFactory')
  -> withDependencies(array(
      'mime.qpheaderencoder',
      'mime.rfc2231encoder',
      'mime.grammar',
      'properties.charset'
    ))
  
  -> register('mime.headerset')
  -> asNewInstanceOf('SwiftMailer_Mime_SimpleHeaderSet')
  -> withDependencies(array('mime.headerfactory', 'properties.charset'))
  
  -> register('mime.qpheaderencoder')
  -> asNewInstanceOf('SwiftMailer_Mime_HeaderEncoder_QpHeaderEncoder')
  -> withDependencies(array('mime.charstream'))
  
  -> register('mime.charstream')
  -> asNewInstanceOf('SwiftMailer_CharacterStream_NgCharacterStream')
  -> withDependencies(array('mime.characterreaderfactory', 'properties.charset'))
  
  -> register('mime.bytecanonicalizer')
  -> asSharedInstanceOf('SwiftMailer_StreamFilters_ByteArrayReplacementFilter')
  -> addConstructorValue(array(array(0x0D, 0x0A), array(0x0D), array(0x0A)))
  -> addConstructorValue(array(array(0x0A), array(0x0A), array(0x0D, 0x0A)))
  
  -> register('mime.characterreaderfactory')
  -> asSharedInstanceOf('SwiftMailer_CharacterReaderFactory_SimpleCharacterReaderFactory')
  
  -> register('mime.qpcontentencoder')
  -> asNewInstanceOf('SwiftMailer_Mime_ContentEncoder_QpContentEncoder')
  -> withDependencies(array('mime.charstream', 'mime.bytecanonicalizer'))
  
  -> register('mime.7bitcontentencoder')
  -> asNewInstanceOf('SwiftMailer_Mime_ContentEncoder_PlainContentEncoder')
  -> addConstructorValue('7bit')
  -> addConstructorValue(true)
  
  -> register('mime.8bitcontentencoder')
  -> asNewInstanceOf('SwiftMailer_Mime_ContentEncoder_PlainContentEncoder')
  -> addConstructorValue('8bit')
  -> addConstructorValue(true)
  
  -> register('mime.base64contentencoder')
  -> asSharedInstanceOf('SwiftMailer_Mime_ContentEncoder_Base64ContentEncoder')
  
  -> register('mime.rfc2231encoder')
  -> asNewInstanceOf('SwiftMailer_Encoder_Rfc2231Encoder')
  -> withDependencies(array('mime.charstream'))
  
  ;
  
unset($swiftmailer_mime_types);
