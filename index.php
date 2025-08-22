<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include ("admin/inc/db.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Strictly a Corporate Business Flat Responsive Web Template | Home :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>


	<style>

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}


h1{ color:green; font-size:190%;
			}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 50%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
	color: white;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

.footer-map {
  position: relative;
  overflow: hidden;
  width: 100%;
  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
.center {
  display: flex;
  justify-content: center;
}
}
	</style>
</head>
<body>
<div class="header">	
	<div class="header-top">
		<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="images/wpk.jpg" alt=""></a>
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
				   <li class='active'><a href='index.php'><span>Home</span></a></li>
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
				   <li class='last'><a href='notice.php'><span>Notice</span></a></li>
				   <li><a href='admin/login.php'><span>Admin</span></a></li>
				    <div class="clear"></div> 
				</ul>
			  </div>
		 </div>
    </div>	
</div>
      <!------ Slider ------------>
		  <div class="slider">
		  	<div class="wrap">
	      	 <div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="images/collegeget.jpg"alt="" />
	                
	                <img src="images/college2.jpg" alt="" />
	                <img src="images/college3.jpg" alt="" />
	                
	            </div>
	        </div>
	        </div>
   		</div>
		<!--------End Slider ------------>
		
		<div class="content-top">
			<div class="wrap">
				<div class="section group">
				<?php
    $sel="SELECT * FROM PAGES WHERE page_id='7'";
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
		  </div>
		<div class="content-top">
			<div class="wrap">
			   <div class="top-content">
			   <?php
    $sel="SELECT * FROM PAGES WHERE page_id='38'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
<h2><?php echo $row['page_name'];?></h2>

<p><?php echo $row['description']; ?></p>
<!--<p><img style="width:500px" src="images/headmiss.jpg<?php echo $row['image']; ?>"></p>-->

     <?php } ?>
									    
					</div>	
					<div class="clear"></div> 			
		        </div>
          </div>
		<!--<div class="content-bottom">
			<div class="wrap">
				 <div class="middle-content">
                    <h2>Our Staff</h2>
                    <hr class="hr1"><br>
                    <hr class="hr2">
                 </div>
				<div class="section group example">
					<div class="col_1_of_2 span_1_of_2">
					       <ul class="list3">
                                <li>
                                    <figure><img src="images/pic14.jpg" alt=""></figure>
                                    <div class="extra-wrap1">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                                        <p class="lnk"><i>Lorem ipsum</i> / dolor sit amet <a href="#">tincidunt </a></p>
                                    </div>
                                </li>
                                <li>
                                      <figure><img src="images/pic3.jpg" alt=""></figure>
                                    <div class="extra-wrap1">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                                        <p class="lnk"><i>Lorem ipsum</i> / dolor sit amet <a href="#">tincidunt </a></p>
                                    </div>
                                </li>
                            </ul>
				     </div>
				<div class="col_1_of_2 span_1_of_2">
					 <ul class="list3">
                                <li>
                                    <figure><img src="images/pic4.jpg" alt=""></figure>
                                    <div class="extra-wrap1">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                                        <p class="lnk"><i>Lorem ipsum</i> / dolor sit amet <a href="#">tincidunt </a></p>
                                    </div>
                                </li>
                                <li>
                                      <figure><img src="images/pic5.jpg" alt=""></figure>
                                    <div class="extra-wrap1">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                                        <p class="lnk"><i>Lorem ipsum</i> / dolor sit amet <a href="#">tincidunt </a></p>
                                    </div>
                                </li>
                            </ul>
 				</div>
			   <div class="clear"></div> 
		    </div>
			</div>
		</div>--->
		<footer class="footer-distributed">

<div class="footer-left">

	<h3>Womens Polytechnic,Kolkata</h3>

	<p class="footer-links">
		<a href="index.php" class="link-1">Home</a>
		
		<a href="department.php">Department</a>
	
		<a href="gallery.php">gallery</a>
	
		<a href="about.php">About</a>
		
		<a href="contact.php">Contact</a>
	</p>

	
</div>

<div class="footer-center">

	<div>
		<i class="fa fa-map-marker"></i>
		<p><span>1/1/2 , Griahat Road,(south)</span> jodhpur Park, kolkata-</p>
	</div>

	<div>
		<i class="fa fa-phone"></i>
		<p>+1.555.555.5555</p>
	</div>

	<div>
		<i class="fa fa-envelope"></i>
		<p><a href="womenspolytechnic.kolkata@gmail.com">womenspolytechnic.kolkata@gmail.com</a></p>
	</div>

</div>

<div class="footer-right">

	<p class="footer-company-about">
		Contents Owned by Department of Technical Education, Training and Skill Development, Government of West Bengal
	</p>
				 </br>
				 <p>Location</p>
				 </br>
	<div class="footer-map">
	<div class="center">
    
	<iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.0249461966123!2d88.3644637!3d22.503247199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027180f2294f37%3A0xc2412650ad747817!2sWomen&#39;s%20polytechnic%2C%20Kolkata!5e0!3m2!1sen!2sin!4v1681979671933!5m2!1sen!2sin" width="1400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	</div>

</div>

</footer>
</body>
</html>

    	
    	
            