<?php 
//print_r($_POST)
if($_POST){
    echo "user name is : ". $_POST['username'];
    echo "<br/>";
    echo "user password is : ". $_POST['password'];
    echo "<br/>";
    echo "user email is : ". $_POST['email'];

}
?>