@extends('layout.main'), ['activePage' => 'years', 'titlePage' => 'Nuevo año lectivo'])
@section('content')
<div class= "content">
    <div class= "container-fluid">
        <div class= "row">
            <div class= "col-ms-12">
                from action"#" method="post" class=form-horizontal">
                @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title">Años lectivoh4>
                            <p class= "card-category">Ingresar nuevo año lectivo<\p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <div class="card-body">
           <div class="row">
             <label for="name" class="col-s-2 col-form-label">Año></label>
               <div class="col-sm-7">
      <input type="text" class="form-control year="año" placeholder="Ingrese el nuevo año lectivo" autofocus>
               </div>
            </div>
         </div>
</div>

@endsection()