<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$users->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('usuario.destroy',$users->id)}}" method ="post">
				@csrf
                @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminacion de usuarios</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseas eliminar el usuario {{$users->name." ".$users->cedula}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
   </form>
  </div>
</div>