@extends('layouts.app')

@section('template_title')
    {{ $quiz->name ?? "{{ __('Mostrar') Quiz" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Quiz</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('quizzes.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            {{ $quiz->pregunta }}
                        </div>
                        <div class="form-group">
                            <strong>Respuesta:</strong>
                            {{ $quiz->respuesta }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $quiz->grado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
