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
        <a class="btn btn-primary" href="{{ route('jornadas.create') }}">Nueva Jornada</a>
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        @if(session('status1'))
            <div class="alert alert-success">{{ session('status1') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Jornada</th>
                    <th>Creacion</th>
                    <th>Modificacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($jornadas as $jornada)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jornada->nombre }}</td>
                    <td>{{ $jornada->created_at }}</td>
                    <td>{{ $jornada->updated_at }}</td>
                    <td>
                        <a href="{{ route('jornadas.edit',$jornada->id) }}" class="btn btn-sm btn-warning">Editar</a>|
                        <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
