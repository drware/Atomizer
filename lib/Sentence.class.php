<?php

/**
 * Sentence.class.php
 * 08-09-10
 *
 * A sentence is a collection of blocks.
 *
 */

class Sentence {

	var $_blocks = array();

	function __construct($sentence) {
		$_blocks = parse($sentence)
	}

	function read($sentence) {}

	function parse($sentence) {
		
	}

};

?>
