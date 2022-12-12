<!-- Modal -->
    
<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal">Eliminacion de usuarios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{$route}}" method ="post">
            @csrf
            @method('post')

            <div >
                <div >
                    <div>
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" required value="{{$user->name}}">
                    </div>
                    <div >
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" requeired value="{{$user->email}}">
                    </div>
                    <div>
                        <label for="id">Cedula</label>
                        <input type="text" class="form-control" name="cedula" required maxlength="10" value="{{$user->cedula}}">
                    </div>
                        <div>
                        <label for="password">Contraseña</label>
                        <input type="text" class="form-control" name="password" requeired maxlength="10" value="{{$user->password}}">
                    </div>
                    </div><br><br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-primary btn-sm" value="Guardar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

