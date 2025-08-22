<?php
session_start();
?>
<html>
<head>
	<title> Form design </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="logcss.css">
</head>
<body>
	<form action="#" method="post">
	<div class="container">
	<div class="form">
			<h2>login </h2>
				<input type="text" name="uname" class="txtfile" placeholder="Username"><br><br>
				<input type="password" name="pw" class="txtfile" placeholder="password"><br><br>
				<div class="forgtpas" ><a href="#" class="link" onclick="message()"><font color="#f25278"> Forget Password ? </font></a></div>
				<input type="submit" name="login" value="login" class="btn">
	
	</form>
	</div>
	<div class="image">
		<img src="upload/admin banner.png">
    </div>	
	<script>
		function message()
		{
			alert("Sorry you cannot login");
		}
	</script>
	
</body>
	</div>
</html>
<?php
 include("inc/db.php");
 if(isset($_POST['login']))
 {
	 $uname=$_POST['uname'];
	 $pw=$_POST['pw'];
	 
	 $query="select * from admin where user_name='$uname' && password='$pw'";
	 $data=mysqli_query($con, $query);
	 $total=mysqli_num_rows($data);
	 if($total==1)
	 {
		$_SESSION['uname'] = $uname;
		header('location:d.php');
	 }
	 else
	 {
		 
		echo("Wrong user id or password");
	 }
 }
?>