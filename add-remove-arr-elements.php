<?php
$users=["anil","sam","mohan","prince","sumit"];

print_r($users);
echo "<br>";
array_push($users, "amit");
print_r($users);

array_pop($users);
echo "<br>";
print_r($users);
echo "<br>";
array_splice($users,-2);
print_r($users);
?>