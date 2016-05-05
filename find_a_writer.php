<?php

$fh = fopen($argv[1], "r");
// Loop through the lines
while (($line = fgets($fh)) !== false) {
    $line = trim($line);
    
    $strings = explode('|',$line);
    
    $numbers = explode(" ",trim($strings[1]));
    
    $name = '';
    
    $string = trim($strings[0]);
    
    foreach ($numbers as $number) {
        $name .=$string[$number-1];
    }
    
    echo $name.PHP_EOL;
    
    
}
?>
