<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Online Statistics</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="<?php echo e(asset('assets/css/app.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')); ?>" rel="stylesheet">
    <!-- Custom Css -->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="<?php echo e(asset('assets/css/styles/all-themes.css')); ?>" rel="stylesheet" />

    <link href="<?php echo e(asset('assets/css/styles/all-themes.css')); ?>" rel="stylesheet" />


<link rel="icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>" type="image/x-icon">
<!-- Plugins Core Css -->
<link href="<?php echo e(asset('assets/css/app.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')); ?>" rel="stylesheet">
<!-- Custom Css -->
<link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />
<!-- You can choose a theme from css/styles instead of get all themes -->
<link href="<?php echo e(asset('assets/css/styles/all-themes.css')); ?>" rel="stylesheet" />
	<style>
		.contact100-form-checkbox .form-check .form-check-label,
		.wrap-input100 .material-icons {
			text-align: right;
		}
		.default-select option{
			color:#000;
		}
	</style>
</head>

<body class="light rtl">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="<?php echo e(asset('assets/images/loading.png')); ?>" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="">
                    <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="" />
                    <span class="logo-name">statistics</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-right">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <li class="dropdown user_profile">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                            role="button">
                            <i class="material-icons">help</i>
                            <!-- <img src="<?php echo e(asset('assets/images/prof.jpg')); ?>" width="32" height="32" alt="User"> -->
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="<?php echo e(asset('assets/images/prof.jpg')); ?>" class="img-circle user-img-circle"
                                    alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Abdullah Allan </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?php echo e(url('/index1')); ?>"  >
                            <i class="fas fa-tachometer-alt"></i>
                            <span>الصفحه الرئيسيه</span>
                        </a>
                    </li>
                   
                      
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <!--<i class="material-icons">location_city</i> -->
                            <i class="material-icons">location_city</i>
                            <span>نابلس</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Nablus')); ?>">بيانات نابلس</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Nablus')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>طولكرم</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Tulkarm')); ?>">بيانات طولكرم</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo e(url('/unregistered_Tulkarm')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>القدس</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Jerusalem')); ?>">بيانات القدس</a>
                            </li>
                           
                            <li>
                                <a href="<?php echo e(url('/unregistered_Jerusalem')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>رام الله والبيره</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Ramallah')); ?>">بيانات رام الله والبيره</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Ramallah')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>الخليل</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Hebron')); ?>">بيانات الخليل</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Hebron')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>بيت لحم</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Bethlehem')); ?>">بيانات بيت لحم</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Bethlehem')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>قلقيليه</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Qalqilya')); ?>">بيانات قلقيليه</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Qalqilya')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>سلفيت</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Salfit')); ?>">بيانات سلفيت</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_salfit')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>اريحا</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Jericho')); ?>">بيانات اريحا</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Jericho')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>جنين</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_jenin')); ?>">بيانات جنين</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Jenin')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>طوباس</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo e(url('/index_Tubas')); ?>">بيانات طوباس</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/unregistered_Tubas')); ?>">كشف باسماء الغير مسجلين</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/gropTable')); ?>"  class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>مقارنه بيانات بين المحاظات</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="<?php echo e(url('/floatChart')); ?>"  class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>نمو قاعده البيانات</span>
                        </a>
                      
                    </li>
                    <li>
                        <a href="<?php echo e(url('/dateTable')); ?>"  class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>مواعيد جمع البيانات</span>
                        </a>
                        
                    </li>
                   
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
                <li role="presentation">
                    <!-- <a href="#settings" data-toggle="tab">SETTINGS</a> -->
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                           
                        </div>
                        <div class="rightSetting">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black" class="actived">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                       
                       
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                   
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">الصفحه الرئيسيه</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="<?php echo e(url('/index1')); ?>">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <!-- <li class="breadcrumb-item active">Widgets</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center l-bg-red">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar-2">6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9,5</div>
                        </div>
                        <div class="text m-b-10">عدد الذكور</div>
                        <h3 class="m-b-0">1512
                            <i class="material-icons">trending_up</i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center l-bg-cyan">
                        <div class="icon m-b-10">
                            <span class="chart chart-line-2">9,4,6,5,6,4,7,3</span>
                        </div>
                        <div class="text m-b-10">عدد الاناث</div>
                        <h3 class="m-b-0">1236
                            <i class="material-icons">trending_up</i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center l-bg-orange">
                        <div class="icon m-b-10">
                            <div class="chart chart-pie-2">30, 35, 25, 8</div>
                        </div>
                        <div class="text m-b-10">نسبه البطاله</div>
                        <h3 class="m-b-0">1107
                            <i class="material-icons">trending_down</i>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center green">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar-2">4,6,-3,-1,2,-2,4,3,6,7,-2,3,4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                        </div>
                        <div class="text m-b-10">نسبه ذوي الاحتياجات الخاصه</div>
                        <h3 class="m-b-0">167
                            <i class="material-icons">trending_down</i>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                  
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="row justify-content-center text-center m-t-20">
                                <div class="col-5">
                                    <h6 class="text-muted">عدد الذكور</h6>
                                    <h3>23,000</h3>
                                </div>
                                <div class="col-5">
                                    <h6 class="text-muted">عدد الاناث</h6>
                                    <h3>12,564</h3>
                                </div>
                            </div>
                            <div id="area_chart" class="area_chart-style"></div>
                            <div class="row justify-content-center text-center b-t-default m-t-15 p-t-20">
                                <div class="col-3 b-r-default">
                                    <h5>75%</h5>
                                    <p class="text-muted m-b-0">نسبه الذكور</p>
                                </div>
                                <div class="col-3 b-r-default">
                                    <h5>16%</h5>
                                    <p class="text-muted m-b-0">نسبه الاناث</p>
                                </div>
                                <div class="col-3">
                                    <h5>9%</h5>
                                    <p class="text-muted m-b-0">الذكور/الاناث</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="row justify-content-center text-center m-t-20">
                                <div class="col-5">
                                    <h6 class="text-muted">نسبه التعليم</h6>
                                    <h3>87,000</h3>
                                </div>
                                <div class="col-5">
                                    <h6 class="text-muted">نسبه الاميه</h6>
                                    <h3>4,354</h3>
                                </div>
                            </div>
                            <div id="project_line" class="area_chart-style"></div>
                        </div>
                        <!-- <div class="card-footer">
                            <div class="row text-center">
                                <div class="col-6 b-r-default">
                                    <h6 class="text-muted m-b-10">Completed Projects</h6>
                                    <h3 class="m-b-0">986</h3>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-muted m-b-10">Total Earnings</h6>
                                    <h3 class="m-b-0">234.6M</h3>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                
            </div>
           

            <div class="row ">
                <!-- هون -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>النمو السكاني</strong></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="bar-chart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>توزيع السكان على المحافظات</strong> </h2>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <div id="chart7"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-green total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Total Sales</h3>
                                <p class="m-0">4000</p>
                            </div>
                        </div>
                        <div id="graph1" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-orange total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Visitors</h3>
                                <p class="m-0">3345</p>
                            </div>
                        </div>
                        <div id="graph2" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-cyan total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Orders</h3>
                                <p class="m-0">2364</p>
                            </div>
                        </div>
                        <div id="graph3" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-purple total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Profit</h3>
                                <p class="m-0">$75,656</p>
                            </div>
                        </div>
                        <div id="graph4" class="card-height-100"></div>
                    </div>
                </div>
            </div>
             <!-- من هون اخدت -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Income</div>
                        <h3 class="m-b-10">$758
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Orders Received</div>
                        <h3 class="m-b-10">1025
                            <i class="material-icons col-red">trending_down</i>
                        </h3>
                        <div class="icon">
                            <span class="chart chart-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Sales</div>
                        <h3 class="m-b-10">956
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-pie"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">Total Active Users</div>
                        <h3 class="m-b-10">214
                            <i class="material-icons col-red">trending_down</i>
                        </h3>
                        <div class="icon">
                            <div class="chart" id="liveChart">Loading..</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>



    <script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/chart.min.js')); ?>"></script>
    <!-- Custom Js -->
    <script src="<?php echo e(asset('assets/js/admin.js')); ?>"></script>
    <!-- Widget Js -->
    <!-- Carousel Js -->
    <script src="<?php echo e(asset('assets/js/pages/medias/carousel.js')); ?>"></script>
    <!-- Knob Js -->
    <script src="<?php echo e(asset('assets/js/pages/charts/jquery-knob.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/todo/todo.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/widgets/widget.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/pages/charts/chartjs.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/charts/flot.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/bundles/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/charts/apexcharts.js')); ?>"></script>

     <!-- Echart Js -->
     <script src="<?php echo e(asset('assets/js/bundles/echart/echarts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/charts/echarts.js')); ?>"></script>
    




   
</body>



</html><?php /**PATH C:\Users\HP\Downloads\Final_STATISTICS_PALESTINE-main\resources\views/index1.blade.php ENDPATH**/ ?>