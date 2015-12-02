<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Dashboard - FLATY Admin</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--base css styles-->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

<!--page specific css styles-->

<!--flaty css styles-->
<link rel="stylesheet" href="css/flaty.css">
<link rel="stylesheet" href="css/flaty-responsive.css">

<link rel="shortcut icon" href="http://shamsoft.net/flaty/img/favicon.png">
</head>
<body>

<!-- BEGIN Theme Setting -->
<div id="theme-setting">
<a href="javascript:void(0);"><i class="fa fa-gears fa fa-2x"></i></a>
<ul>
<li>
<span>Skin</span>
<ul class="colors" data-target="body" data-prefix="skin-">
<li class="active"><a class="blue" href="javascript:void(0);"></a></li>
<li><a class="red" href="javascript:void(0);"></a></li>
<li><a class="green" href="javascript:void(0);"></a></li>
<li><a class="orange" href="javascript:void(0);"></a></li>
<li><a class="yellow" href="javascript:void(0);"></a></li>
<li><a class="pink" href="javascript:void(0);"></a></li>
<li><a class="magenta" href="javascript:void(0);"></a></li>
<li><a class="gray" href="javascript:void(0);"></a></li>
<li><a class="black" href="javascript:void(0);"></a></li>
</ul>
</li>
<li>
<span>Navbar</span>
<ul class="colors" data-target="#navbar" data-prefix="navbar-">
<li class="active"><a class="blue" href="javascript:void(0);"></a></li>
<li><a class="red" href="javascript:void(0);"></a></li>
<li><a class="green" href="javascript:void(0);"></a></li>
<li><a class="orange" href="javascript:void(0);"></a></li>
<li><a class="yellow" href="javascript:void(0);"></a></li>
<li><a class="pink" href="javascript:void(0);"></a></li>
<li><a class="magenta" href="javascript:void(0);"></a></li>
<li><a class="gray" href="javascript:void(0);"></a></li>
<li><a class="black" href="javascript:void(0);"></a></li>
</ul>
</li>
<li>
<span>Sidebar</span>
<ul class="colors" data-target="#main-container" data-prefix="sidebar-">
<li class="active"><a class="blue" href="javascript:void(0);"></a></li>
<li><a class="red" href="javascript:void(0);"></a></li>
<li><a class="green" href="javascript:void(0);"></a></li>
<li><a class="orange" href="javascript:void(0);"></a></li>
<li><a class="yellow" href="javascript:void(0);"></a></li>
<li><a class="pink" href="javascript:void(0);"></a></li>
<li><a class="magenta" href="javascript:void(0);"></a></li>
<li><a class="gray" href="javascript:void(0);"></a></li>
<li><a class="black" href="javascript:void(0);"></a></li>
</ul>
</li>
<li>
<span></span>
<a data-target="navbar" href="javascript:void(0);"><i class="fa fa-square-o"></i> Fixed Navbar</a>
<a class="hidden-inline-xs" data-target="sidebar" href="javascript:void(0);"><i class="fa fa-square-o"></i> Fixed Sidebar</a>
</li>
</ul>
</div>
<!-- END Theme Setting -->

<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
<span class="fa fa-bars"></span>
</button>
<a class="navbar-brand" href="javascript:void(0);">
<small>
<i class="fa fa-newspaper-o"></i>
	Info STMIK-IM
</small>
</a>

<!-- BEGIN Navbar Buttons -->
<ul class="nav flaty-nav pull-right">
<!-- BEGIN Button Tasks -->
<li class="hidden-xs">
<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
<i class="fa fa-tasks"></i>
<span class="badge badge-warning">4</span>
</a>

<!-- BEGIN Tasks Dropdown -->
<ul class="dropdown-navbar dropdown-menu">
<li class="nav-header">
<i class="fa fa-check"></i>
4 Tasks to complete
</li>

