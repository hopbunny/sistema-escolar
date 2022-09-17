@extends('app')

@section('title', 'Criar Turma')

@section('content')
    <section class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <article class="container">
            <h1 class="text-center mb-5">CRIAR TURMA</h1>
            <form enctype="multipart/form-data" class="mx-auto" action="{{ route('room.store') }}" method="POST" style="max-width: 400px;">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInput" required>
                    <label for="floatingInput">NOME DA TURMA</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="time" name="start" class="form-control" id="floatingInput" required>
                    <label for="floatingInput">INFORME O INICIO DA AULA</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="time" name="end" class="form-control" id="floatingInput" required>
                    <label for="floatingInput">INFORME O FINAL DA AULA</label>
                </div>
                <select class="form-select mb-4" name="teacher_id" aria-label="Default select example">
                    <option selected>ESCOLHA O PROFESSOR</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary d-block mx-auto px-4 py-2">CRIAR</button>
            </form>
        </article>
    </section>
@stop