
@extends('customer.layout.auth')
@section('content')
<div class="container" id="product-section" style="max-height: 600px; overflow: auto;">

    <div class="row">
        <a href="{{url('/welcome')}}"><h2 class="text-center text-danger">PRODUCTS</h2></a>
    </div>
    @include('flash-message')
    @yield('content')

        <div class="panel panel-body">
            <div class="">
                <form action="{{url('/search')}}" method="GET">
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <div class="input-group pull">
                                <input type="text" class="form-control" name="search" placeholder="Search" id="txtSearch"/>
                                <div class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @foreach($posts->chunk($count)  as $chunk)
        <div class="row">
            @foreach($chunk as $post)
                @if($post->statuspost == 'not-hired')
                <div class="panel panel-body mb-3 col-sm-4 " style="background-color: white;border-color: grey">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/hire') }}">
                    {{ csrf_field() }}
                    <div class="card card " >
                        <img class="card-img-top" src="{{asset("storage/".@$post->item->image)}}" alt="" style="width: auto;height: auto">
                        <h4 id="title"><strong>{{$post->item->title or ''}}</strong></h4>
                        <div class="card-body" style=" padding: 5px">
                            <h5 id="description" class="card-title text-dark"><strong>Desicription :</strong></h5><p class="card-text text-dark">{{$post->description}}</p>
                            <h6 id="name" class="text-dark text-right" style="color: #dd4b39;"><strong>{{$post->company->companyname}}</strong></h6>
                            <h6 id="name" class="text-dark text-right" style="color: darkslategrey;"><strong>{{$post->company->location}}</strong></h6>
                            <h4 id="price" class="text-right text-dark" style="color: #dd4b39;"><strong>{{'KSH '.$post->price}}</strong></h4>
                            @if(Auth::guest())
                            <a href="{{url('hire')}}" class="btn btn-bitbucket" style="background-color: #dd4b39;color:white ">Hire Machinery</a>
                                @else
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hire"
                                        data-description="{{$post->description}}"
                                        data-title="{{$post->item->title}}"
                                        data-companyname="{{$post->company->companyname}}"
                                        data-itemid="{{$post->item->id}}"
                                        data-price="{{$post->price}}"
                                        data-image="{{$post->item->image}}"
                                        data-id="{{$post->id}}">
                                   Hire Machinery
                                </button>
                            @endif
                        </div>
                    </div>
                    </form>
                </div>
                @endif
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
                                <input id="id" type="hidden" class="form-control" name="id" readonly>

                                @if ($errors->has('id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input id="item_id" type="hidden" class="form-control" name="itemid" readonly>

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
                            <label for="price" class="col-md-4 control-label">Price Per Day</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" readonly>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="quantity" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control" name="quantity">

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="days" class="col-md-4 control-label">Number Of Days To Hire</label>

                            <div class="col-md-6">
                                <input id="days" type="number" class="form-control" name="days" >

                                @if ($errors->has('days'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
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

@endsection
