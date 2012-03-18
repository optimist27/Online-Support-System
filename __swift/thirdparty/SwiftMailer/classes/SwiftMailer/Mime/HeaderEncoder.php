<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Interface for all Header Encoding schemes.
 * @package SwiftMailer
 * @subpackage Mime
 * @author Chris Corbyn
 */
interface SwiftMailer_Mime_HeaderEncoder extends SwiftMailer_Encoder
{
  
  /**
   * Get the MIME name of this content encoding scheme.
   * @return string
   */
  public function getName();
  
}
