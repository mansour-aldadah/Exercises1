<?php
$string = "abab";
$length = strlen($string);
if($length >= 2){
    echo ($string[0] . $string[1] == $string[$length - 2] . $string[$length - 1]) ? "true" : "false";
}else{
    echo 'The string must be at least 2 characters long';
}

?>