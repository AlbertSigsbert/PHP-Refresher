<?php

$file = '../extras/samplefile.txt';

if (file_exists($file)) {
    //Read from file
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);

    echo $contents;

}

else{
    //Write to a file

    $handle = fopen($file,'w');
    $contents = 'James'.PHP_EOL.'Japhet'.PHP_EOL.'Jacquline';
    fwrite($handle,$contents);
    fclose($handle);
}