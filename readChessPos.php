<?php
//read from a file

$myfile = fopen("chessPos.txt", "r") or die("Unable to open file!");
// end-of-file
$string = fread($myfile,filesize("chessPos.txt"));
fclose($myfile);

echo json_encode($string);
?>
