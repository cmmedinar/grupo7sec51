@extends('layouts.master')
@section('vista','Modificacion / Eliminacion - Productos')

@section('content')
<br>
<div class="container">
   <div class="row">
     <div class="col text-center" >
       <p><h3>Modificacion / Eliminacion de Productos</h3><p>
     </div>
  </div>
  <br>
  <div class="row">
    <div class="col-4"></div>
    <div class="col-3">
      <label for="nomprod"><b>Seleccione Producto a Modificar</b></label>
      <select class="form-select" id="idprod" name="idprod" onchange="location.href='/modprodId/'+ document.getElementById('idprod').value;">
          <option selected>ID - Producto</option>
          @foreach($productos as $producto)
               <option value={{ $producto->id }}>{{$producto->id}}&nbsp-&nbsp{{ $producto->nombre }}</option>
          @endforeach
       </select>
    </div>
    <div class="col-5"></div>
  </div>
  </div>
  
  <!-- Lista -->
  @section('datosprod')
        @yield('resultado')
   @show
   
@stop         

