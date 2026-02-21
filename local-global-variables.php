<?php
// $name="vani";

// function geeta(){
//     //$name="peter";
//     global $name;
//     echo "$name";
// }
// echo $name;
// echo "<br>";
// geeta();  


$name="anil";

function test(){
   $name="peter";
   echo $name;

   function innerTest(){
    //$name="billu";
    global $name;
    echo $name;
   }
}

test();
echo "<br>";
echo $name;
echo "<br>";
innerTest();
echo "<br>";
echo $name;

?>