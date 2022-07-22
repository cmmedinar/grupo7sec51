@extends('layouts.master')

@section('content')





    <div class="container">
        <h2>Buscar un producto</h2>
            <form method="post" class="col p-3 mb-2 bg-light text-dark" id="formulario">

            <br>

                <!-- Nombre --> 

                <div class="form-group">         
                    <label for="nombreProducto">Nombre Producto:</label>
                    <input class="form-control form-control-lg" type="Text" placeholder="Ingrese el nombre del producto..." id="nombreProducto" required>    
                 </div>
                
            <br>

                 <!-- Codigo --> 
                 
                <div class="form-group">         
                    <label for="codigoProducto">Codigo Producto:</label>
                    <input class="form-control form-control-lg" type="Text" placeholder="Ingrese codigo del producto..." id="codigoProducto" required>                   
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

                <div>
                    <input class="btn btn-success" type="submit" value="Buscar">
                    <input class="btn btn-warning" type="reset" value="Limpiar">
                </div>

            </form>

            <br>

            <table class="table table-striped table-dark table-bordered">

                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Sucursal</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Descripcioón</th>
                    <th>Acciones</th>
                </tr>

                <tr>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle" th:text=""></td>
                    <td class="align-middle text-center"><a class="btn btn-danger">&#9998;</a></td>
                 </tr>

            </table>    
    </div>     
    <br><br><br><br>
    @stop 