<li>
<a href="javascript:void(0);">
<div class="clearfix">
<span class="pull-left">Software Update</span>
<span class="pull-right">75%</span>
</div>

<div class="progress progress-mini">
<div style="width:75%" class="progress-bar progress-bar-warning"></div>
</div>
</a>
</li>

<li>
<a href="javascript:void(0);">
<div class="clearfix">
<span class="pull-left">Transfer To New Server</span>
<span class="pull-right">45%</span>
</div>

<div class="progress progress-mini">
<div style="width:45%" class="progress-bar progress-bar-danger"></div>
</div>
</a>
</li>

<li>
<a href="javascript:void(0);">
<div class="clearfix">
<span class="pull-left">Bug Fixes</span>
<span class="pull-right">20%</span>
</div>

<div class="progress progress-mini">
<div style="width:20%" class="progress-bar"></div>
</div>
</a>
</li>

<li>
<a href="javascript:void(0);">
<div class="clearfix">
<span class="pull-left">Writing Documentation</span>
<span class="pull-right">85%</span>
</div>

<div class="progress progress-mini progress-striped active">
<div style="width:85%" class="progress-bar progress-bar-success"></div>
</div>
</a>
</li>

<li class="more">
<a href="javascript:void(0);">See tasks with details</a>
</li>
</ul>
<!-- END Tasks Dropdown -->
</li>
<!-- END Button Tasks -->

<!-- BEGIN Button Notifications -->
<li class="hidden-xs">
<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
<i class="fa fa-bell"></i>
<span class="badge badge-important">5</span>
</a>

<!-- BEGIN Notifications Dropdown -->
<ul class="dropdown-navbar dropdown-menu">
<li class="nav-header">
<i class="fa fa-warning"></i>
5 Notifications
</li>

<li class="notify">
<a href="javascript:void(0);">
<i class="fa fa-comment orange"></i>
<p>New Comments</p>
<span class="badge badge-warning">4</span>
</a>
</li>

<li class="notify">
<a href="javascript:void(0);">
<i class="fa fa-twitter blue"></i>
<p>New Twitter followers</p>
<span class="badge badge-info">7</span>
</a>
</li>

<li class="notify">
<a href="javascript:void(0);">
<img src="img/demo/avatar/avatar2.jpg" alt="Alex" />
<p>David would like to become moderator.</p>
</a>
</li>

<li class="notify">
<a href="javascript:void(0);">
<i class="fa fa-bug pink"></i>
<p>New bug in program!</p>
</a>
</li>

<li class="notify">
<a href="javascript:void(0);">
<i class="fa fa-shopping-cart green"></i>
<p>You have some new orders</p>
<span class="badge badge-success">+10</span>
</a>
</li>

<li class="more">
<a href="javascript:void(0);">See all notifications</a>
</li>
</ul>
<!-- END Notifications Dropdown -->
</li>
<!-- END Button Notifications -->

<!-- BEGIN Button Messages -->
<li class="hidden-xs">
<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">
<i class="fa fa-envelope"></i>
<span class="badge badge-success">3</span>
</a>

<!-- BEGIN Messages Dropdown -->
<ul class="dropdown-navbar dropdown-menu">
<li class="nav-header">
<i class="fa fa-comments"></i>
3 Messages
</li>

<li class="msg">
<a href="javascript:void(0);">
<img src="img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
<div>
<span class="msg-title">Sarah</span>
<span class="msg-time">
<i class="fa fa-clock-o"></i>
<span>a moment ago</span>
</span>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</a>
</li>

<li class="msg">
<a href="javascript:void(0);">
<img src="img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
<div>
<span class="msg-title">Emma</span>
<span class="msg-time">
<i class="fa fa-clock-o"></i>
<span>2 Days ago</span>
</span>
</div>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
</a>
</li>

<li class="msg">
<a href="javascript:void(0);">
<img src="img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
<div>
<span class="msg-title">John</span>
<span class="msg-time">
<i class="fa fa-clock-o"></i>
<span>8:24 PM</span>
</span>
</div>
<p>Duis aute irure dolor in reprehenderit in ...</p>
</a>
</li>

