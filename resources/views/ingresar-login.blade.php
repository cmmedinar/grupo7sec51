@extends('layouts.master')

@section('content')



    <div class="container">
        <h2>Iniciar sesion Administrador</h2>

        <form method="post" class="col p-3 mb-2 bg-light text-dark" id="formulario">

            <br>

            <!-- Usuario --> 

            <div class="form-group">         
                <label for="usuario">Usuario:</label>
                <input class="form-control form-control-lg" type="Text" placeholder="Ingrese su usuario..." id="usuario" required>    
            </div>

             <br>

            <!-- Contraseña --> 

            <div class="form-group">         
                <label for="pass">Contraseña:</label>
                <input class="form-control form-control-lg" type="Text" placeholder="Ingrese contraseña..." id="pass" required>    
            </div>

            <br>

            <div>
                <input class="btn btn-success" type="submit" value="Ingresar">
                <a class="btn btn-info" href="">Registrarse</a>

            </div>


        </form>
    </div>
    <br><br><br><br>

@stop 