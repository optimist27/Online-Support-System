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

/** Text_Diff_Renderer */
require_once dirname(__FILE__).'/../Renderer.php';

define("WEIGHT_LINEADDED", 5);
define("WEIGHT_LINEDELETED", 5);
define("WEIGHT_WORDADDED", 2);
define("WEIGHT_WORDDELETED", 1);

/**
* @package Text_Diff
*/
/**
* "Inline" diff renderer.
*
* This class renders diffs in the Wiki-style "inline" format.
*
* @author  Ciprian Popovici
* @package Text_Diff
*/
class Text_Diff_Renderer_weightage extends Text_Diff_Renderer {

	/**
	* Default Weightage
	*/
	var $weightage = 0;

	/**
	* Number of leading context "lines" to preserve.
	*/
	var $_leading_context_lines = 10000;

	/**
	* Number of trailing context "lines" to preserve.
	*/
	var $_trailing_context_lines = 10000;

	/**
	* What are we currently splitting on? Used to recurse to show word-level
	* changes.
	*/
	var $_split_level = 'lines';

	function _blockHeader($xbeg, $xlen, $ybeg, $ylen) {
	}

	function _startBlock($header) {
		return $header;
	}

	function _lines($lines, $prefix = ' ', $encode = true) {
		if ($encode) {
			array_walk($lines, array(&$this, '_encode'));
		}

		if ($this->_split_level == 'words') {
			return implode('', $lines);
		} else {
			return implode("\n", $lines) . "\n";
		}
	}

	function _added($lines) {
		if ($this->_split_level == 'words')
		{
			$this->weightage += count($lines)*WEIGHT_WORDADDED;
		} else {
			$this->weightage += count($lines)*WEIGHT_LINEADDED;
		}
	}

	function _deleted($lines, $words = false) {
		if ($this->_split_level == 'words')
		{
			$this->weightage += count($lines)*WEIGHT_WORDDELETED;
		} else {
			$this->weightage += count($lines)*WEIGHT_LINEDELETED;
		}
	}

	function _changed($orig, $final) {
		if ($this->_split_level == 'words') {
			$prefix = '';
			while ($orig[0] !== false && $final[0] !== false && substr($orig[0], 0, 1) == ' ' && substr($final[0], 0, 1) == ' ') {
				$prefix .= substr($orig[0], 0, 1);
				$orig[0] = substr($orig[0], 1);
				$final[0] = substr($final[0], 1);
			}

			return $prefix . $this->_deleted($orig) . $this->_added($final);
		}

		$text1 = implode("\n", $orig);
		$text2 = implode("\n", $final);

		$nl = "\0";

		$diff = new Text_Diff($this->_splitOnWords($text1, $nl), $this->_splitOnWords($text2, $nl));

		$renderer = new Text_Diff_Renderer_weightage(array_merge($this->getParams(), array('split_level' => 'words')));

		/* Run the diff and get the output. */
		$_data = str_replace($nl, "\n", $renderer->render($diff)) . "\n";
		$this->weightage += $renderer->weightage;

		return $_data;
	}

	function _splitOnWords($string, $newlineEscape = "\n") {
		// Ignore \0; otherwise the while loop will never finish.
		$string = str_replace("\0", '', $string);

		$words = array();
		$length = strlen($string);
		$pos = 0;

		while ($pos < $length) {
			// Eat a word with any preceding whitespace.
			$spaces = strspn(substr($string, $pos), " \n");
			$nextpos = strcspn(substr($string, $pos + $spaces), " \n");
			$words[] = str_replace("\n", $newlineEscape, substr($string, $pos, $spaces + $nextpos));
			$pos += $spaces + $nextpos;
		}

		return $words;
	}

	function _encode(&$string) {
		$string = htmlspecialchars($string);
	}
}
