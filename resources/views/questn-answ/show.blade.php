@extends('layouts.app')

@section('template_title')
    {{ $questnAnsw->name ?? "{{ __('Show') Questn Answ" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Questn Answ</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('questn-answs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Questions:</strong>
                            {{ $questnAnsw->questions }}
                        </div>
                        <div class="form-group">
                            <strong>Answer:</strong>
                            {{ $questnAnsw->answer }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
