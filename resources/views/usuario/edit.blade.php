<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Usuarios </title>

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4> Editar Usuario</h4>
        <div class="row">
            <div class="col-cl-12">
                <form action="{{route('usuario.update',$user->id)}}" method ="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" required maxlength="50" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" requeired maxlength="20" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="id">Cedula</label>
                        <input type="text" class="form-control" name="cedula" required maxlength="10" value="{{$user->cedula}}">
                    </div>
                        <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="text" class="form-control" name="password" requeired maxlength="10" value="{{$user->password}}">
                    </div>
                    </div><br><br><br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-danger" value="Cancelar">
                        <a href="{{ route('usuario.index') }}">Ir al listado</a>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>

