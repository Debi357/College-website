<?php
include ("inc/db.php");
if(isset($_POST['save']))
{   
    $id=$_POST['page_id'];
    $des=$_POST['noticedes'];
    $sub=$_POST['noticename'];
    $date=$_POST['noticedate'];
    
    $ins= "INSERT into notice set page_id='$id', description='$des', subject='$sub', date ='$date'";
    $con-> query($ins);
    header("location:noticelist.php");
}
else
{
    echo "Acess Denied";
}

?>