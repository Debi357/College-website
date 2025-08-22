<?php
include ("inc/db.php");

    $id=$_POST['page_id'];
    $ename=$_POST['eventname'];
    $edate=$_POST['eventdate'];
    if(isset($_FILES['pic']['name']) && $_FILES['pic']['name']!=""){
    $epic=$_FILES['pic']['name'];
    $buf=$_FILES['pic']['tmp_name'];
    move_uploaded_file($buf,"evepic/".$epic);
    $ins="UPDATE events SET name='$ename', organised_on_date='$edate', organised_by='$epic' WHERE page_id='$id'";
    }else{
     $ins="UPDATE events SET name='$ename', organised_on_date='$edate' WHERE page_id='$id'";
    }
    $con-> query($ins);
   header("location:eventlist.php");


?>