<li class="more">
<a href="javascript:void(0);">See all messages</a>
</li>
</ul>
<!-- END Notifications Dropdown -->
</li>
<!-- END Button Messages -->

<!-- BEGIN Button User -->
<li class="user-profile">
<a data-toggle="dropdown" href="javascript:void(0);" class="user-menu dropdown-toggle">
<img class="nav-user-photo" src="img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />
<span class="hhh" id="user_info">
Penny
</span>
<i class="fa fa-caret-down"></i>
</a>

<!-- BEGIN User Dropdown -->
<ul class="dropdown-menu dropdown-navbar" id="user_menu">
<li class="nav-header">
<i class="fa fa-clock-o"></i>
Logined From 20:45
</li>

<li>
<a href="javascript:void(0);">
<i class="fa fa-cog"></i>
Account Settings
</a>
</li>

<li>
<a href="javascript:void(0);">
<i class="fa fa-user"></i>
Edit Profile
</a>
</li>

<li>
<a href="javascript:void(0);">
<i class="fa fa-question"></i>
Help
</a>
</li>

<li class="divider visible-xs"></li>

<li class="visible-xs">
<a href="javascript:void(0);">
<i class="fa fa-tasks"></i>
Tasks
<span class="badge badge-warning">4</span>
</a>
</li>
<li class="visible-xs">
<a href="javascript:void(0);">
<i class="fa fa-bell"></i>
Notifications
<span class="badge badge-important">8</span>
</a>
</li>
<li class="visible-xs">
<a href="javascript:void(0);">
<i class="fa fa-envelope"></i>
Messages
<span class="badge badge-success">5</span>
</a>
</li>

<li class="divider"></li>

<li>
<a href="javascript:void(0);">
<i class="fa fa-off"></i>
Logout
</a>
</li>
</ul>
<!-- BEGIN User Dropdown -->
</li>
<!-- END Button User -->
</ul>
<!-- END Navbar Buttons -->
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">
<!-- BEGIN Sidebar -->
<div id="sidebar" class="navbar-collapse collapse">
<!-- BEGIN Navlist -->
<ul class="nav nav-list">
<!-- END Search Form -->
<li class="">
	<a href="">
		<i class="fa fa-home"></i>
		<span>Home</span>
	</a>
</li>

<li>
	<a href="javascript:void(0);" class="dropdown-toggle">
	<i class="fa fa-bullhorn"></i>
		<span>Mahasiswa</span>
	</a>
</li>

<li>
<a href="typography.html">
<i class="fa fa-text-width"></i>
<span>Typography</span>
</a>
</li>

<li>
<a href="javascript:void(0);" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>UI Elements</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="ui_general.html">General</a></li>
<li><a href="ui_button.html">Button</a></li>
<li><a href="ui_tabs.html">Tab & Accordion</a></li>
<li><a href="ui_slider.html">Slider</a></li>
<li><a href="ui_tile.html">Tile</a></li>
<li><a href="ui_timeline.html">Timeline</a></li>
<li><a href="ui_chart.html">Chart</a></li>
<li><a href="ui_message.html">Conversation</a></li>
<li><a href="ui_horizontal-menu.html">Horizontal Menu</a></li>
<li><a href="ui_icon.html">Icon</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="javascript:void(0);" class="dropdown-toggle">
<i class="fa fa-edit"></i>
<span>Forms</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="form_layout.html">Layout</a></li>
<li><a href="form_component.html">Component</a></li>
<li><a href="form_wizard.html">Wizard</a></li>
<li><a href="form_validation.html">Validation</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="javascript:void(0);" class="dropdown-toggle">
<i class="fa fa-list"></i>
<span>Tables</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="table_basic.html">Basic</a></li>
<li><a href="table_advance.html">Advance</a></li>
<li><a href="table_dynamic.html">Dynamic</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="javascript:void(0);" class="dropdown-toggle">
<i class="fa fa-globe"></i>
<span>Maps</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="map_google.html">Google Maps</a></li>
<li><a href="map_vector.html">Vector Maps</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="box.html">
<i class="fa fa-list-alt"></i>
<span>Box</span>
</a>
</li>

