<?php 

 session_start();
 $uname= $_SESSION['admin'];
 include("includes/header.php");
 include("includes/navbar.php");
 include("../../db/connection.php");




 if(isset($_GET['delete'])){
               $id =$_GET['delete'];
               $que ="DELETE FROM services_table WHERE services_id ='$id' ";
               $resultt = mysqli_query($connect,$que) ;

               
             echo "<script>window.location.href='../admin2/services.php'</script>";
 }


     

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/all.min.css">


</head>
 <style type="text/css">
     
     .adx form input{
        width: 100%;
        height: 2.5em;
        border-radius: 5px;
        border: 0.3px solid black;
        padding-left: 2%;

     }
     .sub{
        margin-right: 0.1%;
        opacity: 0.8;
     }
   
     .sub a{
        background: green;
     }
     .subb{
        width: 70%;
     }

     .subbx{
        width: 73%;
     }
     .subb .canc{
        background: red;
        color: white;
        border-radius: 5px;
        border: 0.3px solid red;
        text-decoration: none;
     }
     .subb .cancc{
        opacity: 2;
        background: green;
        color: white;
        border-radius: 5px;
        border: 0.3px solid green;
        text-decoration: none;
     }

     .subbx .canc{
        background: red;
        color: white;
        border-radius: 5px;
        border: 0.3px solid red;
        text-decoration: none;
     }

     .subbx .cancc{
        opacity: 2;
        background: green;
        color: white;
        border-radius: 5px;
        border: 0.3px solid green;
        text-decoration: none;
     }
     .canc{
        opacity: 2;
     }
     .pro{
        opacity: 2;
        background: black;
        border-radius: 5px;
        color: white;
        border: 0.3px solid black;

     }

    
     .ac{
        color: red;
     }

     .ad{
        margin-top: 10%;
     }

     .adx{
        margin-top: 4%;
     }


     .hed{
        background: transparent;
        margin-left: 0.1%;
        opacity: 0.7;

     }

     .hed h5{
        margin-left: 20%;
     }
     #ww{
        width: 24%;
        height: 2em;   
     }

      #www{
        width: 24%;
        height: 2em;
        padding-left: 5%;
        padding-top: 1%;
     }

     #wwwwe{
        width: 28%;
        height: 2em;
       
     }

     #wwww{
        width: 28%;
        height: 2em;
    
     }
     .addd{
        float: right;
        
     }

 </style>



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" >

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $uname ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">                          
                        <a href="#" style="text-decoration:none;font-size: 25px;" class="m-0 font-weight-bold text-primary">Our Services</a>

                        <span><button class="btn btn-primary addd" data-toggle="modal" data-target="#addservices">Add</button></span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <?php 

                                 $pull = "SELECT * FROM services_table";
                                 $ans =mysqli_query($connect,$pull);


                                    echo"
                                    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                    <thead>
                                        <tr>
                                            <th style='width:1%'>Number</th>
                                            <th style='width:35%'>Type of Service</th>
                                            <th style='width:22%'>Price</th>
                                            <th style='width:20%'>Working Days</th>
                                            <th style='width:21%'>Working Hours</th>
                                            <th style='width:1%'>Action</th>
                                        </tr>
                                    </thead>
                                    ";
                                 
                                 while($row =mysqli_fetch_array($ans)){
                                    $id =$row['services_id'];
                                    $category =$row['category'];
                                    $price =$row['price'];
                                    $working_days =$row['working_days'];
                                    $working_hours =$row['working_hours'];


                                    echo"
                                    <tbody>
                                        <tr>
                                            <td style='width:1%'>$id</td>
                                            <td style='width:35%'>$category</td>
                                            <td style='width:22%'>$price</td>
                                            <td style='width:20%'>$working_days</td>
                                            <td style='width:21%'>$working_hours</td>
                                            <td style='width:1%'>
                                            <span style='margin-left:20%'>

                            <a href='services.php?delete= ".$row['services_id']." '  data-toggle='modal' data-target='#product_view".$row['services_id']."' style='text-decoration:none'> 

                            <i class='fa fa-trash fa-1x aria-hidden='true' style='color:red;padding-left:5%'> </i>

                            </a>
               
                         <div class='modal fade ad' id='product_view".$row['services_id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'aria-hidden='true'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header hed'>
                                                    <h5 class='modal-title ' id='exampleModalLabel' style='color:red; font-family: monospace;'>!!! Warning: Admin  $uname
                                                    </h5>
                                                <button class='close'type='button'data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>×</span>
                                            </button>
                                    </div>

                                    <div class='modal-body'>
                                            <p>Please are you sure you want to delete  $category </p>
                                            <p> As a service we render at Classic Care Clinic? </p>
                                           
                                    </div>
                                    <div class='modal-footer subb '>
                                        <input type='button' value ='Back' class='pro' data-dismiss='modal' id='ww'>
                                        <a href='services.php? delete=$id ' class='canc' id='www'>Delete</a>
                                    </div>
                                    </div>
                                </div>
                        </div>



                  <a href='services.php?update =".$row['services_id']."'
                    data-toggle='modal' data-target='#approve_view".$row['services_id']."'>
                        <i class='fas fa-edit fa-1x'style='color:green;text-decoration:none'></i>
                    </a>

                <div class='modal fade adx' id='approve_view".$row['services_id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                             <div class='modal-content'>
                                <div class='modal-header hed'>
                                 <h5 class='modal-title ' id='exampleModalLabel' style='color:red; font-family: monospace;'>!!! Warning: Admin  $uname
                                    </h5>
                                    <button class='close'type='button'data-dismiss='modal' aria-label='Close'>
                                     <span aria-hidden='true'>×</span>
                                    </button>
                                 </div>

                                <div class='modal-body update'>
                                <form method='POST' enctype='multipart/form-data'>
                                    <p>Please you are about to make changes to this service </p>
                                    <label>Type of Service</label><br>
                                    <input type='text' name='category' value ='$category'><br>
                                    <label>Price</label><br>
                                    <input type='text' name='price'  value='$price'><br>
                                    <label>Working Days</label><br>
                                    <input type='text' name='working_days' value ='$working_days'><br>
                                    <label>Working Hours</label><br>
                                    <input type='text' name='working_hours' value ='$working_hours'>
                                    <input type='text' value='$id' name ='$id' style='display:none'>
                                    
                                </div>
                                 <div class='modal-footer subbx '>
                                    <input type='button' value ='Back' class='pro' data-dismiss='modal' id='wwwwe'>
                                    <input type='submit' name='update' value ='update' class='cancc' id='wwww'>
                                    
                                    </div>
                                   </form>
                                    ";
                                     ?>
                             <?php 
                               
                                
                                if(isset($_POST['update'])){
                                    $idd =$_POST["$id"];
                                    $category=$_POST['category'];
                                    $price =$_POST['price'];
                                    $working_days =$_POST['working_days'];
                                    $working_hours =$_POST['working_hours'];

               
                                    $que ="UPDATE services_table SET category ='$category', price ='$price', working_days='$working_days', working_hours='$working_hours' WHERE services_id ='$idd' ";

                                    $resultt = mysqli_query($connect,$que) or die(mysqli_error($connect));

                                    echo "<script>window.location.href='../admin2/services.php'</script>";

                                    

                                    //echo "<script>window.location.href='../admin2/requested_expenses.php'</script>";

                                }

                              ?>

                            <?php
                         echo"
                                 </div>
                              
                           </div>
                     </div>
                   </span>
                </td>
            </tr>";

        }

                echo"</tbody> </table>";

             ?>
                                
                </div>
            </div>
        </div>

     </div>
                <!-- /.container-fluid -->

     </div>
            <!-- End of Main Content -->

    



    <?php 

     include("includes/footer.php");

     ?>

         

          <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
   