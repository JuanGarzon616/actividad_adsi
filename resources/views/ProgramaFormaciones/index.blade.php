<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <a class="btn btn-primary" href="{{ route('programaformaciones.create') }}">Nuevo Programa</a>
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @if(session('status1'))
            <div class="alert alert-success">{{ session('status1') }}</div>
        @endif
        @if(session('status2'))
            <div class="alert alert-success">{{ session('status2') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>N°</th>
                <th>Programa de Formacion</th>
                <th>Siglas</th>
                <th>Codigo</th>
                <th>Creacion</th>
                <th>Modificacion</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($programas as $programa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $programa->nombre }}</td>
                    <td>{{ $programa->sigla }}</td>
                    <td>{{ $programa->codigo }}</td>
                    <td>{{ $programa->created_at }}</td>
                    <td>{{ $programa->updated_at }}</td>
                    <td>
                        <a href="{{ route('programaformaciones.edit',$programa->id) }}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
