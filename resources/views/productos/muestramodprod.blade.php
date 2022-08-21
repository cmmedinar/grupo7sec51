@extends('productos.modproducto')
@section('title','- Modificacion Producto')
@section('vista','Modifica - Productos')
@section('datosprod')
  
  <form action="{{ url('/grabamodprod',$productos[0]->id) }}" method="POST">
  @csrf
  @method('PUT')
  <br><div class="row">
  @foreach($productos as $producto)
    <div class="col-2">
      </div>
    <div class="col-3">
      <label for="codprod"><b>Codigo Producto</b></label>
      <input type="text"  class="form-control" id="codprod" name="codprod" value={{$producto->codigo}} w-50> 
    </div>
    <div class="col-7"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-4">
      <label for="nomprod"><b>Nombre Producto</b></label>
      <input type="text" class="form-control" id="nomprod" name="nomprod" value="{{ $producto->nombre }}">
    </div>
    <div class="col-6"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-6">
      <label for="desprod"><b>Descripcion Producto</b></label>
      <input type="text" class="form-control" id="desprod" name="desprod" value="{{ $producto->descripcion }}" >
    </div>
    <div class="col-4"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-3">
      <label for="catprod"><b>Categoria</b></label>
        <select class="form-select" id="catprod" name="catprod">
          <option selected>Seleccione una categoria</option>
          @foreach($categorias as $categoria)
              @if ($categoria->id == $producto->categoria_id)
              <option value={{ $categoria->id }} selected>{{ $categoria->nombre }}</option>
              @else
              <option value={{ $categoria->id }}>{{ $categoria->nombre }}</option>
              @endif
          @endforeach
       </select>
    </div>
    <div class="col-7"></div>
    @endforeach
    </div>
    <br>
    <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <button type="submit" class="btn btn-success">Modificar</button>
    </div>
    <div class="col-2">
    <a href="/" type="button" class="btn btn-warning">Desactivar</a>
    </div>
    <div class="col-2">
    <a href="/" type="button" class="btn btn-danger">Eliminar</a>
    </div>
    <div class="col-2">
    <a href="/modprod" type="button" class="btn btn-info">Volver</a>
    </div>
    <div class="col-2"></div>
  </div>
</form>
  
   
@stop         

