<?php
//$users=array("anil", "piter", "sintu", "bittu");


$users=["anil", "piter", "sintu", "bittu","pinkki"];
// echo $users[2];
// echo "<br>";
// echo $users[0];

for($user=0; $user<count($users); $user++){
    echo "<h1 style='color:red'>".$users[$user]."<h1>";
}
?>