<?php include ("admin/inc/db.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Strictly a Corporate Business Flat Responsive Web Template | About :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>

	.dropbtn {
  background-color:#f1f1f1;
  color: black;
  padding: 30px;
  font-size:1vw ;
  border: none;
  cursor : pointer;
  text-align:left;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:  #f1f1f1;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color:#87CEEB ;}



.flex-container {
  display: flex;
  background-color: #f1f1f1;
}

.flex-container > div {
  background-color: #f1f1f1;
  padding: 50px;
  font-size: 20px;
  flex-direction: row;
  text-align: center;
}
@media (max-width: 800px) {
  .flex-container {
    flex-direction: column;
  }

/*footer */
footer{
  padding: 30px 40px 30px 40px;
  background-color: #3f3e3e;
  font-family: Corbel;
  font-size: 13px;/*Vary font-size as required*/
}
a{
  color: #b2b2b2;
}
a:hover{
  color: #fff;
}
.vcard{
  color: #b2b2b2;
}
ul {
  list-style-type: none;
}
img{
  display: block;
  margin: auto;
}

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
<body  onload="load()">
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
				   <li><a href='index.php'><span>Home</span></a></li>
				   <li class='active'><a href='about.php'><span>About</span></a></li>
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
     <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<?php
    $sel="SELECT * FROM PAGES WHERE page_id='10'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){ 
    ?>
<h2><?php echo $row['page_name'];?></h2>
<p><img style="width:500px" src="admin/upload/<?php echo $row['image']; ?>"></p>
	</br>
	</br>
<p><?php echo $row['description']; ?></p>

     <?php } ?>
	</br>
	</br>
	</br>
	 <div class="flex-container">
        <div>
               <p id='0101'>0</p>
               <p >Certified Teachers</p>
            </div>
            <div >
               <p id='0102'>0</p>
               <p >Student</p>
	</div >
         <div>
            <p span id='0103'>0</p>
            <p>Courses</p>
         </div>
      
   </div>					    
					
					<div class="clear"></div> 			
		        </div>
          </div>
		  </br>
	</br>

 <script>
 function animate(obj, initVal, lastVal, duration) {
         let startTime = null;

      //get the current timestamp and assign it to the currentTime variable
      let currentTime = Date.now();

      //pass the current timestamp to the step function
      const step = (currentTime ) => {

      //if the start time is null, assign the current time to startTime
      if (!startTime) {
         startTime = currentTime ;
		}

//calculate the value to be used in calculating the number to be displayed
const progress = Math.min((currentTime - startTime)/ duration, 1);

//calculate what to be displayed using the value gotten above
obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

//checking to make sure the counter does not exceed the last value (lastVal)
if (progress < 1) {
   window.requestAnimationFrame(step);
} else {
	  window.cancelAnimationFrame(window.requestAnimationFrame(step));
   }
};
//start animating
   window.requestAnimationFrame(step);
}
let text1 = document.getElementById('0101');
let text2 = document.getElementById('0102');
let text3 = document.getElementById('0103');
const load = () => {
   animate(text1, 0, 35, 7000);
   animate(text2, 0, 230, 7000);
   animate(text3, 100, 4, 7000);
}
 </script>
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



    	
            