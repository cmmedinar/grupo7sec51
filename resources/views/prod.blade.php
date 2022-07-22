@extends('layouts.master')
@section('content')

        <div class="container">  
            
            <h2>Registro de Productos</h2>
            <form method="post" class="col p-3 mb-2 bg-light text-dark" id="formulario">
                
                <br>
                <!-- Nombre --> 
                <div class="form-group">         
                    <label for="nombreProducto">Nombre Producto:</label>
                    <input class="form-control form-control-lg" type="Text" placeholder="Ingrese nombre del producto..." id="nombreProducto" required>                        
                </div>
                <br>
                <!-- Categoria --> 
                <div class="form-group">
                    <label for="categoria">Seleccione categoria:</label>
                    <select class="form-control form-control-lg " id="categoria" required>
                        <option hidden value="">Seleccione categoria</option>
                        <option value="Vestuario">Vestuario</option>
                        <option value="Tecno">Tecnologia</option>
                        <option value="Muebles">Muebles</option>
                    </select>    
                </div>
                <br>
                <!-- Sucursal -->
                <label for="sucursal">Seleccione sucursal:</label>  <br>
                    <div>
                        <input type="radio" name="radioSucursal" id="radioSucursal" value="1" required/>Santiago
                        <input type="radio" name="radioSucursal" id="radioSucursal" value="2" required/>Viña del mar
                        <input type="radio" name="radioSucursal" id="radioSucursal" value="3" required/>Rancagua
                   </div>
                <br>
                <!-- Descripción -->
                <div class="form-group">
                    <label for="descripcionProducto">Descripción:</label>
                    <input class="form-control form-control-lg" type="Text" placeholder="Ingrese una descripción..." id="descripcionProducto" required>
                </div>  
                <br>
                <!-- Cantidad -->
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input class="form-control form-control-lg" type="Number" placeholder="Ingrese cantidad de productos..." id="cantidad" required>
                </div> 
                <br> 
                <!-- Precio -->
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input class="form-control form-control-lg" type="Number" placeholder="Ingrese precio del producto..." id="precio" required>
                </div> 
                <br>
                <div>
                    <input class="btn btn-success" type="submit" value="Guardar">
                    <input class="btn btn-warning" type="reset" value="Limpiar">
                </div>
            </form>      
        </div>
        <br><br><br><br>
        
@stop         