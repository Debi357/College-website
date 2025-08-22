<?php
include ("inc/db.php");

    $id=$_POST['page_id'];
    $fname=$_POST['facultyname'];
    $dep=$_POST['stream'];
    $post=$_POST['facpost'];
    $jdate=$_POST['joiningdate'];
    $ldate=$_POST['leavingdate'];
    $reas=$_POST['reason'];
    if(isset($_FILES['fpic']['name']) && $_FILES['fpic']['name']!=""){
    $fpic=$_FILES['fpic']['name'];
    $buf=$_FILES['fpic']['tmp_name'];
    move_uploaded_file($buf,"facpic/".$fpic);
    $ins="UPDATE faculty SET name='$fname',department='$dep',qualification='$post', date_of_joining='$jdate', date_of_leaving='$ldate', leaving_reason='$reas',picture='$fpic' WHERE page_id='$id'";
    }else{
     $ins="UPDATE faculty SET name='$fname', department='$dep', qualification='$post', date_of_joining='$jdate', date_of_leaving='$ldate', leaving_reason='$reas' WHERE page_id='$id'";
    }
    $con-> query($ins);
   header("location:facultylist.php");


?>