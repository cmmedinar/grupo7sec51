@extends('layouts.master')
@section('vista','Maestro - Categorias')

@section('content')
<br><br>
<div class="container">
  <div class="row">
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/creacat';">Crear Categoria</button>
     </div>
     <div class="col text-center" >
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/modcat';"disabled>Modificar Categoria</button>
     </div>
     <div class="col text-center" >   
        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/elicat';"disabled>Eliminar Categoria</button>
     </div>
  </div>
</div>

   
@stop         

