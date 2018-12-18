<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HMHS</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset('style/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset('style/css/grayscale.min.css')}} rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" style="color: black" href="#page-top">HEAVY MACHINERY</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a href="{{url('/products')}}" style="color: black" class="btn btn-danger btn-flat btn-sm text-white">Products</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- BUTTON YA CUSTOMER NA COMPANY USISAHAU TAFADHALI -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="" style="color: white">HMMS</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5" style="color: white">Sign In /Sign Up With Us.</h2>
            <!-- BUTTON YA CUSTOMER NA COMPANY USISAHAU TAFADHALI -->
            <a class="btn btn-danger js-scroll-trigger" href={{url('customer/login')}}>Hire</a>
            <a class="btn btn-danger js-scroll-trigger" href={{url('company/login')}}>Advertise</a>
        </div>
    </div>
</header>

<!-- About Section -->

<!-- PRODUCTS Section -->
<section id="projects" class="projects-section bg-light">
    <div class="container">

        <!-- Featured Project Row -->

        <!-- Project One Row -->
        <div class="text-center" style="margin-bottom: 50px"><h4><strong>AN EFFICIENT PAY ON DELIVERY PLATFORM TO HIRE HEAVY MACHINERY</strong></h4></div>
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <a href="{{url('/products')}}" style="color: black" class="btn btn-danger">VIEW PRODUCTS</a>

        </div>

        <!-- Project Two Row -->
    </div>
</section>

<!-- Signup Section -->
<section id="signup" class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Contacts</h2>
                <h2 class="text-white mb-5">View Our Contacts Below</h2>


            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">4923 Nyeri, Kenya</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">wanguieckra@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">+254 702697921</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; HMHS 2018
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src={{asset('style/vendor/jquery/jquery.min.js')}}></script>
<script src={{asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<script src={{asset('style/vendor/jquery-easing/jquery.easing.min.js')}}></script>
<script src={{asset('style/js/grayscale.min.js')}}></script>

</body>

</html>
