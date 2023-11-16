<?php
$file = 'extras/users.txt';

if (file_exists($file)) {
    // echo readfile($file);
    $handler = fopen($file,'r');
    $contents = fread($handler, filesize($file));
    fclose($handler);
    echo $contents;
}
?>