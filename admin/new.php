<?php
$t=$_POST['pagetitle'];
$d=$_POST['pdescription'];
$p=$_FILES['img']['name'];
$buf=$_FILES['img']['tmp_name'];
move_uploaded_file($buf," pimage/".$p);
$con=mysqli_connect("localhost","root","","project");
$ins= "INSERT into pages set page_name='$t', description='$d', image='$p'";
$con-> query($ins);
?>
<h1><?php echo $t; ?></h1>
<h1><?php echo $d; ?></h1>
<h1><?echo $p; ?></h1>