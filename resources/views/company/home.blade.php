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
    <link rel="stylesheet" href={{asset('dist/css/skins/skin-red.min.css')}}>
    <link rel="stylesheet" href={{asset('css/app.css')}}>

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
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href={{url('/welcome')}} class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>HH</b>MS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>HHMS</b></span>
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
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src={{asset('dist/img/user2-160x160.jpg')}} class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> </small>
                                            </h4>
                                            <!-- The message -->
                                            <p></p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
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
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src={{asset('dist/img/avatar04.png')}} class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->

                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src={{asset('dist/img/avatar04.png')}} class="img-circle" alt="User Image">

                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">

                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="{{url('company/logout')}}"
                        onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{url('company/logout')}}" method="POST" style="display:none;">
                            {{csrf_field()}}
                        </form>
                    </li>
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
                    <img src={{asset('dist/img/avatar04.png')}} class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::guard('company')->user()->companyname}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <!--<li class="active"><a href="#"><i class="fa fa-folder"></i> <span></span></a></li>
                <li><a href="#"><i class="fa fa-comment"></i> <span></span></a></li>-->
               <!-- <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span></span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>-->
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


        </section>

        <!-- Main content -->
        <section class="content">
            @include('flash-message')
                @yield('content')

            <!-- Your Page Content Here -->
                <div class="row">

                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-teal">
                            <div class="inner">
                                <h3>{{$hires}}</h3>
                                <p>Hired Machinery</p>
                            </div>
                            <a href="{{url('/hiredmachine')}}" class="small-box-footer">view report <i class=""></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-orange">
                            <div class="inner">
                                <h3>{{$count}}</h3>

                                <p>Number of Items</p>
                            </div>

                            <a href="{{url('/chart')}}" class="small-box-footer">Report on Pending and Approved items<i class=""></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- ./col -->

                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="panel-info">
                        <div class="panel-heading">
                            <strong>CUSTOMER REQUESTS</strong>
                        </div>
                        <div class="panel panel-body" style="max-height: 200px; overflow: auto;">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Item(Model)</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($requests as $request)
                                    @if(($request->status != 'Approved') && ($request->status != 'Declined'))
                                        <tr>
                                            <td>{{@$request->customer->name }}</td>
                                            <td>{{@$request->customer->email }}</td>
                                            <td>{{@$request->customer->phone }}</td>
                                            <td>{{@$request->customer->location }}</td>
                                            <td>{{@$request->title }}</td>
                                            <td>{{@$request->price }}</td>
                                            <td>{{@$request->description }}</td>
                                            <td><img src="{{asset('storage/'.$request->image) }}" style="width: 50px;height: 40px"></td>
                                            <td><button type="button" class="btn btn-success btn-sm "   data-toggle="modal" data-target="#approve" data-id="{{$request->id}}"
                                                        data-item_id="{{$request->item_id}}
                                                                data-companyname="{{$request->companyname}}>
                                                    Approve
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm "    data-toggle="modal" data-target="#decline" data-id="{{$request->id}}" >
                                                    Decline
                                                </button></td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <button type="button" class="btn btn-success pull-right" style="margin-right: 20px" data-toggle="modal" data-target="#post">
                            Post
                        </button>
                        <button type="button" class="btn btn-primary pull-right" style="margin-right: 20px" data-toggle="modal" data-target="#item">
                            Add Item
                        </button>
                    </div>
                    <div class="panel-warning">
                        <div class="panel-heading">
                         <strong>ITEMS</strong>
                        </div>
                        <div class="panel panel-body" style="max-height: 250px; overflow: auto;">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->model}}</td>
                                        <td><img src="{{asset('storage/'.$item->image) }}" style="width: 70px;height: 60px"></td>
                                        <td><button type="button" class="btn btn-info btn-sm "    data-toggle="modal" data-target="#edititem"
                                                    data-id="{{$item->id}}"
                                                    data-title="{{$item->title}}"
                                                    data-model="{{$item->model}}"
                                                    data-image="{{$item->image}}">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm "    data-toggle="modal" data-target="#deleteitem"  data-id="{{$item->id}}">
                                            Delete

                                            </button></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel-success">
                        <div class="panel-heading">
                            <strong>POSTS</strong>

                        </div>
                        <div class="panel panel-body" style="max-height: 200px; overflow: auto;">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->item->title or ''}}</td>
                                        <td>{{$post->price}}</td>
                                        <td>{{$post->item->model or ''}}</td>
                                        <td>{{$post->description }}</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-flat"   data-toggle="modal" data-target="#editpost"
                                                    data-id="{{$post->id}}"
                                                    data-description="{{$post->description}}"
                                                    data-price="{{$post->price}}">
                                                Edit
                                            </button>
                                        <button type="button" class="btn btn-danger btn-sm btn-flat"    data-toggle="modal" data-target="#deletepost" data-id="{{$post->id}}" >
                                               Delete
                                            </button></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <!-- Modal item -->
                <div class="modal fade" id="item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/item') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="title" class="col-md-4 control-label">Title</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>

                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                        <label for="model" class="col-md-4 control-label">Model</label>

                                        <div class="col-md-6">
                                            <input id="model" type="text" class="form-control" name="model" value="{{ old('model') }}" autofocus>

                                            @if ($errors->has('model'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="images" class="col-md-4 control-label">Image</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control" name="image">

                                            @if ($errors->has('image'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal item -->
                <div class="modal fade" id="edititem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/itemedit') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="title" class="col-md-4 control-label">Title</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>

                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                                        <label for="model" class="col-md-4 control-label">Model</label>

                                        <div class="col-md-6">
                                            <input id="model" type="text" class="form-control" name="model" value="{{ old('model') }}" autofocus>

                                            @if ($errors->has('model'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="images" class="col-md-4 control-label">Image</label>

                                        <div class="col-md-6">
                                            <input id="image" type="file" class="form-control" name="image">

                                            @if ($errors->has('image'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">EDIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal item -->
                <div class="modal fade modal-info" id="deleteitem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <h3>DO YOU WANT TO DELETE THIS POST???</h3>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/itemdelete') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">DELETE</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal post -->
                <div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/post') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="item" class="col-md-4 control-label">Item(Model)</label>

                                        <div class="col-md-6">
                                            <select id="item" type="text" class="form-control" name="item">
                                                @foreach($items as $item)
                                                    <option value={{$item->id}}>{{$item->title."(".$item->model.")"}}</option>
                                                 @endforeach
                                            </select>

                                            @if ($errors->has('item'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('item') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="description" class="col-md-4 control-label">Description</label>

                                        <div class="col-md-6">
                                            <textarea id="description"  class="form-control" name="description" value="{{ old('description') }}"></textarea>

                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">

                                        <label for="price" class="col-md-4 control-label">Price per day (Ksh)</label>

                                        <div class="col-md-6">
                                            <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" autofocus>
                                            @if ($errors->has('price'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Post </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- EDIT Modal post -->
                <div class="modal fade" id="editpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/editpost') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="item" class="col-md-4 control-label">Item</label>

                                        <div class="col-md-6">
                                            <select id="" type="text" class="form-control" name="title">
                                                @foreach($items as $item)
                                                    <option value={{$item->id}}>{{$item->title}}</option>
                                                @endforeach
                                            </select>

                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="description" class="col-md-4 control-label">Description</label>

                                        <div class="col-md-6">
                                            <textarea id="description" class="form-control" name="description" value="{{ old('description') }}"></textarea>

                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">

                                        <label for="price" class="col-md-4 control-label">Price per day (Ksh)</label>

                                        <div class="col-md-6">
                                            <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" autofocus>
                                            @if ($errors->has('price'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Post </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- delete post -->
                <div class="modal fade modal-info" id="deletepost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>DO YOU WANT TO DELETE THIS POST???</h3>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/postdelete') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">DELETE</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!--approve modal-->
                <div class="modal fade modal-success" id="approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>DO YOU WANT TO APPROVE THIS CUSTOMER REQUEST???</h3>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/approve') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus>

                                        </div>
                                        <div class="col-md-6">
                                            <input id="companyname" type="hidden" class="form-control" name="companyname" value="{{ old('companyname') }}" autofocus>

                                        </div>
                                        <div class="col-md-6">
                                            <input id="item_id" type="hidden" class="form-control" name="item_id" value="{{ old('item_id') }}" autofocus>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">APPROVE</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!--decline modal-->
                <div class="modal fade modal-default" id="decline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: red;color: white;">
                                <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4>DO YOU WANT TO DECLINE THIS CUSTOMER REQUEST???</h4>
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/company/decline') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus>

                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="companyname" type="hidden" class="form-control" name="companyname" value="{{ old('companyname') }}" autofocus>

                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                                        <div class="col-md-12">
                                            <label for="reason" class="col-md-6 control-label text-black"><h4>Give a Reason for this Decline:</h4></label>
                                            <textarea id="reason" type="text" class="form-control" name="reason" value="{{ old('reason') }}" autofocus></textarea>
                                            @if ($errors->has('reason'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">DECLINE</button>
                                    </div>
                                </form>

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
        <div class="pull-right hidden-xs">
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="#">HHMS</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading"></h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading"></h4>

                                <p></p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading"></h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:">
                            <h4 class="control-sidebar-subheading">

                                <span class="pull-right-container">
                  <span class="label label-danger pull-right"></span>
                </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">S</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->

            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<script src={{asset('js/app.js')}}></script>
<!-- jQuery 2.2.3 -->
<script src={{asset('plugins/jQuery/jquery-2.2.3.min.js')}}></script>
<!-- Bootstrap 3.3.6 -->
<script src={{asset('bootstrap/js/bootstrap.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('dist/js/app.min.js')}}></script>
<script>
    $('#edititem').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var title = button.data('title')
        var model = button.data('model')
        var image = button.data('image')
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #title').val(title)
        modal.find('.modal-body #model').val(model)
        modal.find('.modal-body #description').val(description)
        modal.find('.modal-body #image').val(image)
        modal.find('.modal-body #id').val(id)
    })
</script>
<script>
    $('#editpost').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var title = button.data('title')
        var price = button.data('price')
        var model = button.data('model')
        var description = button.data('description')
        var image = button.data('image')
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #title').val(title)
        modal.find('.modal-body #price').val(price)
        modal.find('.modal-body #model').val(model)
        modal.find('.modal-body #description').val(description)
        modal.find('.modal-body #image').val(image)
        modal.find('.modal-body #id').val(id)
    })
</script>
<script>
    $('#deleteitem').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #id').val(id)
    })
</script>
<script>
    $('#deletepost').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body #id').val(id)
    })
</script>
<script>
    $('#approve').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var companyname = button.data('companyname')
        var item_id = button.data('item_id')
        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #companyname').val(companyname)
        modal.find('.modal-body #item_id').val(item_id)
    })
</script>
<script>
    $('#decline').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var companyname = button.data('companyname')
        var item_id = button.data('item_id')
        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #companyname').val(companyname)
        modal.find('.modal-body #item_id').val(item_id)
    })
</script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
