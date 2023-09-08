@extends('layouts.app')

@section('titulo')
    Tipo de Investigaciones
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
                            <strong>Tipo de Investigaciones</strong>
                            @can('crear-tipoinvestigacion')
                                <div class="card-header-actions">
                                    <a class="btn btn-primary btn-sm" href="{{ route('tipoInvestigaciones.create') }}">Nuevo</a>
                                </div>
                            @endcan
                        </div>
                        <div class="card-body">
                            @include('taxonomia.tipoInvestigaciones.table')
                            <div class="pull-right mr-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
