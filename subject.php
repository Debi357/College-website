<!DOCTYPE HTML>
<html>
<head>
<title>Free Strictly a Corporate Business Flat Responsive Web Template | About :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
.h2{
    text color:blue

}
</style>
<body>
<div class="header">	
	<div class="header-top">
		<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="images/logo3.png"alt=""></a>
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
				    <li><a href='gallery.php'><span>Gallery</span></a></li>
				   <li><a href='department.php'><span>Department</span></a></li>
				   <li><a href='faculty.php'><span>Faculty & Stuff</span></a></li>
				   <li class="dropdown">
				   <a href="javascript:void(0)" class="dropbtn"><span>Academics</span></a>
        <div class="dropdown-content">
        <a href="facilites.php">Facilites</a>
        <a href="admini.php">Administration</a>
      </div>
	  </li>
				   <li><a href='events.php'><span>events</span></a></li>
				   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
                   <li class='active'class='last'><a href='notice.php'><span>Notice</span></a></li>
				   <li><a href='admin/login.php'><span>Admin</span></a></li>
				   <div class="clear"></div> 
				</ul>
			  </div>
		 </div>
    </div>	
</div>
<br>
<div class="container">
    <div class="row">
    <div class="col-md-12 heading txtcenter">
                <h2 style="color:blue;"><ul> <span class="green-txt">Download syllebus</span></ul></h2>
            </div>
    </div>
    <div class="row">
            
            <form action="subwork.php" method="post" accept-charset="utf-8">
            <div class="row" style="padding: 5px;">
                <div class="col-sm-4">
                    <label>Academic Session</label><span class="text-danger">*</span>
                    <select class="form-control" name="session" id="session">
                        <option value="">--Select Academic Session--</option>
                                                    <option value="3"> 2020-2021 </option>
                                                    <option value="4">2021-2022 </option>
                                                    <option value="5">2022-2023 </option>
                                            </select>
                    <span class="text-danger"></span>
                </div>
                <br>
               
                <div class="col-sm-4">
                    <label>Semester</label><span class="text-danger">*</span>
                    <select class="form-control" name="semester" id="semester">
                        <option value="">--Select Semester --</option>
                                                    <option value="1">Semester 1                            </option>
                                                    <option value="2">Semester 2                            </option>
                                                    <option value="3">Semester 3                            </option>
                                                    <option value="4">Semester 4                            </option>
                                                    <option value="5">Semester 5                            </option>
                                                    <option value="6">Semester 6                            </option>
                                            </select>
                    <span class="text-danger"></span>
                </div>

                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success btn-block" style="margin-top:25px;"> <b><i class="fa fa-search"></i> Search</b></button>
                </div>
            </div>

            </form>
            <!---===============================:: Form Start From Here ::========================================-->

          <?php
           $sel="SELECT * FROM subjects where session=2020-2021"; 
           if( $semester=1)
           {
            
           }
          ?> 


                <!---===============================:: Form End Here ::========================================-->

        </div>
</div>