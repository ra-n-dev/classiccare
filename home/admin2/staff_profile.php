<?php 

 session_start();
 $uname= $_SESSION['admin'];
 include("includes/header.php");
 include("includes/navbar.php");
 include("../../db/connection.php");

//echo $_GET['id'];


 if(isset($_GET['delete'])){
               $id =$_GET['delete'];
               $que ="DELETE FROM services_table WHERE services_id ='$id' ";
               $resultt = mysqli_query($connect,$que) ;
               
             echo "<script>window.location.href='../admin2/services.php'</script>";
 }

 if(isset($_GET['id'])){           
         $idd =$_GET['id'];
         $que ="SELECT * FROM staff_table WHERE id ='$idd' ";
            $resultt = mysqli_query($connect,$que) ;
            $row =mysqli_fetch_array($resultt)or die(mysqli_error($connect));
            $name =$row['username'];
            $salary =$row['salary'];
            $position =$row['usertype'];
            $course =$row['qualification'];
            $email =$row['email'];
            $contact =$row['contact'];
            $date_employed =$row['date_employed'];
            $contract_type =$row['employment_mode'];
            $age =$row['age'];
            $dob =$row['dob'];
            $work_experience =$row['work_experience'];
            $job_description =$row['role_description'];
            $institution =$row['institution'];
            $year_completed =$row['year_of_complete'];
            $cert =$row['certificate_title'];
            $employment_type =$row['employment_mode'];



                           // echo $ma;

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

    <title>CCCL Admin Profile</title>

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
   .addd{
    float: right;
   }
   .co1{
   }
   .pic{
    background:transparent;
    width: 15em;
    height: 20em;
   }
   .pic img{
    width: 14em;
    height: 98%;
   }
  

 
  table{
    justify-content: center;
    width: 100%;
  }

  table tr{
    border: 0.1px solid black;
  }
  table th{
    border: 0.1px solid black;
  }
  table td{
    border: 0.1px solid black;
  }
  .pure{
    width: 80%;
  }
  .cover{
    background: #F8F9F9 ;
    border: 0.1px solid black;
    overflow-x: scroll;
  }
  .ruk{
    background: transparent;
    width: 30%;
  }
  .ruk2{
    background: transparent;
    width: 15%;
  }
  .ruk3{
    background: transparent;
    width: 25%;
  }

  .ruk4{
    background: transparent;
    width: 15%;
  }
  .ruk5{
    background: transparent;
    width: 15%;
  }

  h6{
    align-items: center;
    color: white;
    background: #AEB6BF;
  }



  @media(max-width: 700px){
    table{
    justify-content: center;
    width: 150%;
  }

   h6{
    align-items: center;
    color: white;
    background:#AEB6BF;
    width: 150%;
  }

  table tr{
    border: 0.1px solid #D6DBDF;
  }
  table th{
    border: 0.1px solid #D6DBDF;
  }
  table td{
    border: 0.1px solid #D6DBDF;
  }
  .pure{
    width: 80%;
  }


    .cover{
    background: #F8F9F9 ;
    border: 1px solid black;
    overflow-x: scroll;
  }
  .ruk{
    background: transparent;
    width: 30%;
  }
  .ruk2{
    background: transparent;
    width: 15%;
  }
  .ruk3{
    background: transparent;
    width: 25%;
  }

  .ruk4{
    background: transparent;
    width: 15%;
  }
  .ruk5{
    background: transparent;
    width: 15%;
  }
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
                        <a href="#" style="text-decoration:none;font-size: 25px;" class="m-0 font-weight-bold text-primary">CCCL Staff Profile</a>

                        <span><button class="btn btn-primary addd" data-toggle="modal" data-target="#addservices">Add</button></span>
                        </div>
                        <div class="card-body">
                    <div class="table-responsive">
                     <div id="profile">

                    <center>
                        <div class='table-responsive mass'  style="border: 0.3px solid gray;">
                            <div class="roww" style="overflow: none;" >
                                <div class="column"><img src="../../image/admin1.jpg"></div>
                                <h4>Staff Bio</h4>
                                <div class="col"  class="pure">

                                

                                <!--   New trial here -->
                         <div class="cover">       

                         <table>
                                  <center><h6>Pesonal Info</h6></center>  
                                  <tr>
                                    <thead>
                                        <th class="ruk">Name</th>
                                        <th class="ruk2">Contact</th>
                                        <th class="ruk3">Email</th>
                                        <th class="ruk4">Age</th>
                                        <th class="ruk5">DoB</th>

                                    </thead>
                                </tr>
                                <tr>
                                <tbody>    
                                    <td class="ruk"><?php echo $name ?></td>
                                    <td class="ruk2"><?php echo $contact ?></td>
                                    <td class="ruk3"><?php echo $email ?></td>
                                    <td class="ruk4"><?php echo $age ?></td>
                                    <td class="ruk5"><?php echo $dob ?></td>
                                </tbody>   
                                </tr>
                        </table>
                            <!--   New trial here -->

                        <table>
                                <center><h6>Academic Info</h6></center>
                                
                                <tr>
                                    <thead>
                                        <th class="ruk">Institution</th>
                                        <th class="ruk2">Cerificate</th>
                                        <th class="ruk3">Course</th>
                                        <th class="ruk4">Year of complete</th>
                                        <th class="ruk5">Cert File</th>

                                    </thead>
                                </tr>
                                <tr>
                                <tbody>    
                                    <td class="ruk"><?php echo $institution ?></td>
                                    <td class="ruk2"><?php echo $cert ?></td>
                                    <td class="ruk3"><?php echo $course ?></td>
                                    <td class="ruk4"><?php echo $year_completed ?></td>
                                    <td class="ruk5"><?php echo "file"?></td>
                                </tbody>   
                                </tr>
                     </table>
                                <!--   New trial here -->

                    <table>
                               <center><h6>Job Info</h6></center> 
                                
                                <tr>
                                    <thead>
                                        <th class="ruk">Job Title</th>
                                        <th class="ruk2">Work Experience</th>
                                        <th class="ruk3">Job Description</th>
                                        <th class="ruk4">Date Employed</th>
                                        <th class="ruk5">Employement Type</th>

                                    </thead>
                                </tr>
                                <tr>
                                <tbody>    
                                    <td class="ruk"><?php echo $position ?></td>
                                    <td class="ruk2"><?php echo $work_experience ?></td>
                                    <td class="ruk3"><?php echo $job_description ?></td>
                                    <td class="ruk4"><?php echo $date_employed ?></td>
                                    <td class="ruk5"><?php echo $employment_type?></td>
                                </tbody>   
                                </tr>
                                </table>

                                </div>
                                </div><br>
                            </div>                     
                     </div>   
                 </center>
                                               
                </div>
            </div>
        </div>

     </div>
                <!-- /.container-fluid -->

     </div>
            <!-- End of Main Content -->

      <script src="../../js/jquery-3.6.0.min.js"></script>
            <script type="text/javascript">
                $(function(){       
                $('*[data-href]').click(function(){
                window.location = $(this).data('href');
                return false;
               });
              });
            </script>

    



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
   