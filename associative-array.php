<?php
$userDetails=[
    "name"=>"pinki",
    "age"=>26,
    "city"=>"bhnsnjsk",
    "email"=>"pinki@gmail.com",
    "state"=>"UP"
];

echo $userDetails["name"];
echo "<br>";
echo $userDetails["age"];


echo "<br>";

// foreach($userDetails as $key=>$data){
//     echo $key. ": is ". $data;
//     echo "<br>";
// }


foreach($userDetails as $key=>$data):
    echo $key. " is ". $data;
    echo "<br>";
endforeach
?>