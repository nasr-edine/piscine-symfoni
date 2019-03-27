<?php

require_once('TemplateEngine.php');
$test = new TemplateEngine();
$test->createFile("test.html", "book_description.html", array('nom' => 'aaaaa', 'auteur' => 'bbbbbbb','description' => 'cccccccc', 'prix' => '20'));
?>