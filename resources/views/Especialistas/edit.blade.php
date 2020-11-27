@extends('layouts/master-admin')
@section('css')
    
@endsection

@section('header')

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-layout bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Editar información de especialistas</h4>
                        <span>Formulario para modificar la información de un especialista en el sistema</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            <h5>Editar información de especialista</h5>
            <span>Complete los campos que desea modificar</span>
            <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
        </div>
        
        <div class="card-block">
            <h4 class="sub-title">Información Personal</h4>
            <form id="main" method="post" action="/" novalidate>

                <div class="form-group row">
                    <div class="col">
                        <div class="form-group col-sm-12">
                            <label class="">Nombre</label>
                            <input type="text" class="form-control form-control-round" name="name" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Teléfono</label>
                            <input type="text" class="form-control form-control-round" name="telefono" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Sexo</label>
                            <select name="sexo" class="form-control form-control-round" id="">
                                <option selected disabled>Seleccione una Opción</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Especialidad</label>
                            <input type="text" class="form-control form-control-round" name="especialidad" value="">
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group col-sm-12">
                            <label class="">Apellido</label>
                            <input type="text" class="form-control form-control-round" name="apellido" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Fecha de Nacimiento</label>
                            <input type="date" class="form-control form-control-round" name="fecha_nacimiento" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Nacionalidad</label>
                            <input type="text" class="form-control form-control-round" name="nacionalidad" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <h4 class="sub-title">Cuenta</h4>
                        <div class="form-group col-sm-12">
                            <label class="">Correo Electrónico</label>
                            <input type="email" class="form-control form-control-round" name="email" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Contraseña</label>
                            <input type="password" class="form-control form-control-round" name="password" value="">
                        </div>
                    </div>
                    
                </div>
                
                
                <div class="form-group row float-right">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary m-b-0">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    
@endsection