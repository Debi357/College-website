<?php
include ("inc/db.php");
if(isset($_POST['save']))
{   
    $id=$_POST['page_id'];
    $ename=$_POST['eventname'];
    $edate=$_POST['eventdate'];
    $epic=$_FILES['pic']['name'];
    $buf=$_FILES['pic']['tmp_name'];
    move_uploaded_file($buf,"evepic/".$epic);
    $ins= "INSERT into events set page_id='$id',name ='$ename', organised_on_date ='$edate', organised_by='$epic'";
    $con-> query($ins);
    header("location:eventlist.php");
}
else
{
    echo "Acess Denied";
}

?>