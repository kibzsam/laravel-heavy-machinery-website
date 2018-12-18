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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset('dist/css/AdminLTE.min.css')}}>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href={{asset('dist/css/skins/skin-blue.min.css')}}>
    <link rel="stylesheet" href={{asset('css/app.css')}}>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body  style="background-color: white">

<div class="container" id="product-section" style="max-height: 600px; overflow: auto;">
    @include('flash-message')
    @yield('content')
    <div class="row">
        <a href="{{url('/welcome')}}"><h2 class="text-center text-dark">PRODUCTS</h2></a>
    </div>
    @foreach($posts->chunk($count)  as $chunk)
        <div class="row">
            @foreach($chunk as $post)

                <div class="panel panel-body mb-3 col-md-4 " style="background-color: white;border-color: grey">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/hire') }}">
                        {{ csrf_field() }}
                        <div class="card card " >
                            <img class="card-img-top" src="{{asset("storage/".$post->item->image)}}" alt="" style="width: auto;height: auto">
                            <h4 id="title"><strong>{{$post->item->title}}</strong></h4>
                            <div class="card-body" style=" padding: 5px">
                                <h5 id="description" class="card-title text-dark"><strong>Desicription :</strong></h5><p class="card-text text-dark">{{$post->item->description}}</p>
                                <h6 id="name" class="text-dark text-right"><small>{{$post->company->companyname}}</small></h6>
                                <h4 id="price" class="text-right text-dark"><strong>{{'KSH '.$post->price}}</strong></h4>
                                @if(Auth::guest())
                                    <a href="{{url('hire')}}" class="btn btn-danger">Hire Machinery</a>
                                @else
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hire"
                                            data-description="{{$post->item->description}}"
                                            data-title="{{$post->item->title}}"
                                            data-companyname="{{$post->company->companyname}}"
                                            data-itemid="{{$post->item->id}}"
                                            data-price="{{$post->price}}"
                                            data-image="{{$post->item->image}}"
                                            data-id="{{$post->item->id}}">
                                        Hire Machinery
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
@endforeach
<!-- Modal to verify product-->
    <!-- Modal -->
    <div class="modal fade" id="hire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>DO YOU WANT TO HIRE THIS MACHINERY??</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/savehiring') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="item_id" type="hidden" class="form-control" name="item_id" readonly>

                                @if ($errors->has('item_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="image" type="hidden" class="form-control" name="image" readonly>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('comapnyname') ? ' has-error' : '' }}">
                            <label for="companyname" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="companyname" type="text" class="form-control" name="companyname" value="{{ old('email') }}" autofocus readonly>

                                @if ($errors->has('companyname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('companyname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" readonly>

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
                                <input id="description" type="text" class="form-control" name="description" readonly>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" readonly>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">VERIFY HIRING</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div><!-- end container -->
<script src={{asset('js/app.js')}}></script>
<!-- jQuery 2.2.3 -->
<script src={{asset('plugins/jQuery/jquery-2.2.3.min.js')}}></script>
<!-- Bootstrap 3.3.6 -->
<script src={{asset('bootstrap/js/bootstrap.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('dist/js/app.min.js')}}></script>
</body>
</html>