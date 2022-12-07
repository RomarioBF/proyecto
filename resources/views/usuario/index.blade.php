<!DOCTYPE HTML>
<html lang= "es">
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title> Usuarios </title>

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h4> Lista de usuarios</h4>
	<div class="row">
		<div class="col-xl-12">
			<form action="{{route('usuario.index')}}" method="get">
			<div class="form-row">
				<div class="col-sm-4">
					<input type="text class="form-control" name="texto" value="{{$texto}}">   
		                 <div class="col-auto">
			<input type="submit" class="btn btn-primary" value="Buscar">
       </div>
	   <div class="col-auto">
  			<a href="{{route('usuario.create')}}" class="btn btn-danger btn-sm">Nuevo</a>
			                  </div>
			                  </div>
			                   </div>
			                    </div>
                                </form>
                               </div>
		<div class="col-xl-12">
			<div class="tabe-responsive">
				<table class="table table-striped">
				<thead>
					
				<tr>
					<th>Opciones</th>
					<th>ID</th>
					<th>CEDULA</th>
					<th>NOMBRE</th>
					<th>EMAIL</th>
					<th>CONTRASEÑA</th>
                </tr>
                 </thead>
				 <tbody>
					@foreach ($user as $users)
					<tr>
					    <td><a href="{{route('usuario.edit',$users->id)}}"class="btn btn-warning btn-sm">Editar</a> 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$users->id}}">
                        Eliminar
                        </button>
					    </td>
						<td>{{$users->id}}</td>
						<td>{{$users->cedula}}</td>
						<td>{{$users->name}}</td>
						<td>{{$users->email}}</td>
						<td>{{$users->password}}</td>
                    </tr>
					 @include('usuario.delete')
                     @endforeach 
           
					</table>
                                   </div>
                                  </div>
                               </div>
                           </div>
                       </div>
                    
					
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>
