<!-- multidimentinal array is called nested array -->

<?php
$user=[
    [1,"anil","noida","anil@email.com"],
    [2, "bunty","gurgram", "bunty@email.com"],
    [3, "hainty","gurgram", "bunty@email.com"]
];

// echo "<pre>";
// print_r($user);
// echo "<pre>";


for($i=0; $i<count($user); $i++){
    for($j=0; $j<count($user[$i]); $j++){
        echo $user[$i][$j];
        echo "<br>";
    }
}


?>