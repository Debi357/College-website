<?php
include ("inc/db.php");
if(isset($_POST['save']))
{
    $id=$_POST['page_id'];
    $t=$_POST['pagetitle'];
    $d=$_POST['pdescription'];
    $fp=$_FILES['img']['name'];
    $buf=$_FILES['img']['tmp_name'];
    move_uploaded_file($buf,"upload/".$fp);
    $ins= "INSERT into pages set page_id='$id',page_name='$t', description='$d', image='$fp'";
    $con-> query($ins);
    header("location:listpages.php");
}
else
{
    echo "Acess Denied";
}

?>