@extends('layouts.master')

@section('content')
        
        
        
        <div class="container">  
            
            <h1>Ingrese producto</h1>
            <form method="GET" class="form-group" id="formulario">
                
                <br>

                <!-- Nombre --> 
                <label>Nombre Producto:</label>
                
                    <div>         
                        
                        <input type="Text" name="nombreProducto" required>
                        
                    </div>
                
                <br>

                <!-- Categoria --> 
                <label>Seleccione categoria:</label>

                    <div>
                        <select name="categoria" required>
                            <option>Seleccione Categoría</option>
                            <option value="motor">Motor</option>
                            <option value="trendel">Tren Delantero</option>
                            <option value="carr">Carrocería</option>
                        </select>    
                    </div>
                
                <br>

                <!-- Sucursal -->
                <label>Seleccione sucursal:</label>    
                
                    <div>

                        <input type="radio" name="radioSucursal" id="radioSucursal" value="1" required/>Santiago
                        <input type="radio" name="radioSucursal" id="radioSucursal" value="2" required/>Viña del mar
                        <input type="radio" name="radioSucursal" id="radioSucursal" value="3" required/>Rancagua

                    </div>

                <br>

                <!-- Descripción -->
                <label>Descripción:</label>    

                    <div>

                    <input type="Text" name="descripcionProducto" required>

                    </div>  


                <br> 
                 
                <!-- Cantidad -->
                <label>Cantidad</label>

                    <div>
                        <input type="Number" name="cantidad" required>
                    </div> 
                    
                <br> 
                 
                <!-- Precio -->
                <label>Precio:</label>

                    <div>
                        <input type="Number" name="precio" required>
                    </div> 

                <br>

                <div>
                     <button type="submit">Guardar</button>
                 </div>


            </form>      
        </div>



@stop         

