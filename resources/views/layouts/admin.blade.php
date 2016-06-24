<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ $root }}admin_assets\images\favicon.png">
    <title>Portal E-Sports BR</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ $root }}admin_assets\bower_components\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ $root }}admin_assets\bower_components\metisMenu\dist\metisMenu.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ $root }}admin_assets\bower_components\morrisjs\morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ $root }}admin_assets\css\style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="{{ $root }}assets\css\font-awesome.css" media="screen">
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    @yield('content')
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="{{ $root }}admin"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">Painel</span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i> <span class="badge badge-xs badge-warning">5</span></a>
                    <ul class="dropdown-menu nicescroll mailbox">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center"> <a href="#">
                                    <div class="user-img"> <img src="{{ $root }}admin_assets\images\users\pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ $root }}admin_assets\images\users\sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ $root }}admin_assets\images\users\arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a> <a href="#">
                                    <div class="user-img"> <img src="{{ $root }}admin_assets\images\users\pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a> </div>
                        </li>
                        <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i> <span class="badge badge-xs badge-danger">5</span></a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div>
                                    <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                    </div>
                                </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-bell"></i> <span class="badge badge-xs badge-info">5</span></a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li> <a href="#">
                                <div> <i class="ti-comments fa-fw"></i> New Comment <span class="pull-right text-muted small">4 minutes ago</span> </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div> <i class="ti-twitter fa-fw"></i> 3 New Followers <span class="pull-right text-muted small">12 minutes ago</span> </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div> <i class="ti-email fa-fw"></i> Message Sent <span class="pull-right text-muted small">4 minutes ago</span> </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div> <i class="ti-pencil-alt fa-fw"></i> New Task <span class="pull-right text-muted small">4 minutes ago</span> </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a href="#">
                                <div> <i class="ti-upload fa-fw"></i> Server Rebooted <span class="pull-right text-muted small">4 minutes ago</span> </div>
                            </a> </li>
                        <li class="divider"></li>
                        <li> <a class="text-center" href="#"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Pesquisar..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
                <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ $root }}admin_assets\images\users\hritik.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ Auth::user()->name }}</b> </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="ti-user"></i> Meu profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="ti-shield"></i> Segurança</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="./logout"><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>

    <div class="navbar-default sidebar nicescroll" role="navigation">
        <div class="sidebar-nav navbar-collapse ">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                    <!-- /input-group -->
                </li>
                <li class="nav-small-cap">Menu</li>
                <li> <a href="{{ $root }}admin" class="waves-effect"><i class="glyphicon glyphicon-fire fa-fw"></i> Dashboard</a>
                </li>
                <li> <a href="#" class="waves-effect"><i class="ti-user fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ $root }}admin/user/index">Listar Usuario</a></li>
                        <li><a href="{{ $root }}admin/user/create">Criar Usuario</a></li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li> <a href="#" class="waves-effect"><i class="ti-pie-chart fa-fw"></i> Charts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="flot.htm">Flot Charts</a> </li>
                        <li><a href="morris-chart.htm">Morris Chart</a></li>
                        <li><a href="chart-js.htm">Chart-js</a></li>
                        <li><a href="peity-chart.htm">Peity Charts</a></li>
                        <li><a href="sparkline-chart.htm">Sparkline charts</a></li>
                        <li><a href="extra-charts.htm">Extra Charts</a></li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li> <a href="tables.html" class="waves-effect"><i class="ti-layout fa-fw"></i> Tables<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="basic-table.htm">Basic Tables</a></li>
                        <li><a href="data-table.htm">Data Table</a></li>
                        <li><a href="bootstrap-tables.htm">Bootstrap Tables</a></li>
                    </ul>
                </li>
                <li> <a href="forms.html" class="waves-effect"><i class="ti-pencil-alt fa-fw"></i> Forms<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="form-elements.htm">Basic Forms</a></li>
                        <li><a href="advanced-form.htm">Form Addons</a></li>
                        <li><a href="form-material-elements.htm">Form Material</a></li>
                        <li><a href="form-upload.htm">File Upload</a></li>
                        <li><a href="form-mask.htm">Form Mask</a></li>
                        <li><a href="form-validation.htm">Form Validation</a></li>
                        <li><a href="wysiwig.htm">Wysiwig Editors</a></li>
                        <li><a href="form-dropzone.htm">File Dropzone</a></li>
                        <li><a href="form-xeditable.htm">X-editable</a></li>
                    </ul>
                </li>
                <li> <a href="widgets.htm" class="waves-effect"><i class="ti-widget fa-fw"></i> Widgets</a> </li>
                <li> <a href="#" class="waves-effect"><i class="ti-face-smile fa-fw"></i> Icons<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="fontawesome.htm">Font awesome</a> </li>
                        <li> <a href="themifyicon.htm">Themify Icons</a> </li>
                        <li> <a href="simple-line.htm">Simple line Icons</a> </li>
                        <li> <a href="weather.htm">Weather Icons</a> </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li> <a href="map-google.htm" class="waves-effect"><i class="ti-location-pin fa-fw"></i> Google Map</a> </li>
                <li> <a href="map-vector.htm" class="waves-effect"><i class="ti-ink-pen fa-fw"></i> Vector Map</a> </li>
                <li> <a href="#" class="waves-effect"><i class="ti-files fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="blank.htm">Blank Page</a></li>
                        <li><a href="login.htm">Login Page</a></li>
                        <li><a href="login2.htm">Login Page 2</a></li>
                        <li><a href="profile.htm">Profile</a></li>
                        <li><a href="invoice.htm">Invoice</a></li>
                        <li><a href="faq.htm">FAQ</a></li>
                        <li><a href="gallery.htm">Gallery</a></li>
                        <li><a href="pricing.htm">Pricing</a></li>
                        <li><a href="register.htm">Register</a></li>
                        <li><a href="recoverpw.htm">Recover Password</a></li>
                        <li><a href="lock-screen.htm">Lock Screen</a></li>
                        <li><a href="400.htm">Error 400</a></li>
                        <li><a href="403.htm">Error 403</a></li>
                        <li><a href="404.htm">Error 404</a></li>
                        <li><a href="500.htm">Error 500</a></li>
                        <li><a href="503.htm">Error 503</a></li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li> <a href="inbox.htm" class="waves-effect"><i class="ti-email fa-fw"></i> Inbox</a> </li>
                <li> <a href="calendar.htm" class="waves-effect"><i class="ti-calendar fa-fw"></i> Calender</a> </li>
                <li> <a href="#" class="waves-effect"><i class="ti-share fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="#">Second Level Item</a> </li>
                        <li> <a href="#">Second Level Item</a> </li>
                        <li> <a href="#" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="#">Third Level Item</a> </li>
                                <li> <a href="#">Third Level Item</a> </li>
                                <li> <a href="#">Third Level Item</a> </li>
                                <li> <a href="#">Third Level Item</a> </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- Page Content -->

    <!-- /#page-wrapper -->
    <footer class="footer text-center"> &copy; COPYRIGHT {{ (date("Y")) }} ilhadamacacada.net by GMLYRANetwork </footer>
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{ $root }}admin_assets\bower_components\jquery\dist\jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ $root }}admin_assets\bower_components\bootstrap\dist\js\bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ $root }}admin_assets\bower_components\metisMenu\dist\metisMenu.min.js"></script>
<!--Nice scroll JavaScript -->
<script src="{{ $root }}admin_assets\js\jquery.nicescroll.js"></script>
<!--Morris JavaScript -->
<script src="{{ $root }}admin_assets\bower_components\raphael\raphael-min.js"></script>
<script src="{{ $root }}admin_assets\bower_components\morrisjs\morris.js"></script>
<!--Wave Effects -->
<script src="{{ $root }}admin_assets\js\waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ $root }}admin_assets\js\myadmin.js"></script>
<script src="{{ $root }}admin_assets\js\dashboard2.js"></script>
<script src="{{ $root }}admin_assets\bower_components\jquery-sparkline\jquery.sparkline.min.js"></script>
<script src="{{ $root }}admin_assets\bower_components\jquery-sparkline\jquery.charts-sparkline.js"></script>
</body>
</html>
