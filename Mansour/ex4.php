<?php

$num1 = 5;
$num2 = 10;
$num3 = 7;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "The largest number is $num1";
}else if ($num2 >= $num1 && $num2 >= $num3) {
    echo "The largest number is $num2";
}else{
    echo "The largest number is $num3";
}


?>