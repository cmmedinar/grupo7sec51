@extends('layouts.master')
@section('title','- Ingreso Producto')
@section('vista','Ingreso de Productos')

@section('content')
<br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
       <p><h1>Ingreso de Productos</h1><p>
     </div>
  </div>
  <br>
  <form action="{{ url('/grabaprod') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-2"></div>
    <div class="col-3">
      <label for="codprod">Codigo Producto</label><br>
      <input type="text" class="form-control" id="codprod" placeholder="AAA0000" name="codprod">
    </div>
    <div class="col-7"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-4">
      <label for="nomprod">Nombre Producto</label>
      <input type="text" class="form-control" id="nomprod" name="nomprod" >
    </div>
    <div class="col-6"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <label for="desprod">Descripcion Producto</label>
      <input type="text" class="form-control" id="desprod" name="desprod">
    </div>
    <div class="col-2"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-3">
      <label for="catprod">Categoria</label>
        <select class="form-select" id="catprod" name="catprod">
          <option selected>Seleccione una categoria</option>
          @foreach($categorias as $categoria)
              <option value={{ $categoria->id }}>{{ $categoria->nombre }}</option>
          @endforeach
       </select>
    </div>
    <div class="col-7"></div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <button type="submit" class="btn btn-success">Grabar</button>
    </div>
    <div class="col-2">
    <a href="/prod" type="button" class="btn btn-info">Volver</a>
    </div>
    <div class="col-6"></div>
  </div>
</form>
</div>
    
   
@stop         

