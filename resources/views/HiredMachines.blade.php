@extends('hview')
@section('content')
    <div class="container">
        <div class="panel-body">
            {!! $dataTable->table() !!}
        </div>
    </div>
@endsection
@push('scripts')
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>-->
    <link rel="stylesheet" href="{{asset('/css/buttonsdataTables.min.css')}}">
    <script src="{{asset('/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/vendor/datatables/buttons.server-side.js')}}"></script>
    {!! $dataTable->scripts() !!}
@endpush