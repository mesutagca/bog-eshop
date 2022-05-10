<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Gorlabs Course Prepare Theme</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>




    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/gorlabs.css">
    <link rel="stylesheet" href="assets/flag-icon/css/flag-icon.css">
</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="index.html" class="logo">
                <img src="assets/img/logo2.png" width="45" alt="navbar brand" class="navbar-brand"> <strong class="text-white ml-1">Gorlabs</strong>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

            <div class="container-fluid new-age">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <label for="search"></label>
                            <input id="search" type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                           aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="backup" role="button" title="Backup">
                            <i class="fa fa-database"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="todo" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" title="Todo">
                            <i class="fas fa-address-card"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                            <li>
                                <div class="dropdown-title d-flex justify-content-between align-items-center">
                                    Messages
                                    <a href="#" class="small">Mark all as read</a>
                                </div>
                            </li>
                            <li>
                                <div class="message-notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jimmy Denis</span>
                                                <span class="block">
														How are you ?
													</span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Chad</span>
                                                <span class="block">
														Ok, Thanks !
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jhon Doe</span>
                                                <span class="block">
														Ready for the meeting today...
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Talha</span>
                                                <span class="block">
														Hi, Apa Kabar ?
													</span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">See all messages<i
                                        class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="notification">0</span>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            <li>
                                <div class="dropdown-title">You have 4 new notification</div>
                            </li>
                            <li>
                                <div class="notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"><i class="fa fa-user-plus"></i></div>
                                            <div class="notif-content">
													<span class="block">
														New user registered
													</span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"><i class="fa fa-comment"></i></div>
                                            <div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"><i class="fa fa-heart"></i></div>
                                            <div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">See all notifications<i
                                        class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fas fa-layer-group"></i>
                            <div class="visitor_messages_count hide">
                                <span class="notification visitor_messages">0</span>
                            </div>

                        </a>
                        <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                            <div class="quick-actions-header">
                                <span class="title mb-1">Quick Proccess</span>
                                <span class="subtitle op-8">Short Cuts</span>
                            </div>
                            <div class="quick-actions-scroll scrollbar-outer">
                                <div class="quick-actions-items">
                                    <div class="row m-0">
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-danger rounded-circle">
                                                    <i class="far fa-calendar-alt"></i>
                                                </div>
                                                <span class="text">Calendar</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-warning rounded-circle">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <div class="visitor_messages_count hide">
                                                    <span class="text">Visitors</span>
                                                    <span class="notification visitor_messages">0</span>
                                                </div>

                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-info rounded-circle">
                                                    <i class="fas fa-file-excel"></i>
                                                </div>
                                                <span class="text">Reports</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-success rounded-circle">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                                <span class="text">Emails</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-primary rounded-circle">
                                                    <i class="fas fa-file-invoice-dollar"></i>
                                                </div>
                                                <span class="text">Invoice</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                        <a class="col-6 col-md-4 p-0" href="#">
                                            <div class="quick-actions-item">
                                                <div class="avatar-item bg-secondary rounded-circle">
                                                    <i class="fas fa-credit-card"></i>
                                                </div>
                                                <span class="text">Payments</span>
                                                <span class="notification">0</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link quick-sidebar-toggler">
                            <i class="fa fa-th"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown submenu hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-tr"></i>
                            Languages
                        </a>
                        <ul class="dropdown-menu">

                            <li class="nav-item p-1">
                                <a href="#" class="nav-link"
                                   style="color: #191919!important; font-weight: 500; font-size: 16px">
                                    <span class="flag-icon flag-icon-tr"></span>
                                    Türkçe
                                    <i class="fas fa-check" style="color:green"></i>
                                    <i class="fas fa-plus" style="color:#5f28fb"></i>

                                </a>
                            </li>
                            <li class="nav-item p-1">
                                <a href="#" class="nav-link"
                                   style="color: #191919!important; font-weight: 500; font-size: 16px">
                                    <span class="flag-icon flag-icon-en"></span>
                                    English
                                    <i class="fas fa-check" style="color:green"></i>
                                    <i class="fas fa-plus" style="color:#5f28fb"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg">
                                            <img src="assets/img/profile.jpg" alt="image profile"
                                                 class="avatar-img  rounded-circle">
                                        </div>
                                        <div class="u-text">
                                            <h4>Auth User Name</h4>
                                            <p class="text-muted">auth-user@email.com</p><a href="#"
                                                                                            class="btn btn-xs btn-secondary btn-sm">View
                                                Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">Go Web Site</a>
                                    <a class="dropdown-item" href="#">Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <!-- @if(session()->has('impersonate'))
                                        <div class="pull-left">
                                            <a class="btn btn-warning btn-flat" href="#">
                                                Back Own
                                            </a>
                                        </div>
