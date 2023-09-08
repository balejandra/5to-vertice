@extends('layouts.app')

@section('titulo')
    Tipos de Desarrollo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-check fa-lg"></i>
                            <strong>Consultar Tipo de Desarrollo</strong>
                            <div class="card-header-actions">
                                <!-- Agregar acciones si es necesario -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="my-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 p-0 border rounded">
                                            @include('taxonomia.tipo_desarrollos.show_fields')
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
