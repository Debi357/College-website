<?php
include ("inc/db.php");
if(isset($_POST['save']))
{   
    $id=$_POST['page_id'];
    $fname=$_POST['facultyname'];
    $dep=$_POST['stream'];
    $post=$_POST['facpost'];
    $jdate=$_POST['joiningdate'];
    $ldate=$_POST['leavingdate'];
    $reas=$_POST['reason'];
    $fpic=$_FILES['fpic']['name'];
    $buf=$_FILES['fpic']['tmp_name'];
    move_uploaded_file($buf,"facpic/".$fpic);
    $ins= "INSERT into faculty set page_id='$id',name='$fname', department='$dep', qualification='$post', date_of_joining='$jdate', date_of_leaving='$ldate', leaving_reason='$reas',picture='$fpic'";
    $con-> query($ins);
    header("location:facultylist.php");
}
else
{
    echo "Acess Denied";
}

?>