<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

</head>
<?php
include("inc/db.php");
$userprofile = $_SESSION["uname"];
if($userprofile == true)
{
    
}
else
{
    header('location:login.php');
}
?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add faculty</h1>
                    <form action="facultywork.php" method="post" enctype="multipart/form-data">
                        <p>Name:<P>
        
                            <P><input type= "text" name="facultyname"></p>

            
                            <p>department: </P>
                            <select name="stream">
                                 <option value=" ">--select--</option>
                                 <option value="computer science and technology">Computer science and technology</option>
                                 <option value="Architechture">Architechture</option>
                                 <option value="Electronics and telecommunication">Electronics and telecommunication</option>
                                 <option value="MOPM">MOPM</option>
                                 <option value="mathematics">Mthematics</option>
                                 <option value="physics">Physics</option>
                                 <option value="chemistry">Chemistry</option>
                                 <option value="welding">Welding</option>
                                 <option value="mechanical engeeniaring">Mechanical Engeeniaring</option>
                                 <option value="electrical engeeniaring">Electrical Engeeniaring</option>
                                 <option value="humanities">Humanities</option>
                                 <option value="3D animation and graphics">3D Animation and graphics</option>
                                 <option value="stuff">Stuff</option>
                                </select>
        
                        <p>post </p>
                        <select name="facpost">
                                 <option value=" ">--select--</option>
                                 <option value="principal">Principal</option>
                                 <option value="lecturer">Lecturer</option>
                                 <option value="junior lecturer">Junior lecturer</option>
                                 <option value="workshop Instructor">Workshop Instructor</option>
                                 <option value="laboratory assistant">Laboratory assistant</option>
                                 <option value="Junior laboratory assistant">Junior laboratory assistant</option>
                                 <option value="Junior workshop Instructor">Junior Workshop Instructor</option>
                                 <option value="group D">Group D</option>
                                 <option value="cashier">cashier</option>
                                 <option value="accountant">Accountant</option>
                                 <option value="head clerk">Head clerk</option>
                                 <option value="upper division clerk">Upper division clerk</option>
                                 <option value="lower division clerk">lower division clerk</option>
                                 <option value="assistant cook">Assistant cook</option>
                                </select>
<br>
                        <p>Date of joining</p>
                        <input type ="date" id="joiningdate" name="joiningdate"></p>

                        <p>Date of leaving</p>
                        <input type ="date" id="leavingdate" name="leavingdate"></p>

                        <p>Reason of leaving</p>
                        <select name="reason">
                                 <option value=" ">--select--</option>
                                 <option value="retiered">Retiered</option>
                                 <option value="transferred">transferred</option>
                        </select>

                                 <p>picture</p>
                        <p><input type="file" name="fpic" /></p>

                        <p><input type="submit" name="save" value="save"/></p>
    </form>

    <a href="logout.php"><input type ="submit" name="" value="Logout" style="curser:pointer;"></a>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            </div>

       <!--End of Content Wrapper -->


    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
   <--<a class="scroll-to-top rounded" href="#page-top">
       <i class="fas fa-angle-up"></i>
   </a>

    <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
       <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                 </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                   <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
           </div>
       </div>
    </div>

    <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>