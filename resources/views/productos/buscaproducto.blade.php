@extends('layouts.master')
@section('title','- Buscar Productos')
@section('vista','Buscar - Productos')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-2">
      <label for="codprod"><b>Ingrese Codigo</b></label>
      <input type="text" class="form-control  w-50" id="cod" name="cod" value="">
      <button type="button" class="btn btn-outline-success" onclick="location.href='/consulta/buscaxcod/'+ document.getElementById('cod').value;">Buscar</button>
    </div>
    <div class="col-3">
      <label for="codprod"><b>Ingrese Nombre</b></label>
      <input type="text" class="form-control" id="nom" name="nom" value="">
      <button type="button" class="btn btn-outline-success" onclick="location.href='/consulta/buscaxnom/'+ document.getElementById('nom').value;">Buscar</button>
    </div>
    <div class="col-2">
      <label for="sucprod"><b>Sucursal</b></label>
      <select class="form-select" id="sucprod" name="sucprod">
        <option selected></option>
        @foreach($sucursals as $sucursal)
            <option value={{ $sucursal->id }}>{{ $sucursal->nombre }}</option>
        @endforeach
      </select>
      <button type="button" class="btn btn-outline-success" onclick="location.href='/consulta/buscaxsuc/'+ document.getElementById('sucprod').value;">Buscar</button>
    </div>
    <div class="col-1"></div>
  </div>
  <hr>
  
   <!-- Lista -->
   @section('listado')
        @yield('resultado')
   @show
  

   
   
@stop         

