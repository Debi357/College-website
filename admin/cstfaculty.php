<?php include ("inc/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACULTY</title>
</head>

<style>
table,tr, th, td {
  border:1px solid black;
}
td{
	text-align:center ; 
	vertical-align:middle;
}

</style>
<body>
<h2><u><p>Computer Science & Technology</p></u></h2>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='computer science and technology'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>