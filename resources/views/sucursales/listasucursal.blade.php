@extends('layouts.master')
@section('title','- Listado Sucursales')
@section('vista','Listado - Sucursales')
@section('content')
          <br>
          <div class="row">
          <div class="col-1"></div>
          <div class="col">
          <table class="table table-responsive table-striped" id="tablasuc">
            <thead>
               <tr style="font-size: large" class="table-primary">
                   <th scope="col">ID Suc.</th>
                   <th scope="col">Nombre Sucursal</th>
                   <th scope="col">Dirección</th>
                   <th scope="col">Comuna</th>
                   <th scope="col">Ciudad</th>
                   <th scope="col">Telefono</th>
                </tr>
             </thead>
            <tbody id="listado">
                @foreach($sucursals as $sucursal)
                <tr style="font-size: medium ">
                      <td align="center">{{ $sucursal->id }}</td>  
                      <td>{{ $sucursal->nombre }}</td>  
                      <td>{{ $sucursal->direccion }}</td>  
                      <td>{{ $sucursal->comuna }}</td>  
                      <td>{{ $sucursal->ciudad }}</td>  
                      <td>{{ $sucursal->telefono }}</td>                        
                  </tr>
                @endforeach
            </tbody>
          </table>
          </div>
          <div class="col-1"></div>
        </div>
@stop         

