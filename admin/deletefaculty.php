<?php
include ("inc/db.php");
$page_id=$_GET['page_id'];
$del="DELETE FROM faculty WHERE page_id='$page_id'";
$con->query($del);

header("location:facultylist.php");





?>