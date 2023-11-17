<?php
$file = 'extras/users.txt';

if (file_exists($file)) {
    // echo readfile($file);
    $handler = fopen($file,'r');
    $contents = fread($handler, filesize($file));
    fclose($handler);
    echo $contents;
}
else{
    $handler = fopen($file,'w');
    $contents = 'brad'. PHP_EOL . 'admin' . PHP_EOL . 'john';
    fwrite($handler, $contents);
    fclose($handler);
}
?>