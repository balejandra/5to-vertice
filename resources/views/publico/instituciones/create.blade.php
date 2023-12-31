@extends('layouts.app')
@section('titulo')
    Institución
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-building"></i>
                            <strong>Crear Institución</strong>
                            <div class="card-header-actions">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">

                                <div class="col-md-8 border rounded p-3">
                                    <form action="{{ route('instituciones.store') }}" method="post">
                                        @csrf
                                        @include('publico.instituciones.fields')

                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