@endif -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                    </a>
                                    <form id="logout-form" action="" method="POST" style="display: none">
                                        @csrf
                                    </form>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#administrator" aria-expanded="true">
                        <span>
                            Admin Admin
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="administrator">
                            <ul class="nav">
                                <li>
                                    <a href="user/profile.html">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboards</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Admin</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Accounting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Production</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#owner" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Owner</p>
                            <span class="caret"></span>
                        </a>

                        <div class="collapse" id="owner">
                            <ul class="nav nav-collapse">
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#themes">
                                        <p>Themes</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="themes">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="themes/themes.html">
                                                    <span class="sub-item">Theme List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#modules">
                                        <p>Modules</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="modules">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Module List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#tools">
                                        <p>Tools</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="tools">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="tool/route-list.html">
                                                    <span class="sub-item">Route List</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">System Settings</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                        <h4 class="text-section">Administration</h4>
                    </li>
                    <!--Setup Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#setup">
                            <i class="fas fa-layer-group"></i>
                            <p>Setup</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="setup">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="setup/general.html">
                                        <span class="sub-item">General Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="setup/meta-tags.html">
                                        <span class="sub-item">SEO Meta Tags</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="backup/index.html">
                                        <span class="sub-item">Backups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Black List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Setup End-->
                    <!--Globalization Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#globalization">
                            <i class="fas fa-layer-group"></i>
                            <p>Globalization</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="globalization">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="language/index.html">
                                        <span class="sub-item">Languages</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Globalization End-->
                    <!--Users Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#users">
                            <i class="fas fa-th-list"></i>
                            <p>Users</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="users">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="user/index.html">
                                        <span class="sub-item">User Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="role/index.html">
                                        <span class="sub-item">Role Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="permission/index.html">
                                        <span class="sub-item">Permission Manager</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Users End-->
                    <!--Categories Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#web-store">
                            <i class="fas fa-th-list"></i>
                            <p>Web Store</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="web-store">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="category/index.html">
                                        <span class="sub-item">Category Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="product/index.html">
                                        <span class="sub-item">Product Manager</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Reports</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Users End-->
                    <!--Pages Start-->
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#pages">
                            <i class="fas fa-th-list"></i>
                            <p>Pages</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="pages">
                            <ul class="nav nav-collapse">
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#forms">
                                        <p>Forms</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="forms">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="forms/forms.html">
                                                    <span class="sub-item">Forms</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#charts">
                                        <p>Charts</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="charts">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a href="charts/charts.html">
                                                    <span class="sub-item">Charts</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="charts/sparkline.html">
                                                    <span class="sub-item">Sparkline</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#components">
                                        <p>Components</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="components">
                                        <ul class="nav nav-collapse">
                                            <li><a href="components/avatars.html"><span class="sub-item">Avatars</span></a>
                                            </li>
                                            <li><a href="components/buttons.html"><span class="sub-item">Buttons</span></a>
                                            </li>
                                            <li><a href="components/flaticons.html"><span
                                                        class="sub-item">Flat Icons</span></a></li>
                                            <li><a href="components/font-awesome-icons.html"><span class="sub-item">Font Awesome</span></a>
                                            </li>
                                            <li><a href="components/gridsystem.html"><span
                                                        class="sub-item">Grid System</span></a></li>
                                            <li><a href="components/notifications.html"><span class="sub-item">Notifications</span></a>
                                            </li>
                                            <li><a href="components/panels.html"><span
                                                        class="sub-item">Panels</span></a></li>
                                            <li><a href="components/simple-line-icons.html"><span class="sub-item">Simple Line Icons</span></a>
                                            </li>
                                            <li><a href="components/sweetalert.html"><span
                                                        class="sub-item">Sweetalert</span></a></li>
                                            <li><a href="components/typography.html"><span
                                                        class="sub-item">Typography</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#maps">
                                        <p>Maps</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="maps">
                                        <ul class="nav nav-collapse">
                                            <li><a href="maps/jqvmap.html"><span class="sub-item">JqVmap</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="collapse" href="#tables">
                                        <p>Tables</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="tables">
                                        <ul class="nav nav-collapse">
                                            <li><a href="tables/datatables.html"><span
                                                        class="sub-item">Data Tables</span></a></li>
                                            <li><a href="tables/tables.html"><span class="sub-item">Tables</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav nav-collapse">
                                <li><a href="blank.html"><span class="sub-item">Blank Page</span></a></li>
                                <li><a href="compact-sidebar.html"><span class="sub-item">Compact Sidebar</span></a>
                                </li>
                                <li><a href="static-sidebar.html"><span class="sub-item">Static Sidebar</span></a></li>
                                <li><a href="icon-menu.html"><span class="sub-item">Icon Menu</span></a></li>
                                <li><a href="overlay-sidebar.html"><span class="sub-item">Overlay Sidebar</span></a>
                                </li>
                                <li><a href="sidebar-style-1.html"><span class="sub-item">Sidebar Style 1</span></a>
                                </li>
                                <li><a href="starter-template.html"><span class="sub-item">Starter Template</span></a>
                                </li>
                                <li><a href="widgets.html"><span class="sub-item">Widgets</span></a></li>
                            </ul>

                        </div>

                    </li>

                    <!--Pages End-->
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                            <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                            <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                            <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-inner mt--5">
                <div class="row mt--2">
                    <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Overall statistics</div>
                                <div class="card-category">Daily information about statistics in system</div>
                                <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-1"></div>
                                        <h6 class="fw-bold mt-3 mb-0">New Users</h6>
                                    </div>
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-2"></div>
                                        <h6 class="fw-bold mt-3 mb-0">Sales</h6>
                                    </div>
                                    <div class="px-2 pb-2 pb-md-0 text-center">
                                        <div id="circles-3"></div>
                                        <h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title">Total income & spend statistics</div>
                                <div class="row py-3">
                                    <div class="col-md-4 d-flex flex-column justify-content-around">
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                                            <h3 class="fw-bold">$9.782</h3>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
                                            <h3 class="fw-bold">$1,248</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div id="chart-container">
                                            <canvas id="totalIncomeChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">User Statistics</div>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
                                            Export
                                        </a>
                                        <a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
                                            Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container" style="min-height: 375px">
                                    <canvas id="statisticsChart"></canvas>
                                </div>
                                <div id="myChartLegend"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-title">Daily Sales</div>
                                <div class="card-category">March 25 - April 02</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="mb-4 mt-2">
                                    <h1>$4,578.58</h1>
                                </div>
                                <div class="pull-in">
                                    <canvas id="dailySalesChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="h1 fw-bold float-right text-warning">+7%</div>
                                <h2 class="mb-2">213</h2>
                                <p class="text-muted">Transactions</p>
                                <div class="pull-in sparkline-fix">
                                    <div id="lineChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-card-no-pd">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row card-tools-still-right">
                                    <h4 class="card-title">Users Geolocation</h4>
                                    <div class="card-tools">
                                        <button class="btn btn-icon btn-link btn-primary btn-xs"><span
                                                class="fa fa-angle-down"></span></button>
                                        <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span
                                                class="fa fa-sync-alt"></span></button>
                                        <button class="btn btn-icon btn-link btn-primary btn-xs"><span
                                                class="fa fa-times"></span></button>
                                    </div>
                                </div>
                                <p class="card-category">
                                    Map of the distribution of users around the world</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive table-hover table-sales">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/id.png" alt="indonesia">
                                                        </div>
                                                    </td>
                                                    <td>Indonesia</td>
                                                    <td class="text-right">
                                                        2.320
                                                    </td>
                                                    <td class="text-right">
                                                        42.18%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/us.png" alt="united states">
                                                        </div>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class="text-right">
                                                        240
                                                    </td>
                                                    <td class="text-right">
                                                        4.36%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/au.png" alt="australia">
                                                        </div>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class="text-right">
                                                        119
                                                    </td>
                                                    <td class="text-right">
                                                        2.16%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/ru.png" alt="russia">
                                                        </div>
                                                    </td>
                                                    <td>Russia</td>
                                                    <td class="text-right">
                                                        1.081
                                                    </td>
                                                    <td class="text-right">
                                                        19.65%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/cn.png" alt="china">
                                                        </div>
                                                    </td>
                                                    <td>China</td>
                                                    <td class="text-right">
                                                        1.100
                                                    </td>
                                                    <td class="text-right">
                                                        20%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="assets/img/flags/br.png" alt="brazil">
                                                        </div>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class="text-right">
                                                        640
                                                    </td>
                                                    <td class="text-right">
                                                        11.63%
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mapcontainer">
                                            <div id="map-example" class="vmap"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Top Products</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex">
                                    <div class="avatar">
                                        <img src="assets/img/logoproduct.svg" alt="..."
                                             class="avatar-img rounded-circle">
                                    </div>
                                    <div class="flex-1 pt-1 ml-2">
                                        <h6 class="fw-bold mb-1">CSS</h6>
                                        <small class="text-muted">Cascading Style Sheets</small>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <h3 class="text-info fw-bold">+$17</h3>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar">
                                        <img src="assets/img/logoproduct.svg" alt="..."
                                             class="avatar-img rounded-circle">
                                    </div>
                                    <div class="flex-1 pt-1 ml-2">
                                        <h6 class="fw-bold mb-1">J.CO Donuts</h6>
                                        <small class="text-muted">The Best Donuts</small>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <h3 class="text-info fw-bold">+$300</h3>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar">
                                        <img src="assets/img/logoproduct3.svg" alt="..."
                                             class="avatar-img rounded-circle">
                                    </div>
                                    <div class="flex-1 pt-1 ml-2">
                                        <h6 class="fw-bold mb-1">Ready Pro</h6>
                                        <small class="text-muted">Bootstrap 4 Admin Dashboard</small>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <h3 class="text-info fw-bold">+$350</h3>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="pull-in">
                                    <canvas id="topProductsChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title fw-mediumbold">Suggested People</div>
                                <div class="card-list">
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/img/jm_denis.jpg" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Jimmy Denis</div>
                                            <div class="status">Graphic Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-xs">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/img/chadengle.jpg" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Chad</div>
                                            <div class="status">CEO Zeleaf</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-xs">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Talha</div>
                                            <div class="status">Front End Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-xs">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">John Doe</div>
                                            <div class="status">Back End Developer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-xs">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Talha</div>
                                            <div class="status">Front End Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-xs">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="assets/img/jm_denis.jpg" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Jimmy Denis</div>
                                            <div class="status">Graphic Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-xs">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary bg-primary-gradient">
                            <div class="card-body">
                                <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
                                <h1 class="mb-4 fw-bold">17</h1>
                                <h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
                                <div id="activeUsersChart"></div>
                                <h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small>
                                        <span>7</span></li>
                                    <li class="d-flex justify-content-between pb-1 pt-1"><small>/product/gorlabs/demo.html</small>
                                        <span>10</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-header">
                                <div class="card-title">Feed Activity</div>
                            </div>
                            <div class="card-body">
                                <ol class="activity-feed">
                                    <li class="feed-item feed-item-secondary">
                                        <time class="date" datetime="9-25">Sep 25</time>
                                        <span class="text">Responded to need <a
                                                href="#">"Volunteer opportunity"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-success">
                                        <time class="date" datetime="9-24">Sep 24</time>
                                        <span class="text">Added an interest <a
                                                href="#">"Volunteer Activities"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-info">
                                        <time class="date" datetime="9-23">Sep 23</time>
                                        <span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-warning">
                                        <time class="date" datetime="9-21">Sep 21</time>
                                        <span class="text">Responded to need <a
                                                href="#">"In-Kind Opportunity"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-danger">
                                        <time class="date" datetime="9-18">Sep 18</time>
                                        <span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
                                    </li>
                                    <li class="feed-item">
                                        <time class="date" datetime="9-17">Sep 17</time>
                                        <span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card full-height">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">Support Tickets</div>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-today" data-toggle="pill"
                                                   href="#pills-today" role="tab" aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-week" data-toggle="pill"
                                                   href="#pills-week" role="tab" aria-selected="false">Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-month" data-toggle="pill"
                                                   href="#pills-month" role="tab" aria-selected="false">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar avatar-online">
                                        <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">Joko Subianto <span
                                                class="text-warning pl-3">pending</span></h6>
                                        <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">8:40 PM</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-offline">
                                        <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span
                                                class="text-success pl-3">open</span></h6>
                                        <span class="text-muted">I have some query regarding the license issue.</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">1 Day Ago</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-away">
                                        <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span
                                                class="text-muted pl-3">closed</span></h6>
                                        <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">2 Days Ago</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-offline">
                                        <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">Peter Parker <span
                                                class="text-success pl-3">open</span></h6>
                                        <span class="text-muted">I have some query regarding the license issue.</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">2 Day Ago</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-away">
                                        <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">Logan Paul <span
                                                class="text-muted pl-3">closed</span></h6>
                                        <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">2 Days Ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.themekita.com">
                                ThemeKita
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                        href="https://www.themekita.com">ThemeKita</a>
                </div>
            </div>
        </footer>
    </div>

