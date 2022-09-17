@extends('app')

@section('title', 'Cadastrar Professor')

@section('content')
    <section class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <article class="container">
            <h1 class="text-center mb-5">CADASTRAR PROFESSOR</h1>
            <form enctype="multipart/form-data" class="mx-auto" action="{{ route('teacher.store') }}" method="POST" style="max-width: 400px;">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInput" required>
                    <label for="floatingInput">INFORME SEU NOME</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="classroom" class="form-control" id="floatingInput" required>
                    <label for="floatingInput">INFORME SUA MATÉRIA</label>
                </div>
                <button type="submit" class="btn btn-primary d-block mx-auto px-4 py-2">CRIAR</button>
            </form>
        </article>
    </section>
@stop