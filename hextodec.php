<?php
// Open the file
$fh = fopen($argv[1], "r");
// Loop through the lines
while (($line = fgets($fh)) !== false) {
    $number = trim($line);
    echo hexdec($number).PHP_EOL; 
}
?>
