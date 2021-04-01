<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-dashboard"></i><span>Blog</span></a>
                                <ul class="collapse">
                                    <li><a href="createblog.php">Create Blog</a></li>
                                    <li><a href="readBlog.php">Read all Blog posts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout-sidebar-left"></i><span>PostIt
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="createpostit.php">New Post it</a></li>
                                    <li><a href="readPostit.php">my current post it</a></li>
                                    <li><a href="readAllPostit.php">All my post it's</a></li>

                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-pie-chart"></i><span>Meeting</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="createReunion.php">new meeting</a></li>
                                    <li><a href="readReunion.php">all meetings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-palette"></i><span>Compte'rendu</span></a>
                                <ul class="collapse">
                                    <li><a href="createCompteRendu.php">new Compte rendu</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>note
                                        Service</span></a>
                                <ul class="collapse">
                                    <li><a href="createnoteService.php">new note service</a></li>
                                    <li><a href="readNoteService.php">all note service</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>BrianStorming</span></a>
                                <ul class="collapse">
                                    <li><a href="createBrainstorming.php">Post new ideas</a></li>
                                    <li><a href="readBrainstorming.php">all ideas</a></li>
                                </ul>
                            </li>
                            <li><a href="createNewsletter.php"><i class="ti-map-alt"></i> <span>news letter</span></a>
                            </li>
                            <li><a href="createEmail.php"><i class="ti-receipt"></i> <span>Emailing</span></a></li>



                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->

                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <?php include 'title.php' ?>

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="insertReunion.php" method="post">
                                <div class="form-group">
                                    <label for="reunion_title" class="col-form-label">Titre Reunion</label>
                                    <input type="text" name="reunion_title" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="reunion_date" class="col-form-label">Date</label>
                                    <input type="date" name="reunion_date" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="reunion_hour" class="col-form-label">Heure</label>
                                    <input type="time" name="reunion_hour" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="users" class="col-form-label">Participants</label>

                                    <select name="users[]" id="users" multiple class="form-control">
                                        <?php

                                        include 'conn.php';

                                        $sql = "SELECT * FROM user ";
                                        $result = $conn->query($sql);


                                        foreach ($conn->query($sql) as $row) {

                                            echo "<option value='{$row["user_id"]}'>{$row["user_username"]}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group"> <input type="submit" value="Done"
                                        class="btn btn-primary mt-4 pr-4 pl-4">
                                </div>




                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->

    </div>
    <!-- page container area end -->
    <!-- offset area start -->

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>