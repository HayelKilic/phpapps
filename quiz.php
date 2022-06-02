<?php

$number = rand (1,100);
echo $number;
$guesses =1;
$won = false;

echo "\n I am thinking of a number between 1 and 100 ";

while (!$won)
{
    $guess=readline("guess the number");
    if ($guess== "stop" || $guess > 100 || $guess < 1) {
        exit;
    }
    elseif($guess==$number){
        echo"congrats";
        $won=true;
    } 
    elseif ($guess > $number){
        echo "[too high]";
    }
    
    elseif ($guess < $number){

    echo "[too low]"; }

}
?>