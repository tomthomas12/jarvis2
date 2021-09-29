<?php
$text = $_GET["text"];

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = $text;
    fwrite($myfile, $txt);
    fclose($myfile);
?>