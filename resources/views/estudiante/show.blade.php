@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Show Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $estudiante->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $estudiante->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $estudiante->celular }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
