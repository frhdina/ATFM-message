<!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>AirNav| Web Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/datepicker3.css" type="text/css" />
<link rel="stylesheet" href="css/datatables.css" type="text/css"/>
<link rel="stylesheet" href="css/chosen.css" type="text/css" />


<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/icon.css" type="text/css" />
<link rel="stylesheet" href="css/font.css" type="text/css" />

<link rel="stylesheet" href="css/app.v1.css" type="text/css" />

<style type="text/css">
	tbody tr.odd.selected {
		color:white;
		background-color: #ABB9D3;
	}
	tbody tr.even.selected {
		color:white;
		background-color: #ABB9D3;
	}
</style>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<style type="text/css">
  /*advanced table*/

  .adv-table table tr td {
      padding: 10px;
  }

  .adv-table table.display thead th {
      border-bottom: 1px solid #DDDDDD;
      padding: 10px;
  }

  tr.odd.gradeA td.sorting_1, tr.odd td.sorting_1, tr.even.gradeA td.sorting_1 {
      background: none;
  }

  td.details {
      background-color: #eee;
  }

  td.details table tr td, .dataTable tr:last-child {
      border: none;
  }

  .adv-table table.display tr.odd.gradeA {
      background-color: #F9F9F9;
  }

  .adv-table table.display tr.even.gradeA {
      background-color: #FFFFFF;
  }

  .adv-table .dataTables_filter label input {
      float: right;
      margin-left: 10px;
      width: 78%;
  }

  .adv-table .dataTables_filter label {
      line-height: 33px;
      width: 100%;
  }

  .adv-table .dataTables_length select {
      display: inline-block;
      margin: 0 10px;
      padding: 5px 8px;
      width: 65px;
  }

  .adv-table .dataTables_info, .dataTables_paginate {
      padding: 15px;
  }

  .adv-table .dataTables_length,.adv-table .dataTables_filter {
      padding: 15px 0;
  }

  .cke_chrome {
      border: none !important;
  }


  .editable-table .dataTables_filter {
      width: 80%;
  }

  tr.odd.gradeX td.sorting_1, tr.even.gradeX td.sorting_1, table.display tr.even.gradeX, table.display tr.gradeX, tr.even.gradeU td.sorting_1, tr.even td.sorting_1, table.display tr.even.gradeC, table.display tr.gradeC, tr.odd.gradeC td.sorting_1, table.display tr.even.gradeU, table.display tr.gradeU, tr.odd.gradeU td.sorting_1{
      background: none !important;
  }


  /* Autocomplete
  ----------------------------------*/
  .ui-autocomplete{
      max-height: 200px;
      overflow-y: auto;
      /* prevent horizontal scrollbar */
      overflow-x: hidden;
      /* add padding to account for vertical scrollbar */
      padding-right: 20px;
  }
  .ui-autocomplete-menu { position: absolute; cursor: default;  }

  .ui-autocomplete-loading { background: white url('images/ui-anim.basic.16x16.gif') right center no-repeat; }
  .ui-autocomplete-over { background-color: #0A246A; color: white; }
  .ui-autocomplete a:hover{
      color:white;
  }
</style>
</head>
<body>
<section class="vbox">
  <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
  <!-- kotak Yang paling pojok kiri-->
  <div class="navbar-header aside-md dk ">
		<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
			<i class="fa fa-bars"></i>
		</a>

		<a href="index.html" class="navbar-brand">
			<!--<img src="https://simkp.its.ac.id/assets/dev/images/btsi.png" class="m-r-sm">-->
			AirNav
		</a>

		<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
		<i class="fa fa-cog"></i> 
    </a>
	</div>

  <!-- bagian setting -->
  <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
    <li class="dropdown"> 
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">SETTING <b class="caret"></b> </a>
      <ul class="dropdown-menu animated fadeInRight">
        <span class="arrow top"></span>
        <li> <a href="gantipassword.php">Change Password</a> </li>
          <li> <a href="....." target="_blank">Help</a> </li>
            <li class="divider"></li>
          <li> <a href="home.php">Logout</a> </li>
      </ul>
    </li>
  </ul>
  </header>

  <section>
  <section class="hbox stretch">
    <aside class="bg-primary aside-md hidden-print" id="nav">
    <section class="vbox">
      <section class="w-f scrollable">
        <div class="slim-scroll " data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
          <div class="clearfix wrapper dk nav-user hidden-xs">
            <div class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="thumb avatar pull-left m-r">
                  <img src="images/avatar.png">
                  <i class="on md b-white"></i>
              </span>
              <span class="hidden-nav-xs clear">
                  <span class="block m-t-xs">
                      <strong class="font-bold text-lt">Mr.OOO</strong>
                  </span>
                  <span class="text-muted text-xs block">Deputy of </span>
              </span>
              </a>
            </div>
          </div>

          <!-- menu di samping -->
          <nav class="nav-primary hidden-xs">
            <ul class="nav nav-main" data-ride="collapse">
              <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Menu</div>
              <li class="">
                <a href="compose.php" class="auto">
                  <i class="fa fa-2x fa-pencil icon"> </i> 
                  <span class="font-bold">Compose</span>
                </a>
              </li>

            <li class="">
              <a href="kp.php" class="auto">
                  <i class="fa fa-2x fa-inbox icon"> </i> 
                  <span class="font-bold">Inbox</span>
                  <span class="badge bg-red-1 pull-right">4</span>
              </a>
            </li>

            <li class="">
              <a href="suratkeluar.php" class="auto">
                  <i class="fa fa-2x fa-send icon"> </i> 
                  <span class="font-bold">Send Mail</span>
              </a>
            </li>
            </ul>
          </nav> 
        </div>
      </section>
      
      <!--<footer class="footer dk hidden-xs text-center">
          <a href="https://simkp.its.ac.id/index.php/backend/lockme" data-toggle="ajaxModal" class="inline wrapper animated " data-toggle="class:show">
          <i class="i i-logout"></i>
          </a>
      </footer>-->

    </section>
    </aside>

</html>