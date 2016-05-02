<?php

// Open the file
$fh = fopen($argv[1], "r");
// Loop through the lines
while (($line = fgets($fh)) !== false) {
    $line = trim($line);
    
    $numbers = explode(' ',$line);
    
    $numbers = quicksort($numbers);
    
    foreach($numbers as $number)
    {
        echo $number.' ';
    }
    
    echo PHP_EOL;
    
    
    
    
}
//Implement quick sort algorithm
function quicksort( $array ) {
    if( count( $array ) < 2 ) {
        return $array;
    }
    $left = $right = array( );
    reset( $array );
    $pivot_key	= key( $array );
    $pivot	= array_shift( $array );
    foreach( $array as $k => $v ) {
    	if( $v < $pivot )
    		$left[$k] = $v;
    	else
    		$right[$k] = $v;
    }
    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
}
