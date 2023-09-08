@extends('layouts.app')
@section('titulo')
Origen
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-check fa-lg"></i>
                            <strong>Crear Origen</strong>
                            <div class="card-header-actions">

                            </div>
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'origenes.store']) !!}

                            @include('taxonomia.origenes.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
