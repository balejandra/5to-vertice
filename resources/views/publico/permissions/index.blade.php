@extends('layouts.app')
@section('titulo')
    Permisos
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-address-card"></i>
                            <strong>Permisos</strong>
                            @can('crear-permiso')
                                <div class="card-header-actions">
                                    <a class="btn btn-primary btn-sm" href="{{ route('permissions.create') }}">Nuevo</a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('permissionDelete.index') }}">Permisos
                                        Eliminados</a>
                                </div>
                            @endcan
                        </div>

                        <div class="card-body">
                            <style>
                                table.dataTable {
                                    margin: 0 auto;
                                }
                            </style>
                            <table class="table table-bordered table-striped table-grow" id="generic-table"
                                style="width:50%;height:auto;">
                                <thead>
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="35%">Nombre</th>
                                        <th width="30%">Creado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($permissions as $permission)
                                        <tr>
                                            <td> {{ $permission->id }} </td>
                                            <td>{{ $permission->name }} </td>
                                            <td>
                                                @if ($permission->created_at)
                                                    {{ date_format($permission->created_at, 'd-m-Y') }}
                                                @endif
                                            </td>
                                            <td>
                                                @can('editar-menu')
                                                    <a class="btn btn-sm btn-info"
                                                        href="{{ route('permissions.edit', [$permission->id]) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('eliminar-menu')
                                                    <div class='btn-group'>
                                                        {{ html()->form('DELETE')->route('permissions.destroy', [$permission->id])->class('delete-form')->open() }}
                                                        <button type="submit" class="btn btn-sm btn-danger" id="eliminar"
                                                            data-mensaje="el permiso {{ $permission->name }}">
                                                            <i class="fa fa-trash"></i></button>
                                                        {{ html()->form()->close() }}
                                                    </div>
                                                @endcan

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            No existen registros para mostrar
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
