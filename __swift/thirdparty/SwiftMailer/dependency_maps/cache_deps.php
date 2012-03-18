<?php

SwiftMailer_DependencyContainer::getInstance()
  
  -> register('cache')
  -> asAliasOf('cache.array')
  
  -> register('tempdir')
  -> asValue('/tmp')
  
  -> register('cache.null')
  -> asSharedInstanceOf('SwiftMailer_KeyCache_NullKeyCache')
  
  -> register('cache.array')
  -> asSharedInstanceOf('SwiftMailer_KeyCache_ArrayKeyCache')
  -> withDependencies(array('cache.inputstream'))
  
  -> register('cache.disk')
  -> asSharedInstanceOf('SwiftMailer_KeyCache_DiskKeyCache')
  -> withDependencies(array('cache.inputstream', 'tempdir'))
  
  -> register('cache.inputstream')
  -> asNewInstanceOf('SwiftMailer_KeyCache_SimpleKeyCacheInputStream')
  
  ;
