<?php

$fizz="Fizz";
$buzz="Buzz";

for($num = 1; $num <= 100; $num ++){
    if($num %5 == 0&&$num %3==0){
        echo $fizz.$buzz."!";
    }elseif($num %5==0){
        echo $buzz."!";
    }elseif($num %3==0){
        echo $fizz."!";
    }else{echo $num;}
echo "<br>";

}
?>