<?php 
$num1 = 59;
$num2 = 122;

$space1 = 100 - $num1;
if ($space1 < 0){
    $space1 = -$space1;
}
$space2 = 100 - $num2;
if ($space2 < 0){
    $space2 = -$space2;
}

if ($space1 < $space2){
    echo "The number $num1 is nearer to the value 100 than the number $num2";
}elseif($space1 > $space2){
    echo "The number $num2 is nearer to the value 100 than the number $num1";
}else{
    echo "0 the number $num1 and number $num2 are equal in the distance to the value 100";
}
?>