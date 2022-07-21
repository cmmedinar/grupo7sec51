<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repuestos G7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <!-- header -->
    @section('header')
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <a class="navbar-brand">
                <span class="navbar-brand mb-0 h1">  Sistema de gestion de Stock</span>
            </a>
            <a class="navbar-brand ml-auto">
                <span class="navbar-brand mb-0 h1">Repuestos GRUPO7</span>
                <button type="button" class="btn btn-info btn-lg" onclick="location.href='/';">INICIO</button>
            </a>
        </nav>
        <br><br><br><br>
        <div class="row" style="background-color:lavender;">
            <div class="col-3" ></div>
            <div class="col-2" >
              <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/producto';">Registrar producto</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/producto';">Mantencion Producto</button>
            </div> 
            <div class="col-2">
              <button type="button" class="btn btn-primary btn-lg" onclick="location.href='/producto';">Login Admin</button>
            </div> 
            <div class="col-3" ></div>
        </div>
         <br><br>
          
        
    <!-- body -->
    @section('body')
      <div class="container">
        @yield('content')
    @show

    <!-- footer -->
    @section('footer')
        <footer class="bg-light text-center text-lg-start fixed-bottom">
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
             © 2022 Framework Seccion 51 Grupo 7 Copyright
           <a class="text-dark" href="https://www.ciisa.cl">ciisa.cl</a>
          </div>
       </footer>
    @show


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>