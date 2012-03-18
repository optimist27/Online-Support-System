<?php

SwiftMailer_DependencyContainer::getInstance()

  -> register('message.message')
  -> asNewInstanceOf('SwiftMailer_Message')

  -> register('message.mimepart')
  -> asNewInstanceOf('SwiftMailer_MimePart');
