@extends('layouts.app')

@section('titulo')
    Cadencias Investigativas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-check fa-lg"></i>
                            <strong>Cadencias Investigativas</strong>
                            <div class="card-header-actions">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('cadenciaInvestigativas.create') }}">Nuevo</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('taxonomia.cadencia_investigativas.table')
                            <div class="pull-right mr-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
