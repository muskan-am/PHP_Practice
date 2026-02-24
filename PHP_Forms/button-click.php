<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call php Function</title>
</head>
<body>
    <form action="" method="post">
        <button name="button">
            Call Function
        </button>
    </form>
</body>
</html>
 
<?php
   if(isset($_POST['button'])){
     btn_click_test();
   }

   function btn_click_test(){
    echo "function called button click";
   }
?>