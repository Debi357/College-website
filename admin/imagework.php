<?php
include ("inc/db.php");
if(isset($_POST['save']))
{   
    $id=$_POST['id'];
    $pic=$_FILES['img']['name'];
    $buf=$_FILES['img']['tmp_name'];
    move_uploaded_file($buf,"upload/".$pic);
    $ins= "INSERT into gallery set id='$id',image='$pic'";
    $con-> query($ins);
    header("location:addimage.php");
}
else
{
    echo "Acess Denied";
}

?>