<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Customer</title>
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Styles -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="background-color: white">
    <nav class="navbar navbar-default navbar-static-top" style="background-color: #dd4b39;color: white">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand " href="{{ url('/welcome') }}" style="color: white;">
                   HMMS
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="{{url('/cart')}}" class="dropdown-toggle">
                                <i class="fa fa-cart-arrow-down" style="size: 50px"></i>
                                <span class="label label-warning"></span>
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
                        <li><a href="{{ url('/customer/login') }}" style="color: white;">Login</a></li>
                        <li><a href="{{ url('/customer/register') }}" style="color: white;">Register</a></li>
                    @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: white;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{url('/customer/profile')}}">PROFILE</a>
                                </li>
                                <li>
                                    <a href="{{ url('/customer/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/customer/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <!-- Scripts -->
    <script src="{{asset('/js/app.js')}}"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
    <script>
        $('#hire').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var description = button.data('description')
            var title = button.data('title')
            var companyname = button.data('companyname')
            var itemid = button.data('itemid')
            var price = button.data('price')
            var image= button.data('image')
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #description').val(description)
            modal.find('.modal-body #companyname').val(companyname)
            modal.find('.modal-body #item_id').val(itemid)
            modal.find('.modal-body #title').val(title)
            modal.find('.modal-body #price').val(price)
            modal.find('.modal-body #image').val(image)
            modal.find('.modal-body #id').val(id)
        })
    </script>
    <script>
        $('#cart').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id)
        })
    </script>
<script>
    $(document).ready(function(){
        $('#days').keyup(function(){
            $('#total').text($('#days').val() * 1.5);
        });
    });
</script>
</body>
</html>
