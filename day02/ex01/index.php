<?php

require_once('TemplateEngine.php');
require_once('Text.php');
$templatenngine = new TemplateEngine();
$text = new Text(array('nom' , 'auteur', 'description', 'prix'));
$text->printText();
$templatenngine->createFile("test.html", $text);
?>