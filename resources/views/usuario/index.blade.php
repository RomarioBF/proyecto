<!DOCTYPE HTML>
<html lang= "es">
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title> Usuarios </title>

	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container"> 
	<h4> Lista de usuarios</h4>
	<div class="row">
		<div class="col-xl-12">
			<form action="{{route('usuario.index')}}" method="get">
			<div class="form-row">
				<div class="col-sm-4 p-1">
					<input type="text" class="form-control p-1 b-2" name="texto" value="{{$texto}}">   
					<div class="col-auto p-2">
						<input type="submit" class="btn btn-secondary btn-sm" value="Buscar">
					</div>
	   				<div class="col-auto p-3">
						<button type="button" class="btn btn-primary btn-sm" onclick="createModal()">
							Nuevo
						</button>
  						{{-- <a href="{{route('usuario.create')}}" class="btn btn-danger ">Nuevo</a> --}}
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
						<td>
							<button type="button" class="btn btn-warning btn-sm" onclick="editModal({{$users->id}})">
								Editar
							</button>
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
                    
					   	{{-------- modal --------}}
					   	<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    						<div class="modal-dialog modal-dialog-centered" id="modalData">
								{{-- Aqui llega la informacion del ajax --}}
							</div>
						</div>
</body>


<script type="text/javascript">
    function editModal(id) {
		$.ajax({
            url: 'usuario/edit/'+id,
            type: "GET",
            data: '',
            success: function (data) {
				console.log(data);
				$('#modal').modal('show');
				$("#modalData").html(data);
            }
        });
	}

	function createModal() {
		$.ajax({
            url: 'usuario/create',
            type: "GET",
            data: '',
            success: function (data) {
				$('#modal').modal('show');
				$("#modalData").html(data);
            }
        });
	}
</script>

</html>


