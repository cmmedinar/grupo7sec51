@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
       <p><h1>Ingreso de Productos</h1><p>
     </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="codprod">Codigo Producto</label>
      <input type="text" class="form-control" id="codprod" size="10">
    </div>
    <div class="col">
      <label for="nomprod">Nombre Producto</label>
      <input type="text" class="form-control" id="nomprod" size="30">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="catprod">Categoria</label>
      <select class="form-select" id="inputGroupSelect01">
        <option selected>Seleccione</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col">
      <label for="sucprod">Sucursal</label>
      <select class="form-select" id="inputGroupSelect01">
        <option selected>Seleccione</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="desprod">Descripcion Producto</label>
      <input type="text" class="form-control" id="desprod">
    </div>
    <div class="col">
      <label for="cantprod">Cantidad</label>
      <input type="text" class="form-control" id="cantprod">
    </div>
    <div class="col">
      <label for="precioprod">Precio</label>
      <input type="text" class="form-control" id="precioprod">
    </div>
  </div>
</div>
    
   
@stop         

