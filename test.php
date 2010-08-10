<?php

require_once("lib/Sentence.class.php");

$file = fopen("sentences.txt","r");
$sentences = array();

foreach($file as $line) {
	print($line,"\n");
	$s = new Sentence($line);
	array_push($sentences, $s);
	print $s;
}
	

?>
