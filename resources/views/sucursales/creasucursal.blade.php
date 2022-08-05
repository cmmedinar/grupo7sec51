@extends('layouts.master')
@section('title','- Ingreso Sucursal')

@section('content')
<br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
       <p><h1>Ingreso de Sucursal</h1><p>
     </div>
  </div>
  <form action="{{ url('/grabasuc') }}" method="POST">
   @csrf
  <div class="row">
    <div class="col-2"></div>
    <div class="col-3">
      <label for="nomsuc">Nombre Sucursal</label><br>
      <input type="text" class="form-control" id="nomsuc" name="nomsuc">
    </div>
    <div class="col-5"></div>
    <div class="col-2"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <label for="desprod">Direccion Sucursal</label>
      <input type="text" class="form-control" id="dirsuc" name="dirsuc">
    </div>
    <div class="col-4"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-3">
      <label for="comsuc">Comuna</label>
      <input type="text" class="form-control" id="comsuc" name="comsuc">
    </div>
    <div class="col-3">
      <label for="ciusuc">Ciudad</label>
      <input type="text" class="form-control" id="ciusuc" name="ciusuc">
    </div>
    <div class="col-3">
      <label for="telsuc">Telefono</label>
      <input type="text" class="form-control w-50" id="telsuc" name="telsuc">
    </div>
    <div class="col-1"></div>
  </div>
  <br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <button type="submit" class="btn btn-success">Grabar</button>
    </div>
    <div class="col-2">
      <a href="/suc" type="button" class="btn btn-info">Volver</a>
    </div>
    <div class="col-6"></div>
  </div>
 </form>
</div>



    
   
@stop         

