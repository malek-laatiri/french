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
    <style>
    .paint-canvas {
        border: 1px black solid;
        display: block;
        margin: 1rem;
    }

    .color-picker {
        margin: 1rem 1rem 0 1rem;
    }

    .container {
        display: grid;
        grid-template-columns: auto auto auto auto;
        grid-template-rows: 100px 300px;
        grid-gap: 10px;
    }

    .grid-container>div {

        text-align: center;
        padding: 20px 0;
    }
    </style>
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
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-pie-chart"></i><span>Meeting</span></a>
                                <ul class="collapse">
                                    <li><a href="createReunion.php">new meeting</a></li>
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
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>note
                                        Service</span></a>
                                <ul class="collapse">
                                    <li class="active"><a href="createnoteService.php">new note service</a></li>
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
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php echo $_SESSION["user_username"] ?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="insertService.php" method="post" name="form1" id="form1">
                                <div class="form-group">
                                    <label for="dateNote">Date</label>
                                    <input type="date" name="dateNote" id="dateNote" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="compagnie" class="col-form-label">compagnie</label>
                                    <input type="text" name="compagnie" id="compagnie" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="departementFrom" class="col-form-label">Departement</label>
                                    <input type="text" name="departementFrom" id="departementFrom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="directeur" class="col-form-label">Le directeur</label>
                                    <input type="text" name="directeur" id="directeur" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Informe" class="col-form-label">Informe</label>
                                    <input type="text" name="Informe" id="Informe" class="form-control">
                                </div>
                                <div class="form-group"><label for="mr" class="col-form-label">M</label>
                                    <input type="text" class="form-control" name="mr" id="mr">
                                </div>
                                <div class="form-group"><label for="demande" class="col-form-label">Demande A</label>
                                    <input type="text" name="demande" id="demande" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fonction" class="col-form-label">Fonction</label>
                                    <input type="text" name="fonction" id="fonction" class="form-control">
                                </div>


                                <div class="form-group"><label for="rappel" class="col-form-label">Rappel A</label>
                                    <input type="text" name="rappel" id="rappel" class="form-control">
                                </div>


                                <div class="form-group"><label for="departementTo"
                                        class="col-form-label">Departement</label>
                                    <input type="text" name="departementTo" id="departementTo" class="form-control">
                                </div>


                                <div class="form-group"> <label for="departementTo"
                                        class="col-form-label">Contenue</label><textarea name="content" rows="4" class="form-control"
                                        cols="50"></textarea>
                                </div>


                                <div class="form-group">
                                <label for="departementTo"
                                        class="col-form-label">Signature</label>
                                    <input type="color" class="js-color-picker  color-picker">
                                    <input type="range" class="js-line-range" min="1" max="5" value="1">
                                    <label class="js-range-value">1</label>Px
                                    <canvas class="js-paint  paint-canvas" width="300" height="200" id="canvas"
                                        class="form-control"></canvas>
                                </div>

                                <input name="hidden_data" id='hidden_data' type="hidden" />
                                <div class="form-group"><input type="button" onclick="uploadEx()" value="Upload"
                                        class="btn btn-primary mt-4 pr-4 pl-4" />
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
    <script>
    const paintCanvas = document.querySelector('.js-paint');
    const context = paintCanvas.getContext('2d');
    context.lineCap = 'round';

    const colorPicker = document.querySelector('.js-color-picker');

    colorPicker.addEventListener('change', event => {
        context.strokeStyle = event.target.value;
    });

    const lineWidthRange = document.querySelector('.js-line-range');
    const lineWidthLabel = document.querySelector('.js-range-value');

    lineWidthRange.addEventListener('input', event => {
        const width = event.target.value;
        lineWidthLabel.innerHTML = width;
        context.lineWidth = width;
    });

    let x = 0,
        y = 0;
    let isMouseDown = false;

    const stopDrawing = () => {
        isMouseDown = false;
    }
    const startDrawing = event => {
        isMouseDown = true;
        [x, y] = [event.offsetX, event.offsetY];
    }
    const drawLine = event => {
        if (isMouseDown) {
            const newX = event.offsetX;
            const newY = event.offsetY;
            context.beginPath();
            context.moveTo(x, y);
            context.lineTo(newX, newY);
            context.stroke();
            //[x, y] = [newX, newY];
            x = newX;
            y = newY;
        }
    }

    paintCanvas.addEventListener('mousedown', startDrawing);
    paintCanvas.addEventListener('mousemove', drawLine);
    paintCanvas.addEventListener('mouseup', stopDrawing);
    paintCanvas.addEventListener('mouseout', stopDrawing);

    function uploadEx() {
        var canvas = document.getElementById("canvas");
        var dataURL = canvas.toDataURL("image/png");
        document.getElementById('hidden_data').value = dataURL;
        var fd = new FormData(document.forms["form1"]);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'insertService.php', true);

        xhr.upload.onprogress = function(e) {
            if (e.lengthComputable) {
                var percentComplete = (e.loaded / e.total) * 100;
                console.log(percentComplete + '% uploaded');
            }
        };

        xhr.onload = function() {

        };
        xhr.send(fd);
        document.getElementById("form1").submit();

    };
    </script>
</body>

</html>