<li>
<a href="calendar.html">
<i class="fa fa-calendar"></i>
<span>Calendar</span>
</a>
</li>

<li>
<a href="gallery.html">
<i class="fa fa-picture-o"></i>
<span>Gallery</span>
</a>
</li>

<li>
<a href="grid.html">
<i class="fa fa-th"></i>
<span>Griding System</span>
</a>
</li>

<li>
<a href="javascript:void(0);" class="dropdown-toggle">
<i class="fa fa-file-text-o"></i>
<span>Sample Pages</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="extra_login.html">Login &amp; Register</a></li>
<li><span>Email</span>
<ul>
<li><a href="extra_mail-list.html">Inbox</a></li>
<li><a href="extra_mail-msg.html">Mail Thread</a></li>
<li><a href="extra_mail-compose.html">Compose</a></li>
</ul>
</li>
<li><a href="extra_profile.html">User Profile</a></li>
<li><a href="extra_invoice.html">Invoice</a></li>
<li><a href="extra_search.html">Search Results</a></li>
</ul>
<!-- END Submenu -->
</li>

<li>
<a href="javascript:void(0);" class="dropdown-toggle">
<i class="fa fa-file"></i>
<span>Other Pages</span>
<b class="arrow fa fa-angle-right"></b>
</a>

<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="more_blank.html">Blank Page</a></li>
<li><a href="more_full-width.html">Full Width Page</a></li>
<li><span>Errors</span>
<ul>
<li><a href="more_error-404.html">Error 404</a></li>
<li><a href="more_error-500.html">Error 500</a></li>
</ul>
</li>
<li><a href="more_set-skin.html">Skin</a></li>
<li><a href="more_set-sidebar-navbar-color.html">Sidebar &amp; Navbar</a></li>
<li><a href="more_sidebar-collapsed.html">Collapsed Sidebar</a></li>
</ul>
<!-- END Submenu -->
</li>
</ul>
<!-- END Navlist -->

<!-- BEGIN Sidebar Collapse Button -->
<div id="sidebar-collapse" class="visible-lg">
<i class="fa fa-angle-double-left"></i>
</div>
<!-- END Sidebar Collapse Button -->
</div>
<!-- END Sidebar -->

<!-- BEGIN Content -->
<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1><i class="fa fa-home"></i> Home</h1>
</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
<ul class="breadcrumb">
<li class="active"><i class="fa fa-home"></i> Home</li>
</ul>
</div>
<!-- END Breadcrumb -->

<!-- view -->


<footer>
<p>2015 © STMIK-IM Team.</p>
</footer>

<a id="btn-scrollup" class="btn btn-circle btn-lg" href="javascript:void(0);"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
</div>
<!-- END Container -->


<!--basic scripts-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/jquery-cookie/jquery.cookie.js"></script>

<!--page specific plugin scripts-->
<script src="assets/flot/jquery.flot.js"></script>
<script src="assets/flot/jquery.flot.resize.js"></script>
<script src="assets/flot/jquery.flot.pie.js"></script>
<script src="assets/flot/jquery.flot.stack.js"></script>
<script src="assets/flot/jquery.flot.crosshair.js"></script>
<script src="assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/sparkline/jquery.sparkline.min.js"></script>

<!--Angular Router-->
<script src="assets/angular/angular.min.js"></script>
<script src="assets/angular/angular-ui-router.min.js"></script>

<!--flaty scripts-->
<script src="js/flaty.js"></script>
<script src="js/flaty-demo-codes.js"></script>

</body>
</html>