</div>

<script src="{{'themes/admins/e-shop/gorlabs/js/gorlabs.js'}}"></script>

<script>
    WebFont.load({
        google: {"families": ["Lato:300,400,700,900"]},
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: ['assets/css/fonts.css']
        },
        active: function () {
            sessionStorage.fonts = true;
        }
    });
    Circles.create({
        id:'circles-1',
        radius:45,
        value:60,
        maxValue:100,
        width:7,
        text: 5,
        colors:['#f1f1f1', '#FF9E27'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-2',
        radius:45,
        value:70,
        maxValue:100,
        width:7,
        text: 36,
        colors:['#f1f1f1', '#2BB930'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    Circles.create({
        id:'circles-3',
        radius:45,
        value:40,
        maxValue:100,
        width:7,
        text: 12,
        colors:['#f1f1f1', '#F25961'],
        duration:400,
        wrpClass:'circles-wrp',
        textClass:'circles-text',
        styleWrapper:true,
        styleText:true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
        type: 'bar',
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
            datasets : [{
                label: "Total Income",
                backgroundColor: '#ff9e27',
                borderColor: 'rgb(23, 125, 255)',
                data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        display: false //this will remove only the label
                    },
                    gridLines : {
                        drawBorder: false,
                        display : false
                    }
                }],
                xAxes : [ {
                    gridLines : {
                        drawBorder: false,
                        display : false
                    }
                }]
            },
        }
    });

    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
        type: 'line',
        height: '70',
        width: '100%',
        lineWidth: '2',
        lineColor: '#ffa534',
        fillColor: 'rgba(255, 165, 52, .14)'
    });
</script>

</body>
</html>
