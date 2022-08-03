@extends('layouts.master')
@section('title','- Consulta')
@section('content')
<br><br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
       <p><h1>Consulta de Productos</h1><p>
     </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="codprod">Buscar por Codigo Producto</label>
      <input type="text" class="form-control" id="codprod" size="10">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="nomprod">Buscar por Nombre Producto</label>
      <input type="text" class="form-control" id="nomprod" size="30">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="catprod">Buscar por Categoria</label>
      <select class="form-select" id="inputGroupSelect01">
        <option selected>Seleccione</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col">
      <label for="sucprod">Buscar por Sucursal</label>
      <select class="form-select" id="inputGroupSelect01">
        <option selected>Seleccione</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
</div>
    
   
@stop         

