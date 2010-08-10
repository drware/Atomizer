<?php

/**
 * Atom.class.php
 * 08-09-10
 *
 * Atoms are objects that make up classes.
 */

class Atom {

	var $_chars;

	function __construct() {
		$this->_chars = array();
	}

	function add($char) {
		array_push($this->_chars, $char);
	}

	function getString() {
		return $this->_chars;
	}

};

?>
