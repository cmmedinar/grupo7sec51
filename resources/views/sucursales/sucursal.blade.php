@extends('layouts.master')
@section('vista','Maestro - Sucursales')

@section('content')
<br><br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/creasuc';">Crear Sucursal</button>
     </div>
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/modsuc';"disabled>Modificar Sucursal</button>
     </div>
     <div class="col text-center" >   
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/elisuc';"disabled>Eliminar Sucursal</button>
     </div>
  </div>
</div>

   
@stop         

