<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
    font-size:25px;
  margin: 10px;
  padding: 10px;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  font-size:15px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #87CEEB;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}
.img{
    border-radius:50%;
}
.column {
  float: left;
  width: 25%;
  padding: 50px 50px;
}
.row {margin: 20px;}
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
.card {
 box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.dropbtn {
  background-color:#f1f1f1;
  color: black;
  padding: 16px;
  font-size: 25px;
  border: none;
  cursor : pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
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


@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body> 
    <div class="sidebar">
<div
              class="text-4xl mb-5 text-center"
              style="font-family: 'Itim', 'cursive'"
            >
              DASHBOARD
            </div>
            <img
                src="upload/teacher.png"
                style="width:90px"/>
                <div
              class="text-4xl mb-5 text-center" style="font-size:20px">
              Debika chakraborty</div>

</br>

 
</div>

<div class="content">


<div class="row">
  <div class="column">
    <div class="card">
    <img
            src="upload/teacher.png" style="width:100%">
            <div class="container">
    <div class="dropdown">
        <button 
        class="dropbtn">Faculty</button>
      <div class="dropdown-content">
        <a href="facultylist.php">Faculty list</a>
        <a href="addfaculty.php">Add Faculty</a>
       </div>
    </div>
    </div>
  </div>
</div>

  <div class="column">
    <div class="card">
        <img
            src="upload/event.png" style="width:100%">
            <div class="container">
      <div class="dropdown">
        <button 
        class="dropbtn">Event</button>
       <div class="dropdown-content">
        <a href="eventlist.php">Event List</a>
        <a href="addevent.php">Add Event</a>
       </div>
      </div>
   </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
        <img
            src="upload/notice.png" style="width:100%">
            <div class="container">
      <div class="dropdown">
        <button 
        class="dropbtn">Notice</button>
       <div class="dropdown-content">
        <a href="noticelist.php">notice List</a>
        <a href="addnotice.php">Add notice</a>
       </div>
      </div>
   </div>
    </div>
  </div>
  

<div class="row">
  <div class="column">
    <div class="card">
    <img
            src="upload/web-page.png" style="width:100%">
            <div class="container">
      <div class="dropdown">
        <button 
        class="dropbtn">pages</button>
       <div class="dropdown-content">
        <a href="listpages.php">page List</a>
        <a href="addpages.php">Add page</a>
       </div>
    </div>
  </div>
</div>
</div>

</body>
</html>
