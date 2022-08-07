@extends('layouts.master')
@section('title','- Asigna Sucursal')
@section('vista','Asignar Productos a Sucursal')

@section('content')
<br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
       <p><h1>Asignación de Productos a una Sucursal</h1><p>
     </div>
  </div>
  <br>
  <form action="{{ url('/inventario/grabainv') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-2"></div>
    <div class="col-3">
      <label for="nomprod">Seleccione un Producto</label>
      <select class="form-select" id="idprod" name="idprod">
          <option selected>Productos</option>
          @foreach($productos as $producto)
               <option value={{ $producto->id }}>{{ $producto->nombre }}</option>
          @endforeach
       </select>
    </div>
    <div class="col-7"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-4">
      <label for="idsuc">Seleccione Sucursal a asignar producto</label>
      <select class="form-select" id="idsuc" name="idsuc">
          <option selected>Sucursales</option>
          @foreach($sucursals as $sucursal)
               <option value={{ $sucursal->id }}>{{ $sucursal->nombre }} de {{ $sucursal->ciudad }}</option>
          @endforeach
       </select>
    </div>
    <div class="col-6"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <label for="cantprod">Cantidad</label>
      <input type="text" class="form-control" id="cantprod" name="cantprod" w-50>
    </div>
    <div class="col-8"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <label for="precioprod">Precio</label>
      <input type="text" class="form-control" id="precioprod" name="precioprod" w-50>
    </div>
    <div class="col-8"></div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <button type="submit" class="btn btn-success">Grabar</button>
    </div>
    <div class="col-2">
    <a href="/" type="button" class="btn btn-info">Volver</a>
    </div>
    <div class="col-6"></div>
  </div>
</form>
</div>
    
   
@stop         

