
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()?>templates/niceadmin/img/favicon.png">

    <title>SP Penyakit Ginjal</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()?>templates/niceadmin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()?>templates/niceadmin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()?>templates/niceadmin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>templates/niceadmin/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url()?>templates/niceadmin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>templates/niceadmin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url()?>templates/niceadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url()?>templates/niceadmin/css/owl.carousel.css" type="text/css">
	<link href="<?php echo base_url()?>templates/niceadmin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url()?>templates/niceadmin/css/fullcalendar.css">
	<link href="<?php echo base_url()?>templates/niceadmin/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/niceadmin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/niceadmin/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>templates/niceadmin/css/xcharts.min.css" rel=" stylesheet">	
	<link href="<?php echo base_url()?>templates/niceadmin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url()?>templates/niceadmin/js/html5shiv.js"></script>
      <script src="<?php echo base_url()?>templates/niceadmin/js/respond.min.js"></script>
      <script src="<?php echo base_url()?>templates/niceadmin/js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <!--header start-->
      <header class="header dark-bg" style="background: #F7F7F7;">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu" style="color: #688A7E;"></i></div>
            </div>

            <!--logo start-->
            <a href="<?php echo site_url() ?>/home" class="logo">SP <span class="lite">Ginjal</span></a>
            <!--logo end-->

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">                    
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>templates/niceadmin/img/avatar1_small.jpg">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo site_url() ?>/users"><i class="icon_profile"></i> Pengguna</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url() ?>/login_admin/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
