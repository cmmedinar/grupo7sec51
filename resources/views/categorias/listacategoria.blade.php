@extends('layouts.master')
@section('title','- Listado Categorias')
@section('vista','Listado - Categorias')
@section('content')
          <br>
          <div class="row">
          <div class="col-1"></div>
          <div class="col">
          <table class="table table-responsive table-striped" id="tablasuc">
            <thead>
               <tr style="font-size: large" class="table-primary">
                   <th scope="col">ID Cat.</th>
                   <th scope="col">Nombre Categoria</th>
                   <th scope="col">Descripcion</th>
                </tr>
             </thead>
            <tbody id="listado">
                @foreach($categorias as $categoria)
                <tr style="font-size: medium ">
                      <td align="center">{{ $categoria->id }}</td>  
                      <td>{{ $categoria->nombre }}</td>  
                      <td>{{ $categoria->descripcion }}</td>                    
                  </tr>
                @endforeach
            </tbody>
          </table>
          </div>
          <div class="col-1"></div>
        </div>
@stop         

