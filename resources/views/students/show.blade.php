@extends('app')

@section('title')
Aluno - {{ $student->name }}
@stop

@section('content')
    <div class="container">
        <div class="d-flex justify-content-around mb-5">
            <h1 class="text-center">Nome: {{ $student->name }}</h1>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Turma</th>
                <th scope="col">Presenças</th>
                <th scope="col">Faltas</th>
              </tr>
            </thead>
            <tbody>
                @forelse($student->rooms as $room)
                    <tr>
                        <th scope="row">{{ $room->id }}</th>
                        <th scope="row">{{ $room->name }}</th>
                        <td scope="row">{{ $student->present }}</td>
                        <td scope="row">{{ $student->present }}</td>
                    </tr>
                @empty
                
                @endforelse
            </tbody>
          </table>
    </div>
@stop