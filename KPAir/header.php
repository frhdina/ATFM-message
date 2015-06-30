<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AirNav</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="assets/css/metro-icons.css" rel="stylesheet" />
        <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
                <!-- Extra CSS Libraries Start -->
                <link href="assets/libs/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    </head>
    <body class="fixed-left">
        <?php
            include "configure/session.php";
        ?>

    <!-- Modal Logout -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Are you sure want to logout from this awesome system?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
                </p>
            </div>
        </div>
    </div>        <!-- Modal End -->
    <!-- Begin page -->
    <div id="wrapper">
        
    <!-- Top Bar Start -->
    <div class="topbar">
        <div class="topbar-left">
                <div class="logo">
                    <h1><a href="#"><h3><strong><span style="color:white;"> AIRNAV </span></strong></h3></a></h1>
                </div>
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-bars"></i>
                </button>
        </button>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav navbar-right top-navbar">
                            <!-- gambar envelope -->
                            
                            <!-- memperbesar layar -->
                            <li class="dropdown iconify hide-phone">
                                <a href="#" onclick="javascript:toggle_fullscreen()">
                                <i class="icon-resize-full-2"></i></a>
                            </li>

                            <!-- dropdown general manager -->
                            <li class="dropdown topbar-profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="rounded-image topbar-profile-image">
                                        <img src="images/users/user-35.jpg">
                                    </span> 
                                    Mr. <strong><?php echo $nama; ?></strong> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Change Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                                    <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>

                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="profile.php" class="rounded-image profile-image"><img src="images/users/user-100.jpg"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b>Mr.<?php echo $nama;?></b><br><small><?php echo $departemen;?></small></div>
                        <div class="profile-buttons">
                            <!-- bisa diisi dengan icon seperti logout -->
                        </div>
                    </div>
                </div>

                <!--- Divider -->
                <div class="clearfix"></div>


                <!--- bar menu right-->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                                    <a href='inbox.php'>
                                        <i class='fa fa-inbox'></i>
                                        <span>Inbox</span>
                                        <?php
                                        $count= mysql_query(
                                            "select distinct disposisi.*,header.*,hasil.id_unit1 
                                            from disposisi, header, hasil, unit1, unit2 
                                            where disposisi.id_hed= header.id_hed  and hasil.id_dis=disposisi.id_dis 
                                            and hasil.id_unit1=unit1.id_unit1 and hasil.id_unit2=unit2.id_unit2 and 
                                            hasil.id_unit1=$id_unit1 and disposisi.status_baca=0");
                                        $count1 =mysql_num_rows($count);
                                        ?>
                                        <span class="badge bg-green-1 pull-right"><?php echo $count1?></span>
                                    </a>                     
                        </li>

                        <li>
                                <a href='sent.php'>
                                    <i class='fa fa-paper-plane'></i>
                                    <span>Sent Mail</span>
                                </a>
                        </li>

                        <li>
                                <a href='configure.php'>
                                    <i class='fa fa-pencil'></i>
                                    <span>Configure Receiver</span>
                            </a>
                        </li>
                        
                    </ul>                    
                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div><br><br><br>
            </div>
        </div>
        <!-- Left Sidebar End -->         
</html>