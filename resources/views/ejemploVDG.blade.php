@extends('layouts/master-admin')
@section('css')
    {{-- Seccion para poner css --}}
@endsection

@section('header')

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-layout bg-c-blue"></i> {{-- <- Icono del header --}}
                    <div class="d-inline">
                        <h4>Titulo</h4>
                        <span>Descripción</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection



@section('contenido')
    <div class="card">
        <div class="card-body">
            <p class="card-text">Content</p>
        </div>
    </div>
@endsection