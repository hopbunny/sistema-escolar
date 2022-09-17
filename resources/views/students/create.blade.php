@extends('app')

@section('title', 'Registro de Alunos')

@section('content')
    <section class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <article class="container">
            <h1 class="text-center mb-5">MATRICULAR ALUNO</h1>
            <form enctype="multipart/form-data" class="mx-auto" action="{{ route('student.store') }}" method="POST" style="max-width: 400px;">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInput" required>
                    <label for="floatingInput">NOME DO ALUNO</label>
                </div>
                <button type="submit" class="btn btn-primary d-block mx-auto px-4 py-2">MATRICULAR</button>
            </form>
        </article>
    </section>

@stop