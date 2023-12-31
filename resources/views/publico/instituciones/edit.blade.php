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
                            <strong>Editar Institución</strong>
                            <div class="card-header-actions">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 border rounded p-3">
                                    {{ html()->modelForm($institucion, 'PUT', route('instituciones.update', [$institucion->id]))->open() }}

                                    @include('publico.instituciones.fields')

                                    {{ html()->closeModelForm() }}
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
