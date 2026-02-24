<?php
setcookie("fruit","apple", time()+(86400));
setcookie("color","red", time()+(86400));

if(isset($_COOKIE['fruit'])){
    echo "current fruit is : ". $_COOKIE['fruit'];
}else{
    echo "no cookie set";
}

echo "</br>";

if(isset($_COOKIE['color'])){
    echo "current color is : ". $_COOKIE['color'];
}else{
    echo "no cookie set";
}

echo "<br/>";

print_r($_COOKIE);
?>