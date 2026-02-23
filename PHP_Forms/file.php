<?php
// echo "File upload SuccessFully!!!!";
 //print_r($_FILES['fileUpload']);

if($_FILES['fileUpload']){
    $path=$_FILES['fileUpload']['name'];
    $upload_path="./uploads/".$path;
    // echo $upload_path;
    
    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)){
       echo ("File Uploaded successfully");
    }else{
        die("failed to upload");
    }
}else{
    die("no file found");
}
?>