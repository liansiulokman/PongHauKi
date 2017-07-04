<?php
//write to a file
$myfile = fopen("chessPos.txt", "w") or die("Unable to open file!");
$data = $_POST["variable"];
fwrite($myfile,$data);
fclose($myfile);
?>
