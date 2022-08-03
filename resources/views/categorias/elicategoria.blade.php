@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
       <p><h1>Eliminacion de Categoria</h1><p>
     </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="codprod">Nombre Sucursal</label>
      <input type="text" class="form-control" id="codprod" size="10">
    </div>
    <div class="col">
      <label for="nomprod">Direccion</label>
      <input type="text" class="form-control" id="nomprod" size="30">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="desprod">Ciudad</label>
      <input type="text" class="form-control" id="desprod">
    </div>
    <div class="col">
      <label for="cantprod">Telefono</label>
      <input type="text" class="form-control" id="cantprod">
    </div>
    <div class="col">
      <label for="precioprod">Email</label>
      <input type="text" class="form-control" id="precioprod">
    </div>
  </div>
</div>
    
   
@stop         

