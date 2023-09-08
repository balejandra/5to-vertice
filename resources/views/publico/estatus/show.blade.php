@extends('layouts.app')
@section("titulo")
    Estatus
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-clipboard-check fa-lg"></i>
                            <strong>Consultar Estatus</strong>
                            <div class="card-header-actions">

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="my-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6 p-0 border rounded">
                                            @include('publico.estatus.show_fields')
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
