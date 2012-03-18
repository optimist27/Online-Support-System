<?php
/**
 * "Context" diff renderer.
 *
 * This class renders the diff in classic "context diff" format.
 *
 * $Horde: framework/Text_Diff/Diff/Renderer/context.php,v 1.5 2008/01/04 10:07:51 jan Exp $
 *
 * Copyright 2004-2008 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you did
 * not receive this file, see http://opensource.org/licenses/lgpl-license.php.
 *
 * @package Text_Diff
 */

/** Text_Diff_Renderer */
require_once dirname(__FILE__).'/../Renderer.php';

/**
 * @package Text_Diff
 */
class Text_Diff_Renderer_context extends Text_Diff_Renderer {

    /**
     * Number of leading context "lines" to preserve.
     */
    var $_leading_context_lines = 4;

    /**
     * Number of trailing context "lines" to preserve.
     */
    var $_trailing_context_lines = 4;

    var $_second_block = array();
    var $_first_block = array();
	var $_index = 0;
	var $ybeg;
	var $xbeg;
	var $ylen;
	var $xlen;
	var $xblocks;
	var $yblocks;

    function _blockHeader($xbeg, $xlen, $ybeg, $ylen)
    {
		$this->ybeg[$this->_index] = $ybeg;
		$this->xbeg[$this->_index] = $xbeg;
		$this->ylen[$this->_index] = $ylen;
		$this->xlen[$this->_index] = $xlen;
		$this->xblocks[$this->_index] = array($xbeg, $xlen);
		$this->yblocks[$this->_index] = array($ybeg, $ylen);

        if ($xlen != 1) {
            $xbeg .= ',' . $xlen;
        }
        if ($ylen != 1) {
            $ybeg .= ',' . $ylen;
        }

		$this->_first_block[$this->_index] = array();
		$this->_second_block[$this->_index] = array();

        //$this->_second_block = "--- $ybeg ----\n";
        //return "***************\n*** $xbeg ****";
		return '';
    }

    function _endBlock()
    {
		$this->_index++;
        //return $this->_second_block;
		return '';
    }

    function _context($lines)
    {
        //$this->_second_block .= $this->_lines($lines, '  ');
        //return $this->_lines($lines, '  ');

		$this->_second_block[$this->_index] = array_merge($this->_second_block[$this->_index], $this->_lineslist($lines, '  '));
		$this->_first_block[$this->_index] = array_merge($this->_first_block[$this->_index], $this->_lineslist($lines, '  '));
		return '';
    }

    function _added($lines)
    {

		$this->_second_block[$this->_index] = array_merge($this->_second_block[$this->_index], $this->_lineslist($lines, '+ '));

		//$this->_second_block .= $this->_lines($lines, '+ ');
        return '';
    }

    function _deleted($lines)
    {
		$this->_first_block[$this->_index] = array_merge($this->_first_block[$this->_index], $this->_lineslist($lines, '- '));
		return '';

		//return $this->_lines($lines, '- ');
    }

    function _changed($orig, $final)
    {
		$this->_second_block[$this->_index] = array_merge($this->_second_block[$this->_index], $this->_lineslist($final, '! '));
		$this->_first_block[$this->_index] = array_merge($this->_first_block[$this->_index], $this->_lineslist($orig, '! '));

		return '';
        //return $this->_lines($orig, '! ');
    }

}
