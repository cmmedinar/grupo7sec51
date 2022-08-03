@extends('layouts.master')

@section('content')
<br><br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/creasuc';">Crear Sucursal</button>
     </div>
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/modsuc';">Modificar Sucursal</button>
     </div>
     <div class="col text-center" >   
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/elisuc';">Eliminar Sucursal</button>
     </div>
  </div>
</div>

   
@stop         

