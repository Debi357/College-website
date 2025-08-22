<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    <link
      href="https://fonts.googleapis.com/css2?family=Itim&family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }
.grid-container {
  display: grid;
  justify-content: space-evenly;
  grid-template-columns: 10px 10px 10px; /*Make the grid smaller than the container*/
  gap: 300px;
  background-color: white;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px ;
  font-size: 30px;
}
</style>
<style>
.dropbtn {
  background-color: white;
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

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
  </head>
  <body>
    <div class="flex">
      <!-- sidebar -->
      <div class="w-64 h-screen overflow-hidden">
        <div class="flex flex-col justify-between h-full px-5 py-8">
          <div class="mx-auto">
            <!-- title -->
            <div
              class="text-4xl mb-5 text-center"
              style="font-family: 'Itim', 'cursive'"
            >
              DASHBOARD
            </div>
            <!-- profile -->
            <div>
              <div class="border p-1.5 rounded-full w-fit mx-auto">
                <div class="h-16 w-16 rounded-full overflow-hidden relative">
                  <img
                    class="absolute top-0 left-0 w-full h-full object-cover"
                    src="./assets/images/chef.png"
                  />
                </div>
              </div>
              <div class="text-center">
                <h3 class="text-xl" style="font-family: 'Itim', 'cursive'">
                  debika chakraborty
                </h3>
                <div class="flex items-center justify-center gap-1">
                </div>
              </div>
            </div>
            <!-- menu items -->
            <div class="mx-auto mt-14">
              <a
                href="#"
                class="flex items-center gap-2 text-gray-500 hover:text-gray-800 mb-3"
              >
                <i class="ri-book-read-fill"></i>
                Recipes
              </a>
              <a
                href="#"
                class="flex items-center gap-2 text-gray-500 hover:text-gray-800 mb-3"
              >
                <i class="ri-heart-fill"></i>
                Favourites
              </a>
              <a
                href="#"
                class="flex items-center gap-2 text-gray-500 hover:text-gray-800 mb-3"
              >
                <i class="ri-award-fill"></i>
                Courses
              </a>
              <a
                href="#"
                class="flex items-center gap-2 text-gray-500 hover:text-gray-800 mb-3"
              >
                <i class="ri-global-fill"></i>
                Community
              </a>
            </div>
          </div>
          
        </div>
      </div>
      <!-- main -->
      <div class="bg-red-50 w-full h-screen overflow-y-scroll p-8">
        <!-- top bar -->
        <div class="flex justify-between items-ceter">
          <div class="flex items-center gap-2 border-b border-gray-400 pb-1">
            <i class="ri-search-line text-gray-500"></i>
            <input
              placeholder="Search recipes here..."
              class="bg-transparent w-80 outline-none border-none"
            />
          </div>
          <div
            class="bg-red-500 px-10 py-2 rounded-md text-white cursor-pointer"
          >
            Log Out
          </div>
        </div>
        <!-- content -->
        <div>
          <!-- title -->
          <div class="flex justify-between items-center mt-10">
            <div class="flex items-center gap-5">
              
              <div>
                <div
                  class="text-5xl font-bold mb-1"
                  
                >
                 Manage your website
                </div>
                <div class="text-gray-500">Today's new recipies for you</div>
              </div>
            </div>
          </div>
          <!-- cards -->
          <div class="grid-container">
  <div class="grid-item">

            <div
              class="border rounded-xl bg-white overflow-hidden shadow-md hover:shadow-xl"
            >
            <div class="p-5 pb-0">
                 <img
                  class="h-50 w-50"
                  src="upload/teacher.png"
                />
             </div>
     <div class="dropdown">
        <button 
        class="dropbtn">Faculty</button>
      <div class="dropdown-content">
        <a href="facultylist.php">Faculty list</a>
        <a href="addfaculty.php">ADD Faculty</a>
        <a href="#">Link 3</a>
      </div>
      </div>
</div>
</div>

  <div class="grid-item">
  <div
              class="border rounded-xl bg-white overflow-hidden shadow-md hover:shadow-xl"
            >
            <div class="p-5 pb-0">
                <img
                  class="h-50 w-50"
                  src="upload/notice.png"
                />
                </div>
    <div class="dropdown">
  <button class="dropbtn">Notice</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</div>
</div>

  <div class="grid-item">
  <div
              class="border rounded-xl bg-white overflow-hidden shadow-md hover:shadow-xl"
            >
            <div class="p-5 pb-0">
                <img
                  class="h-50 w-50"
                  src="upload/event.png"
                />
              </div>
                <div class="dropdown">
  <button class="dropbtn">Event</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</div>
</div>  

  <div class="grid-item">
  <div
              class="border rounded-xl bg-white overflow-hidden shadow-md hover:shadow-xl"
            >
              <div class="p-5 pb-0">
                <img
                  class="h-50 w-50 mx-auto"
                  src="upload/event.png"
                />
               </div>
                <div class="dropdown">
  <button class="dropbtn">Event</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
</div>
</div>

  <div class="grid-item">5</div>
  <div class="grid-item">6</div>  
  <div class="grid-item">7</div>
  <div class="grid-item">8</div>
  <div class="grid-item">9</div>  
</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
