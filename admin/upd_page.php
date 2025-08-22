<?php
include ("inc/db.php");

    $id=$_POST['page_id'];
    $t=$_POST['pagetitle'];
    $d=$_POST['pdescription'];
  
    if(isset($_FILES['img']['name']) && $_FILES['img']['name']!=""){
    $fp=$_FILES['img']['name'];
    $buf=$_FILES['img']['tmp_name'];
    move_uploaded_file($buf,"upload/".$fp);
    $ins="UPDATE pages SET page_name='$t', description='$d', image='$fp' WHERE page_id='$id'";
    }else{
     $ins="UPDATE pages SET page_name='$t', description='$d' WHERE page_id='$id'";
    }
    $con-> query($ins);
   header("location:listpages.php");


?>