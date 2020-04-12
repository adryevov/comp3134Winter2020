<?php
$data = file_get_contents( "storedxss.txt" );
echo  $data;
?>