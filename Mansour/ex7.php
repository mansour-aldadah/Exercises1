<?php
$string = "3a2sas;sa5df2df5";
$count = 0;
for($i = 0; $i <= strlen($string) - 1 ; $i++){
    if($string[$i] >= '0' && $string[$i] <= '9'){
        $count++;
    }
}
echo $count;
?>