<?php
$num1 = 35;
$num2 = 25;

if ($num1 > 0 && $num2 > 0) {
    if ($num1 >= 20 && $num2 >= 20 && $num1 <= 30 && $num2 <= 30) {
        if($num1 > $num2){
            echo "$num1 Larger than $num2";
        }elseif($num2 > $num1){
            echo "$num2 Larger than $num1";
        }else{
            echo "Both numbers is equal $num1";
        }
    }else{
        echo 'Both numbers must be between 20 and 30';
    }
}else{
    echo 'Both numbers must be positive';
}

?>