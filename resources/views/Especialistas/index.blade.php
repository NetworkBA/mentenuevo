@extends('layouts/master-admin')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('header')

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-layout bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Listado de especialistas</h4>
                        <span>Listado de especialistas que se encuentran registrados en el sistema</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
        <h5>Especialistas</h5>
        <span>Especialistas registrados en el sistema, podrá realizar operaciones como ver detalles, editar o borrar algún registro.</span>
        <div class="card-header-right"><i
                class="icofont icofont-spinner-alt-5"></i></div>
    </div>
    <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="especialistas"
                   class="table table-striped table-bordered nowrap">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo Electrónico</th>
                    <th>Nacionalidad</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre + Apellido</td>
                        <td>8341234567</td>
                        <td>especialista@mail.com</td>
                        <td>Mexicana</td>
                        <td>
                            <div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
                                <button title="Ver" type="button" class="btn btn-success btn-md waves-effect waves-light"><i class="icofont icofont-eye-alt"></i></button>
                                <button title="Editar" type="button" class="btn btn-warning btn-md waves-effect waves-light"><i class="icofont icofont-pencil-alt-2"></i></button>
                                <button title="Eliminar" type="button" class="btn btn-danger btn-md waves-effect waves-light"><i class="icofont icofont-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo Electrónico</th>
                    <th>Nacionalidad</th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/admin/assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{asset('/admin/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('/admin/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('/admin/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script>
        $('#especialistas').DataTable();

    </script>
@endsection

