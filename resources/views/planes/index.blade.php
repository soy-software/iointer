@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('planes'))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Planes
                    <a href="{{ route('nuevoPlan') }}" class="btn btn-info float-right" data-toggle="tooltip" data-placement="top" title="Nuevo plan">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        {!! $dataTable->table()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('linksCabeza')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/datatables.min.css') }}"/>
    <script type="text/javascript" src="{{ asset('vendor/DataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    
@endpush
@prepend('linksPie')
    <script>
    $('#menuPlanes').addClass('active');  
    </script>
    {!! $dataTable->scripts() !!}
@endprepend

@endsection
