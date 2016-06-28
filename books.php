<?php

$doc - new DOMDocument("1.0");

$doc->formatOutput = true;

$root = $doc->createElement('book');
$root = $doc->appendChild($root);

$title = $doc->createElement('title');
$title = $root->appendChild($title);

$text = $doc->createTextNode('This is the title');

$text->appendChild($text);

echo 'echo' . $doc?save("/tmp/test.xml");


?>