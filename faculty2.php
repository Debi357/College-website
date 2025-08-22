<?php include ("admin/inc/db.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Strictly a Corporate Business Flat Responsive Web Template | About :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">	
	<div class="header-top">
		<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="images/logo3.png" alt=""></a>
					
				</div>
				<div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
			<div class="clear"></div> 
	    </div>
    </div>
	<div class="header-bottom">
		 <div class="wrap"> 
			 <div id='cssmenu'>
				<ul>
				   <li><a href='index.php'><span>Home</span></a></li>
				   <li><a href='about.php'><span>About</span></a></li>
				   <li class='has-sub'><a href='description.php'><span>Description</span></a>
				     
				   </li>
				    <li><a href='gallery.php'><span>Gallery</span></a></li>
				   <li><a href='department.php'><span>Department</span></a></li>
				   <li><a href='faculty.php'><span>Faculty & Stuff</span></a></li>
				   <li><a href='events.php'><span>events</span></a></li>
				   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
				   <li class='last'><a href='notice.php'><span>Notice</span></a></li>
				   <li><a href='admin/login.php'><span>Admin</span></a></li>
				   <div class="clear"></div> 
				</ul>
			  </div>
		 </div>
    </div>	
</div>
     <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<?php
    $sel="SELECT * FROM PAGES WHERE page_id='35'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
<h2><?php echo $row['page_name'];?></h2>

<p><?php echo $row['description']; ?></p>

     <?php } ?>
									    
					</div>	
					<div class="clear"></div> 			
		        </div>
          </div>