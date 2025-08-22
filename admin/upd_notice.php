<?php
include ("inc/db.php");
if(isset($_POST['save']))
{   
    $id=$_POST['page_id'];
    $des=$_POST['noticedes'];
    $sub=$_POST['noticename'];
    $date=$_POST['noticedate'];
    
     $ins="UPDATE notice SET description='$des',subject='$sub', date='$date' WHERE page_id='$id'";
    }
    $con-> query($ins);
   header("location:noticetlist.php");


?>