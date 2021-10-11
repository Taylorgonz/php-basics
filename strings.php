<?php

$name = "Taylor";
// $string_one = "Learning to display \"Hello $name!\" to the screen. \n";
$string_one = 'Learning to display "Hello ' .  $name . '!" to the screen.';
$string_one .= "\n";

echo $string_one;

$isReady = true;
//var_dump($isReady);
$isReady = false;
//var_dump($isReady);

//var_dump(1 + "2");

$a = 10;
$b = "10";

//var_dump( $a === $b);

$string_one = "";

if($string_one == "Learning to display \"Hello Taylor!\" to the screen.") {
    echo "The values match \n";
} elseif ($string_one == "") {
    echo '$string_one is empty' . "\n";
} else {
    echo "The values DO NOT match \n";
}



?>