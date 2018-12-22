<?php
session_start();
include('connection.php');
if(isset($_SESSION['Username'])){	
?>
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Aug 2018 15:56:03 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app6.min.css" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    </head>

    <body>
	<!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <h2 style="color:#343a40; margin-top:25px; margin-left:-8px;">AdminPanel</h2>
                        </span>
                        
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">

                        <li class="side-nav-title side-nav-item"></li>

                        <li class="side-nav-item">
                            <a href="index.php" class="side-nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="far fa-eye"></i>
                                <span> View </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="view/voter.php">Voter</a>
                                </li>
                                <li>
                                     <a href="javascript: void(0);">
                                 Candidate
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="view/candidatePP.php">PP</a>
                                </li>
                                <li>
                                    <a href="view/candidateNA.php">NA</a>
                                </li>
                            </ul>
                                </li>
                            </ul>
                        </li>
						
						<li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="fas fa-info-circle"></i>
                                <span> Information </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="information/ward.php">Ward No</a>
                                </li>
                                <li>
                                    <a href="information/PP.php">PP No</a>
                                </li>
								<li>
                                    <a href="information/NA.php">NA No</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="far fa-edit"></i>
                                <span> Update </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="update/candidateUpdate.php">Voter</a>
                                </li>
                                <li>
                                    <a href="update/voterUpdate.php">Candidate</a>
                                </li>
                            </ul>
                        </li>
						<li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="fas fa-search"></i>
                                <span> Search </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="livesearch/index.php">Voter</a>
                                </li>
                                <li>
                                    <a href="livesearch/index1.php">Candidate</a>
                                </li>
                            </ul>
                        </li>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span>
									<span class="account-user-name">
									 <?php
									 echo "<h5 style='text-transform: capitalize;'>".$_SESSION['Username']."</h5>";
									 ?>
									</span>
                                    </span>
									<?php
                                    }
									else{
									header("Location:admin_logout.php");
									}
									?>	
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    <!-- item-->
                                    <a href="admin_logout.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-5">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Total Voters</h5>
												<?php
												$sql_u = "SELECT * FROM nadra_record_voter";
												$res_u = mysqli_query($con, $sql_u);
												$row_u = mysqli_num_rows($res_u); 
													?>
                                                <h3 class="mt-3 mb-3"><?php echo $row_u?></h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Total Candidates</h5>
												<?php
												$sql_u = "SELECT * FROM nadra_record_candidate";
												$res_u = mysqli_query($con, $sql_u);
												$row_u = mysqli_num_rows($res_u); 
													?>
                                                <h3 class="mt-3 mb-3"><?php echo $row_u?></h3>
                                                <h3 class="mt-3 mb-3"></h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
									 <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Total NA</h5>
												<?php
												$sql_u = "SELECT * FROM na_constituency";
												$res_u = mysqli_query($con, $sql_u);
												$row_u = mysqli_num_rows($res_u); 
													?>
                                                <h3 class="mt-3 mb-3"><?php echo $row_u?></h3>
                                                <h3 class="mt-3 mb-3"></h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-currency-usd widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Register Voters</h5>
												<?php
												$sql_u = "SELECT * FROM v_registration";
												$res_u = mysqli_query($con, $sql_u);
												$row_u = mysqli_num_rows($res_u); 
													?>
                                                <h3 class="mt-3 mb-3"><?php echo $row_u?></h3>
                                                <h3 class="mt-3 mb-3"></h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-pulse widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Growth">Register Candidates</h5>
												<?php
												$sql_u = "SELECT * FROM c_registration";
												$res_u = mysqli_query($con, $sql_u);
												$row_u = mysqli_num_rows($res_u); 
													?>
                                                <h3 class="mt-3 mb-3"><?php echo $row_u?></h3>
                                                <h3 class="mt-3 mb-3"></h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
									 <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Total PP</h5>
												<?php
												$sql_u = "SELECT * FROM pp_constituency";
												$res_u = mysqli_query($con, $sql_u);
												$row_u = mysqli_num_rows($res_u); 
													?>
                                                <h3 class="mt-3 mb-3"><?php echo $row_u?></h3>
                                                <h3 class="mt-3 mb-3"></h3>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                            </div> <!-- end col -->
							</div>
                        <div class="row">
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2018 © Election - Commision.com
                            </div>
                            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       

        <!-- bundle -->
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/Chart.bundle.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
    </body>


<!-- Mirrored from coderthemes.com/hyper/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Aug 2018 15:56:42 GMT -->
</html>