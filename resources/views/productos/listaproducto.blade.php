@extends('layouts.master')
@section('title','- Listado Productos')
@section('content')
          <br>
          <div class="row">
          <div class="col-1"></div>
          <div class="col">
          <table class="table table-responsive table-striped" id="tablaprod">
            <thead>
               <tr style="font-size: large" class="table-primary">
                   <th scope="col">ID Prod.</th>
                   <th scope="col">Codigo</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Categoria</th>
                   <th scope="col">Sucursal</th>
                   <th scope="col">Descripcion</th>
                   <th scope="col">Cantidad</th>
                   <th scope="col">Precio</th>
               </tr>
             </thead>
            <tbody id="listado">
                @foreach($productos as $producto)
                <tr style="font-size: medium ">
                      <td align="center">{{ $producto->id }}</td>  
                      <td>{{ $producto->codigo }}</td>  
                      <td>{{ $producto->nombre }}</td> 
                      @foreach($categorias as $categoria)
                        @if($categoria->id == $producto->categoria_id)
                           <td>{{ $categoria->nombre }}</td>  
                        @endif
                      @endforeach 
                      @foreach($sucursals as $sucursal)
                        @if($sucursal->id == $producto->sucursal_id)
                           <td>{{ $sucursal->nombre }}</td>  
                        @endif
                      @endforeach  
                      <td>{{ $producto->descripcion }}</td>  
                      <td align="center">{{ $producto->cantidad }}</td>  
                      <td align="right">${{ $producto->precio }}</td>  
                  </tr>
                @endforeach
            </tbody>
          </table>
          </div>
          <div class="col-1"></div>
        </div>
@stop         

