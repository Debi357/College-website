<?php include ("inc/db.php"); ?>
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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include("inc/menu.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("inc/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Faculty</h1>

                    <?php
                    $id=$_GET['page_id'];
                    $sel="SELECT * FROM FACULTY WHERE page_id='$id'";
                    $rs=$con->query($sel);
                    $row=$rs->fetch_assoc();

                    ?>
                    <form action="upd_faculty.php" method="post" enctype="multipart/form-data">

                    <P><input type= "hidden" name="page_id" value="<?php echo $row['page_id']; ?>" /></p>

                        <p>Name<P>
                        <P><input type= "text" name="facultyname" value="<?php echo $row['name'];?>"/></p>

                       
                        <p>department:</P>
                        <select name="stream" value="<?php echo $row['department'];?>">
                                 <option value=" ">-select-</option>
                                 <option value="computer science and technology">computer science and technology</option>
                                 <option value="Architechture">Architechture</option>
                                 <option value="Electronics and telecommunication">Electronics and telecommunication</option>
                                 <option value="MOPM">MOPM</option>
                                 <option value="mathematcs">Mthematics</option>
                                 <option value="physics">Physics</option>
                                 <option value="chemistry">Chemistry</option>
                                 <option value="welding">Welding</option>
                                 <option value="mechanical ngeeniaring">Mechanical Engeeniaring</option>
                                 <option value="electrical ngeeniaring">Electrical Engeeniaring</option>
                                 <option value="humanities">Humanities</option>
                                 <option value="3D animation and graphics">3D Animation and graphics</option>
                                 <option value="stuff">Stuff</option>
                                </select>


                    
        
                        <p>Post</p>
                        <select name="facpost" value="<? echo $row['qualification'];?>">
                                 <option value=" ">-select-</option>
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

                                <p>Date of joining</p>
                        <input type ="date" id="joiningdate" name="joiningdate" value="<? echo $row['date_of_joining'];?>">

                        <p>Date of leaving</p>
                        <input type ="date" id="leavingdate" name="leavingdate" value="<? echo $row['date_of_leaving'];?>">

                        <p>Reason of leaving</p>
                        <select name="reason" value="<? echo $row['leaving_reason'];?>">
                                 <option value=" ">-select-</option>
                                 <option value="retiered">Retiered</option>
                                 <option value="tranceferd">Tranceferd</option>
                        </select>

                        <p><input type="file" name="fpic" value="<? echo $row['picture'];?>"></p>
                        <p> <img style="width:300px" src="facpic/<?php echo $row['picture']; ?>"/></P>

                        <p><input type="submit" name="save" value="Edit faculty" class="btn btn-success"/></p>
                    </form>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("inc/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
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