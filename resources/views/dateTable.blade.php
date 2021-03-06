<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
<head>
<meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Online Statistics</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
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
                <img class="loading-img-spin" src="{{asset('assets/images/loading.png')}}" width="20" height="20" alt="admin">
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
                    <img src="{{asset('assets/images/logo.png')}}" alt="" />
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
                            <img src="{{asset('assets/images/prof.jpg')}}" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
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
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">power_settings_new</i>Logout
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
                                <img src="{{asset('assets/images/prof.jpg')}}" class="img-circle user-img-circle"
                                    alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Abdullah Allan </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{url('/index1')}}"  >
                            <i class="fas fa-tachometer-alt"></i>
                            <span>???????????? ????????????????</span>
                        </a>
                    </li>
                   
                      
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <!--<i class="material-icons">location_city</i> -->
                            <i class="material-icons">location_city</i>
                            <span>??????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Nablus')}}">???????????? ??????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Nablus')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>????????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Tulkarm')}}">???????????? ????????????</a>
                            </li>
                           
                            <li>
                                <a href="{{url('/unregistered_Tulkarm')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>??????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Jerusalem')}}">???????????? ??????????</a>
                            </li>
                           
                            <li>
                                <a href="{{url('/unregistered_Jerusalem')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>?????? ???????? ??????????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Ramallah')}}">???????????? ?????? ???????? ??????????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Ramallah')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>????????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Hebron')}}">???????????? ????????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Hebron')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>?????? ??????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Bethlehem')}}">???????????? ?????? ??????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Bethlehem')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>??????????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Qalqilya')}}">???????????? ??????????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Qalqilya')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>??????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Salfit')}}">???????????? ??????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_salfit')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>??????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Jericho')}}">???????????? ??????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Jericho')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_jenin')}}">???????????? ????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Jenin')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>??????????</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('/index_Tubas')}}">???????????? ??????????</a>
                            </li>
                            <li>
                                <a href="{{url('/unregistered_Tubas')}}">?????? ???????????? ?????????? ????????????</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/gropTable')}}"  class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>???????????? ???????????? ?????? ????????????????</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="{{url('/floatChart')}}"  class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>?????? ?????????? ????????????????</span>
                        </a>
                      
                    </li>
                    <li>
                        <a href="{{url('/dateTable')}}"  class="menu-toggle">
                           <i class="material-icons">location_city</i>
                            <span>???????????? ?????? ????????????????</span>
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
                        <div class="rightSetting">
                            <p>Disk Space</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>Server Load</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                        aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                            </div>
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
                
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ???????????? ?????????????? ?????? ????????????...
                            </h2>
                           
                        </div>
                        <div class="body table-responsive">
                                    <table class="table table-bordered" id="myTable" >
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width:1%">?????? ????????????????</th>
                                                <th class="text-center" style="width:1%">???????? ?????? ?????????? ????????????????</th>
                                                <th class="text-center" style="width:1%">?????? ???????? ???????????? ????????????????</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row" class="text-center">??????????</th>
                                                <td><input type="date" class="text-center" name="daterange" ></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>

                                            <tr>
                                                <th scope="row" class="text-center">?????? ???????? ??????????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">?????? ??????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">?????? ??????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">??????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">????????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">??????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">??????????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">??????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>
                                            <tr>
                                                <th scope="row" class="text-center">??????????</th>
                                                <td><input type="date" class="text-center" name="nationality" value="{{$ff->nationality ?? ''}}"></td>
                                                <td><input type="date" class="text-center" name="id" value="{{ $id->id  ?? ''}}"></td>
                                              
                                            </tr>

                                        </tbody>
                                    </table>
                                    <button id="add" class="btn-hover btn-border-radius color-1" >?????? ????????????????</button>
                                    <button id="deleteBtn" class="btn-hover btn-border-radius color-2">?????????? ????????????????</button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(function() {
            $('input[name="daterange"]').daterangepicker();
        });
   </script>

    <!-- Plugins Js -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/table.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/js/admin.js')}}"></script>
    <script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
    <!-- Demo Js -->
</body>



</html>