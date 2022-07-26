@extends('productos.buscaproducto')
@section('title','- Resultado Busqueda')
@section('vista','Buscar - Productos')
@section('resultado')
        <br>
          <div class="row">
          <div class="col-1"></div>
          <div class="col">
          <table class="table table-responsive table-striped" id="tablaprod">
            <thead>
               <tr style="font-size: large" class="table-primary">
                   <th scope="col">Codigo</th>
                   <th scope="col">Nombre Producto</th>
                   <th scope="col">Categoria</th>
                   <th scope="col">Sucursal</th>
                   <th scope="col">Cantidad</th>
                   <th scope="col">Precio</th>
               </tr>
             </thead>
            <tbody id="listado">
            @foreach($inventarios as $inventario)
                <tr style="font-size: medium ">
                      @foreach($productos as $producto)
                        @if($inventario->producto_id == $producto->id)
                           <td>{{ $producto->codigo }}</td>  
                           <td>{{ $producto->nombre }}</td> 
                            @foreach($categorias as $categoria)
                               @if($categoria->id == $producto->categoria_id)
                                 <td>{{ $categoria->nombre }}</td>  
                               @endif
                            @endforeach 
                            @foreach($sucursals as $sucursal)
                              @if($sucursal->id == $inventario->sucursal_id && $inventario->producto_id == $producto->id)
                                <td>{{ $sucursal->nombre }}</td>  
                              @endif
                            @endforeach 
                            <td align="center">{{ $inventario->cantidad }}</td>  
                            <td align="right">${{ $inventario->precio }}</td>  
                        @endif   
                      </tr>
                      @endforeach
                @endforeach
            </tbody>
          </table>
          </div>
          <div class="col-1"></div>
        </div>
   
@stop         

