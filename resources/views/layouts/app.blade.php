<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="images/favicon_1.ico">

       <title>{{ config('app.name', 'Kopotakkho Enterprise') }}</title>

        <!-- Base Css Files -->
     <!-- template Links -->
        <link href="{{asset('support/css/bootstrap.min.css')}}" rel="stylesheet" />

        <link href="{{asset('support/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('support/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('support/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
        <link href="{{asset('support/css/animate.css')}}" rel="stylesheet" />
        <link href="{{asset('support/css/waves-effect.css')}}" rel="stylesheet">
        <link href="{{asset('support/assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
        <link href="{{asset('support/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('support/css/style.css')}}" rel="stylesheet" type="text/css" />

        
<!-- template Links -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('support/js/modernizr.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script> 
    </head>



    <body class="fixed-left">
              <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"> <span>Kopotakkho</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{route('home')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="{{route('pos')}}" class="waves-effect"><i class="md md-share"></i></i><span> POS </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md-group-add"></i><span> Employee </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add_employee')}}">Add Employee</a></li>
                                    <li><a href="{{route('all_employee')}}">All Employees</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md-group-add"></i><span> Orders </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('pending_orders')}}">Pending Orders</a></li>
                                    <li><a href="{{route('success_orders')}}">Success Orders</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md-quick-contacts-dialer"></i> <span> Customers </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add_customer')}}">Add Customer</a></li>
                                    <li><a href="{{route('all_customer')}}">All Customers</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md-people-outline"></i> <span> Suppliers </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add_supplier')}}">Add Supplier</a></li>
                                    <li><a href="{{route('all_supplier')}}">All Supplier</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Salary (EMP) </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add_advance_salary')}}">Add Advance Salary</a></li>
                                    <li><a href="{{route('all_advance_salary')}}">All Advance Salary</a></li>
                                    <li><a href="{{route('pay_salary')}}">Pay Salary</a></li>
                                    <li><a href="">Last Month Salary</a></li>
                                    
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-redeem"></i> <span> Category </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add_category')}}">Add Category</a></li>
                                    <li><a href="{{route('all_category')}}">All Category</a></li>
                                </ul>
                            </li>
      
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Products </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('add_product')}}">Add Product</a></li>
                                    <li><a href="{{route('all_product')}}">All Product</a></li>
                                    
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-view-list"></i><span> Expense </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('add_expense') }}">Add New</a></li>
                                    <li><a href="{{ route('expense_today') }}">Expense Today</a></li>
                                    <li><a href="{{ route('monthly_expense') }}">Monthly Expense</a></li>
                                    <li><a href="{{ route('yearly_expense') }}">Yearly Expense</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-poll"></i><span> Sells Report </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chartjs.html">Chartjs</a></li>
                                    <li><a href="flot-chart.html">Flot Chart</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                    <li><a href="chart-radial.html">Radial charts</a></li>
                                    <li><a href="other-chart.html">Other Chart</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 

        @yield('content')
 

  <script>
    var resizefunc = [];
</script>
        <script src="{{asset('support/js/jquery.min.js')}}"></script>
        <script src="{{asset('support/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('support/js/waves.js')}}"></script>
        <script src="{{asset('support/js/wow.min.js')}}"></script>
        <script src="{{asset('support/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('support/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('support/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('support/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('support/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('support/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('support/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('support/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{asset('support/assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('support/assets/sweet-alert/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{asset('support/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('support/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('support/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('support/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('support/js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('support/js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{asset('support/js/jquery.todo.js')}}"></script>

        <script type="text/javascript">

            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <script>
            @if (Session::has('message')) 
                var type="{{ Session::get('alert-type', 'info')}}"
                switch(type){
                    case 'info':
                    toastr.info("{{ Session::get('message')}}");
                    break;
                    case 'success':
                    toastr.success("{{ Session::get('message')}}");
                    break;
                    case 'warning':
                    toastr.warning("{{ Session::get('message')}}");
                    break;
                    case 'error':
                    toastr.error("{{ Session::get('message')}}");
                    break;
                }
                @endif
        </script>

        <script>
            $(document).on("click", "#delete", function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                swal({
                    title: "Are you sure to delete ?",
                    text: "Once delete this will permanently delete !",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                        if (willDelete) {
                            window.location.href = link;
                        }else{
                            swal("Safe Data");
                        }
                    });
            });
        </script>
    
    </body>
</html>