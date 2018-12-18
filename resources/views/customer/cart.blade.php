@extends('customer.layout.auth')
@section('content')
    @include('flash-message')
    @yield('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Cart:</h5>
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
                        <th scope="col">Remove from cart</th>

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

                            <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cart" data-id="{{$data->id}}"><i class="fa fa-remove"></i></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade modal-info" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REMOVE ITEM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>DO YOU WANT TO REMOVE THIS ITEM???</h3>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/cartdelete') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control" name="id" value="{{ old('id') }}" autofocus>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Remove</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection