<?php
$string = "G";
$length = strlen($string);
if($length >= 2){
    echo ($string[0] . $string[1] == 'Go') ? "true" : "false";
}else{
    echo 'The string must be at least 2 characters long';
}
?>