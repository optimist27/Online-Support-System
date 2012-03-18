#!/usr/bin/php -q
<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

// Interface Declarations
define('SWIFT_INTERFACE', 'console');
define('SWIFT_INTERFACEFILE', __FILE__);

if (defined("SWIFT_CUSTOMPATH"))
{
	chdir(SWIFT_CUSTOMPATH);
} else {
	chdir(dirname(__FILE__) . '/../__swift/');
}

require_once ('./swift.php');

?>