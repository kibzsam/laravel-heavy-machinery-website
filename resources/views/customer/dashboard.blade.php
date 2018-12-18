<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset('dist/css/AdminLTE.min.css')}}>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href={{asset('dist/css/skins/skin-red-light.min.css')}}>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <style>
       .sidebar-menu ul li{
           margin-bottom: 20px;
       }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{url('/welcome')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>CUST</b>OMER</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>CUSTOMER</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="{{url('/cart')}}" class="dropdown-toggle">
                            <i class="fa fa-cart-arrow-down" style="size: 50px"></i>
                            <span class="label label-warning">{{$count}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"></li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i>
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#"></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('customer/logout')}}"
                           onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{url('customer/logout')}}" method="POST" style="display:none;">
                            {{csrf_field()}}
                        </form>
                    </li>
                    <!-- Tasks Menu -->
                    <!-- User Account Menu -->
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <div class="panel panel-body" style="padding: 10px;">
                <ul class="sidebar-menu " style="color: black;">
                    <li class="header " style="margin-bottom: 20px;color: white;background-color: #dd4b39">PROFILE</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="active"><i class="fa fa-user "></i><span>{{Auth::guard('customer')->user()->name}}</span></li>
                    <li class="active"><i class="fa fa-envelope "></i> <span>{{Auth::guard('customer')->user()->email}}</span></li>
                    <li class="active"><i class="fa fa-link text-dark"></i> <span>{{Auth::guard('customer')->user()->location}}</span></li>
                    <li class="active"><i class="fa fa-phone text-dark"></i> <span>{{Auth::guard('customer')->user()->phone}}</span></li>
                </ul>
            </div>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('flash-message')
        @yield('content')
        <section class="content-header">
            <h5>CUSTOMER DETAILS</h5>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Requests Made:</h5>
                </div>
                <div class="panel panel-body" style="max-height: 200px;overflow: auto">
                    <table class="table" style="max-height:30px;" >
                        <thead>
                        <tr>
                            <th scope="col">Product Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Total Payable Price</th>
                            <th scope="col">Reason for Decline</th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->title}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->quantity}}</td>
                                <td>{{$data->price}}</td>
                                <td><img src="{{asset('storage/'.$data->image) }}" style="width: 70px;height: 60px"></td>
                                <td class="badge badge-pill badge-primary">{{$data->status}}</td>
                                @if($data->status == 'Declined')
                                <td class="badge badge-pill badge-primary"><span>{{$data->status}}</span></td>
                                    <td>{{$data->reason}}</td>
                                    @elseif($data->status == 'Approved')
                                    <td> KSH {{($data->days)*($data->price)*($data->quantity)}}</td>
                                    @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Your Page Content Here -->
            <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->

        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="#">HMMS</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src={{asset('js/app.js')}}></script>
<!-- jQuery 2.2.3 -->
<script src={{asset('plugins/jQuery/jquery-2.2.3.min.js')}}></script>
<!-- Bootstrap 3.3.6 -->
<script src={{asset('bootstrap/js/bootstrap.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('dist/js/app.min.js')}}></script>
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
