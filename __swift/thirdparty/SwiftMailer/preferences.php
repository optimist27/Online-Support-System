<?php

/****************************************************************************/
/*                                                                          */
/* YOU MAY WISH TO MODIFY OR REMOVE THE FOLLOWING LINES WHICH SET DEFAULTS  */
/*                                                                          */
/****************************************************************************/

// Sets the default charset so that setCharset() is not needed elsewhere
SwiftMailer_Preferences::getInstance()->setCharset('utf-8');

// Without these lines the default caching mechanism is "array" but this uses
// a lot of memory.
// If possible, use a disk cache to enable attaching large attachments etc

/*
 * BUG FIX - Varun Shoor
 *
 * SWIFT-1654 User's registration fails - (SwiftMailer/preferences.php:15) - open_basedir restriction in effect. File(/var/tmp)
 *
 * Comments: Added upload_tmp_dir and kept the sys_get_temp_dir as a fallback
 */
if (ini_get('upload_tmp_dir') && is_writable(ini_get('upload_tmp_dir') . '/'))
{
  SwiftMailer_Preferences::getInstance()
    -> setTempDir(ini_get('upload_tmp_dir'))
    -> setCacheType('disk');
} else if (function_exists('sys_get_temp_dir') && is_writable(sys_get_temp_dir())) {
  SwiftMailer_Preferences::getInstance()
    -> setTempDir(sys_get_temp_dir())
    -> setCacheType('disk');
}

SwiftMailer_Preferences::getInstance()->setQPDotEscape(false);