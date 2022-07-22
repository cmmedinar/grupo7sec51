@extends('layouts.master')

@section('content')



    <div class="container">
        <h2>Registro de usuario</h2>

        <form method="post" class="col p-3 mb-2 bg-light text-dark" id="formulario">

            <br>

            <!-- Nombre del Usuario --> 

            <div class="form-group">         
                <label for="nombreUsuario">Nombre:</label>
                <input class="form-control form-control-lg" type="Text" placeholder="Ingrese nombre completo del usuario..." id="nombreUsuario" required>    
            </div>

            <br>

            <!-- Usuario --> 

            <div class="form-group">         
                <label for="usuario">Usuario:</label>
                <input class="form-control form-control-lg" type="Text" placeholder="Ingrese usuario..." id="usuario" required>    
            </div>

             <br>

            <!-- Contraseña --> 

            <div class="form-group">         
                <label for="pass">Contraseña:</label>
                <input class="form-control form-control-lg" type="Text" placeholder="Ingrese contraseña..." id="pass" required>    
            </div>

            <br>

            <!-- Confirmar Contraseña --> 

            <div class="form-group">         
                <label for="pass2">Contraseña:</label>
                <input class="form-control form-control-lg" type="Text" placeholder="Confirmar contraseña..." id="pass2" required>    
            </div>

            <br>

            <div>
                <input class="btn btn-success" type="submit" value="Ingresar">
                <input class="btn btn-warning" type="reset" value="Limpiar">
            </div>


        </form>
    </div>
    <br><br><br><br>

@stop 