<?php
//print_r($_REQUEST);

// if($_REQUEST){
//     echo "username is : ". $_REQUEST['user_name'];
//     echo "<br/>";
//     echo "password is : ". $_REQUEST['user_password'];
// }

$_REQUEST['dummy']="test";
if($_REQUEST){
   foreach($_REQUEST as $key => $data){
    echo $key . " is " . $data;
    echo "<br/>";
}
}

?>