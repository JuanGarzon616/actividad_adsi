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
        @if(session('status2'))
            <div class="alert alert-success">{{ session('status2') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>N°</th>
                <th>N° de Caracterizacion</th>
                <th>Estado</th>
                <th>Jornada</th>
                <th>Programa de formacion</th>
                <th>Creacion</th>
                <th>Modificacion</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fichas as $ficha)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ficha->num_caracterizacion }}</td>
                    @if($ficha->estado==1)
                        <td>Activo</td>
                    @else
                        <td>Desactivado</td>
                    @endif
                    <td>{{ $ficha->jornada->nombre }}</td>
                    <td>{{ $ficha->programaFormacion->nombre }}</td>
                    <td>{{ $ficha->created_at }}</td>
                    <td>{{ $ficha->updated_at }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Editar</a>|
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
