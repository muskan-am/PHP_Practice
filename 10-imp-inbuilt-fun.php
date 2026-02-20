<?php

$str="muskan";
echo strlen($str); // find length
echo "<br>";
echo var_dump($str); //find datatypes
echo "<br>";
echo "<br>";
echo date("M"); //find month
echo "<br>";
echo date("l"); //find days
echo "<br>";
echo date("d"); //find date
echo "<br>";
echo date("Y"); //find year
echo "<br>";
echo date("m.d.y");



// echo phpinfo(); //find about php information

echo "<br>";

$var="12345";
echo is_string($var); //answer in boolean



echo "<br>";
$value=123;
echo is_int($value);


echo "<br>";
echo "<br>";

echo rand();   //generate random number


echo "<br>";
echo "<br>";

echo "before";
// die();
// exit();
echo "<br>";
echo "after";

echo "<br>";

$str="code step by step";
echo substr($str, 4);
echo "<br>";
echo substr($str, -6);

?>