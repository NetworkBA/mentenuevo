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
                        <h4>Registro de especialistas</h4>
                        <span>Formulario para registrar a un especialista en el sistema</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('contenido')
    <div class="card">
        <div class="card-header">
            <h5>Registro de un nuevo especialista</h5>
            <span>Complete los campos solicitados</span>
            <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
        </div>
        
        <div class="card-block">
            <h4 class="sub-title">Información Personal</h4>
            <form id="main" method="post" action="{{ route('especialista.store') }}"   >

                <div class="form-group row">
                    <div class="col">
                        <div class="form-group col-sm-12">
                            <label class="">Nombre</label>
                            <input type="text" class="form-control form-control-round" name="name" placeholder="Ingrese el nombre del especialista" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Teléfono</label>
                            <input type="text"  minlength="10" maxlength="10" class="form-control form-control-round" name="telefono" placeholder="Ingrese el teléfono del especialista" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Sexo</label>
                            <select name="sexo" class="form-control form-control-round" id="" required>
                                <option selected disabled>Seleccione una Opción</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Especialidad</label>
                            <input type="text" class="form-control form-control-round" name="especialidad" placeholder="Ingrese la especialidad del especialista">
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="form-group col-sm-12">
                            <label class="">Apellido</label>
                            <input type="text" class="form-control form-control-round" name="apellido" placeholder="Ingrese el apellido del especialista" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Fecha de Nacimiento</label>
                            <input type="date" class="form-control form-control-round" name="fecha_nacimiento" placeholder="Ingrese la fecha de nacimiento del especialista" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Nacionalidad</label>
                            <input type="text" class="form-control form-control-round" name="nacionalidad" placeholder="Ingrese la nacionalidad del especialista" required>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <h4 class="sub-title">Cuenta</h4>
                        <div class="form-group col-sm-12">
                            <label class="">Correo Electrónico</label>
                            <input type="email" class="form-control form-control-round" name="email" placeholder="Ingrese el correo electrónico del especialista" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="">Contraseña</label>
                            <input type="password" class="form-control form-control-round" name="password" placeholder="Cree una contraseña para el especialista" required>
                        </div>
                    </div>
                    
                </div>
                
                
                <div class="form-group row float-right">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary m-b-0">Crear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    
@endsection