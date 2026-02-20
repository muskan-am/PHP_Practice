<?php
$users=["hello","pinky","bunty","sintu","pintu","binnu"];

foreach($users as $x){
    if($x=="bunty"){
        continue;
    }
    echo "<h1>".$x."</h1>";
    if($x=="pintu"){
        break;
    }
}


foreach($users as $y):
    echo $y;
    echo "<br>";
endforeach
?>