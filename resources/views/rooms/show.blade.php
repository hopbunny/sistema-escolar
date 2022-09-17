@extends('app')

@section('title')
Turma - {{ $rooms->name }}
@stop

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between my-5 ">
            <h5 class="text-center">Turma: {{ $rooms->name }}</h5>
            <h5 class="text-center">Prof: {{ $rooms->teacher->name }}</h5>
            <h5 class="text-center">Matéria: {{ $rooms->teacher->classroom }}</h5>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">MATRICULA</th>
                <th scope="col">NOME</th>
                <th scope="col">AÇÕES</th>
                <th scope="col">Chamada</th>
              </tr>
            </thead>
            <form action="{{ route('calllist.store') }}" method="post">
                <input type="hidden" name="room" value="{{ $rooms->id }}">
                @csrf
                <tbody>
                    @forelse($rooms->students as $student)
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td><a href="{{ route('student.show', $student->id) }}">Visualizar</a></td>
                                <td>
                                <input type="hidden" name="present[{{ $student->id }}]">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="present[{{ $student->id }}][]">
                                </div>
                                    
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                        
                </tbody>
                <button type="submit">Chamada</button>
            </form>    
          </table>
    </div>
@stop