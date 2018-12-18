<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CLMS</title>

    <!-- Styles -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet"/>
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/datatatable.css')}}"/>


    <!-- Scripts -->
    <script src="{{asset('js/chart.js')}}"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>WEEKLY REPORT ON STATUS OF HIRED MACHINERY   </h4>
            </div>
            <div class="panel-body">
                <div  class="" style="width:75%;">
                    {!! $chartjs->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
