<!-- <?php
$x=20;
echo "before condition <br>";

if($x==20){
    goto jump;
}

$nonu="nischay";
echo $nonu;







jump:
echo "statement is jumped on line n0. 17"
?> -->


<?php
for($i=0; $i<=10; $i++){
    echo "$i <br>";

    if($i==5){
        goto outsideLoop;
    }
}

outsideLoop:
echo "Loop is break";
?>