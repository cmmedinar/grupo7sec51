@extends('layouts.master')
@section('title','- Ingreso Categoria')

@section('content')
<br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
       <p><h1>Ingreso de Categorias de Productos</h1><p>
     </div>
  </div>
  <form action="{{ url('/grabacat') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-2"></div>
    <div class="col-3">
      <label for="nomcat">Nombre Categoria</label><br>
      <input type="text" class="form-control" id="nomcat" name="nomcat">
    </div>
    <div class="col-5"></div>
    <div class="col-2"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <label for="descat">Descripcion Categoria</label>
      <input type="text" class="form-control" id="descat" name="descat">
    </div>
    <div class="col-4"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <button type="submit" class="btn btn-success">Grabar</button>
    </div>
    <div class="col-2">
       <a href="/cat" type="button" class="btn btn-info">Volver</a>
    </div>
    <div class="col-6"></div>
  </div>
 </form>
</div>

   
@stop         

