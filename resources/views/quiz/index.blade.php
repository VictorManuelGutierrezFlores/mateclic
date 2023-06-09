@extends('layouts.app')

@section('template_title')
    Quiz
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Quiz') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('quizzes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Nuevo') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Pregunta</th>
										<th>Respuesta</th>
										<th>Grado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quizzes as $quiz)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $quiz->pregunta }}</td>
											<td>{{ $quiz->respuesta }}</td>
											<td>{{ $quiz->grado }}</td>

                                            <td>
                                                <form action="{{ route('quizzes.destroy',$quiz->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('quizzes.show',$quiz->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('quizzes.edit',$quiz->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $quizzes->links() !!}
            </div>
        </div>
    </div>
@endsection
