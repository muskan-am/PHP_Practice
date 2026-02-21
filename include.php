<?php
//include("./hello-world.php"); //wrong file dene per warning milegi 


for($i=0; $i<10; $i++){
   // include("./hello-world.php"); //One time pe multiple file load
   //include_once("./hello-world.php"); //one time pe only  one file load
}

//require("./hello-world.php"); //wrong file dene pe fetal error show


for($i=0; $i<10; $i++){
    require_once("./hello-world.php");
}
?>