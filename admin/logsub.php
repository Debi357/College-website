<?php
session_start();
$uid=$_POST['uid'];
$utype=$_POST['utype'];
$email=$_POST['email'];
$pw=$_POST['pw'];
echo"<br>Given id:".$uid;
echo"<br> user type:".$utype;
echo"<br>Given email:".$email;
echo"<br>Given password:".$pw;
?>