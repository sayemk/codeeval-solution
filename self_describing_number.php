<?php
// Open the file
$fh = fopen($argv[1], "r");
// Loop through the lines
while (($line = fgets($fh)) !== false) {
    
    $line = trim($line);
    $check = false;
    for($i=0; $i< strlen($line); $i++)
    {
        $number = $line[$i];

        preg_match_all("/[$i]/",$line, $numbers);
        
        //print_r($numbers);

        if($number==count($numbers[0]))
        {
        	$check = true;
        }else{
        	break;
        }
        
    }

    if ($check) {
    	echo 1;
    } else {
    	echo 0;
    }
    
    
    echo PHP_EOL;
}
