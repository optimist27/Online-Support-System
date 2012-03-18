<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Autoloader and dependency injection initialization for SwiftMailer Mailer.
 */

if (defined('SWIFTMAILER_REQUIRED_LOADED'))
	return;

define('SWIFTMAILER_REQUIRED_LOADED', true);

//Load SwiftMailer utility class
require dirname(__FILE__) . '/classes/SwiftMailer.php';

//Start the autoloader
SwiftMailer::registerAutoload();

//Load the init script to set up dependency injection
require dirname(__FILE__) . '/swiftmailer_init.php';
