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
  <h1>Architecture</h1>
<table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='Architechture'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }

    ?>
    </tbody>
  </table>
  <h1> Computer sceince and technology</h1>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
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
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<h1>Electronics and telecommunication </h1>
    <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='Electronics and telecommunication'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
     </table>
     <h1>MOPM</h1>
    <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='MOPM'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <h1> Others</h1>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='mathematics'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='physics'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='chemistry'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='welding'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='mechanical engeeniaring'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='electrical engeeniaring'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='humanities'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='3D animation and graphics'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <h1>Stuff</h1>
  <table style="width:100%">
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>designation</th>
        <th>Date of joining</th>
        <th>Date of leaving</th>
        <th>leaving reason</th>
        <th>image</th>
      </tr>
    <tbody>
    <?php 
    $sel="SELECT * FROM faculty where department='stuff'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
    <tr>
      <tr> <td><?php echo $row['name'];?> </td>
           <td><?php echo $row['department'];?> </td>
           <td><?php echo $row['qualification']; ?> </td>
           <td><?php echo $row['date_of_joining'];?> </td>
           <td><?php echo $row['date_of_leaving'];?> </td>
           <td><?php echo $row['leaving_reason'];?> </td>
		   <td><img style="width:100px" src="facpic/<?php echo $row['picture']; ?>"></td>
           <td><a onclick="return confirm('confirm delete?');" href="deletefaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-danger">Delete</a></td>
           <td><a href="editfaculty.php?page_id=<?php echo $row['page_id'];?>" class="btn btn-success">Edit</a></td>
			
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
</body>
      </tr>
    </thead>
    <tbody>
    <a href="logout.php"><input type ="submit" name="" value="Logout" style="curser:pointer;"></a>
</body>
</html>