<?php

$fh = fopen($argv[1], "r");
$i=1;
while ($i<=40 ) {
    $line = fgets($fh);
    $line = trim($line);
    
    $inputes = explode(" ",$line);
    $operators = [];
    $numbers = [];
    $validOperators = ['+','*','/'];
    foreach ($inputes as $input) {
        if(in_array($input, $validOperators))
        {
            $operators[] = $input;
        }else {
            $numbers[] = $input;
        }
    }
    
    $result = array_shift($numbers);
    foreach($numbers as $number)
    {
        $operator = array_pop($operators);
        if($operator==='+')
        {
            $result +=$number;
            
        }elseif ($operator==='*') {
           $result *=$number;
        }else{
           $result =$result/$number; 
        }

    }
    
    if($result>=0)
    {
        echo $result;
    }
    echo PHP_EOL;
    

    $i++;
}

?>
