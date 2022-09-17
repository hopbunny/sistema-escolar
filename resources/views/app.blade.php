<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('room.index') }}" class="nav-link {{ url()->current() == route('room.index') ? 'active' : '' }}" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="{{ route('teacher.create') }}" class="nav-link {{ url()->current() == route('teacher.create') ? 'active' : '' }}">Cadastrar Professor</a></li>
        <li class="nav-item"><a href="{{ route('room.create') }}" class="nav-link {{ url()->current() == route('room.create') ? 'active' : '' }}">Cadastrar Turma</a></li>
        <li class="nav-item"><a href="{{ route('student.create') }}" class="nav-link {{ url()->current() == route('student.create') ? 'active' : '' }}">Cadastrar Aluno</a></li>
        <li class="nav-item"><a href="{{ route('studentroom.create') }}" class="nav-link {{ url()->current() == route('studentroom.create') ? 'active' : '' }}">Matricular Turma</a></li>
      </ul>
    </header>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>