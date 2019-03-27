
<?php
$file_content = file_get_contents("ex01.txt");
$file_content_separated = explode(",", $file_content);

for ($index = 0; $index < count($file_content_separated); $index++) {
    echo $file_content_separated[$index], "\n";
}
?>