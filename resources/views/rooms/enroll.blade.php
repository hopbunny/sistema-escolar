@extends('app')

@section('title', 'Matricular Aluno')

@section('content')
    <section class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <article class="container">
            <h1 class="text-center mb-5">Matricular Aluno</h1>
            <form enctype="multipart/form-data" class="mx-auto" action="{{ route('studentroom.store') }}" method="POST" style="max-width: 400px;">
                @csrf
                <select class="form-select mb-4" name="room_id" aria-label="Default select example">
                    <option selected>ESCOLHA A TURMA</option>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                    @endforeach
                </select>
                @foreach($students as $student)
                    <div class="input-group mb-4">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="student_id[]" value="{{ $student->id }}" aria-label="Radio button for following text input">
                        </div>
                            <input type="text" class="form-control" value="{{ $student->name }}" disabled aria-label="Text input with radio button">
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary d-block mx-auto px-4 py-2">CRIAR</button>
            </form>
        </article>
    </section>
@stop