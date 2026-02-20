<?php
$user_need=8;

for($i=1; $i<=10; $i++){
    if($i==3 || $i==5){
        continue;
    }
    echo "$i <br>";
    if($i==$user_need){
        break;
    }

}
?>