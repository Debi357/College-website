<?php include ("inc/db.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTS</title>
</head>
<?php
$userprofile = $_SESSION["uname"];
if($userprofile == true)
{

}
else
{
    header('location:login.php');
}
?>
<style>
table, th, td {
  border:1px solid black;
}

.row{
	display: flex;
  margin-left:-5px;
  margin-right:-5px;
}

.column {
  
  padding: 5px;
}

table {
  border-collapse: separate;
  border-spacing: 5px;
  width: 100%;
  
}

th, td {
  text-align: left;
}

tr:nth-child(even) {
  background-color: white;
}


</style>
<body>
<div class="row">
  <div class="column">
<table class="table">
    
    <table style="width:100%">
    <tbody>
        <?php
        $sel="SELECT * FROM EVENTS where page_id % 2!=0";
        $rs=$con->query($sel);
        while($row=$rs->fetch_assoc()){ 
        ?>

		<tr> 
        <table>
                    <tr><td colspan="4"><?php echo $row['page_id'];?> </td></tr>
					<td colspan="4"><img style="width:700px; height:400px" src="evepic/<?php echo $row['organised_by']; ?>"></td>
					<tr><td><?php echo $row['name'];?> </td>
                    <td><?php echo $row['organised_on_date']; ?> </td>
                    <td><a onclick="return confirm('confirm delete?');" href="deleteevent.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editevent.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
			<?php
        }
        ?>
        </tbody>
			</table>
</div>
<div class="column">
<table class="table">
    <table style="width:100%">
        <tbody>
    <?php 
    $sel="SELECT * FROM events where page_id % 2=0";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
	<tr> 
        <table>
            <tr><td colspan="4"><?php echo $row['page_id'];?> </td></tr>
            <tr><td colspan="4"><img style="width:700px; height:400px" src="evepic/<?php echo $row['organised_by']; ?>"></td></tr>
            <tr> <td><?php echo $row['name'];?></td>
            <td> <?php echo $row['organised_on_date']; ?> </td>
            <td><a onclick="return confirm('confirm delete?');" href="deleteevent.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editevent.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
        </tr>
    <?php
    }
    ?>
	</tbody>
</table>
</div>
</div>
<a href="logout.php"><input type ="submit" name="" value="Logout" style="curser:pointer;"></a>
</body>
      </tr>
    </thead>
    <tbody>
</body>
</html>