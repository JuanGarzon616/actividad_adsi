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
<div class="container mt5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('jornadas.update',$jornada->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nombre Jornada</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $jornada->nombre }}">
                        </div>
                        <button type="submit" class="btn btn-primary" >Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
