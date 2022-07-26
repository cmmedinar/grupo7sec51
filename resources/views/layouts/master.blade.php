<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Stock @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" >
  </head>
  <body>
    <!-- header -->
    @section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="/">Sistema Gestion Stock</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb- mb-lg-0">
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mestros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/prod">Productos</a></li>
                <li><a class="dropdown-item" href="/suc">Sucursales</a></li>
                <li><a class="dropdown-item" href="/cat">Categorias</a></li>
                <li><a class="dropdown-item" href="#">Usuarios</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Inventario
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/inventario/asignar/">Asignar a Sucursal</a></li>
                <li><a class="dropdown-item" href="#">Rebajar Productos</a></li>
                <li><a class="dropdown-item" href="#">Trasladar Productos</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consultas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/consulta/prod/">Buscar Producto</a></li>
                <li><a class="dropdown-item" href="/consulta/invAll/">Listado de Inventario</a></li>
                <li><a class="dropdown-item" href="/consulta/sucAll/">Listado de Sucursales</a></li>
                <li><a class="dropdown-item" href="/consulta/prodAll/">Listado de Productos</a></li>
                <li><a class="dropdown-item" href="/consulta/catAll/">Listado de Categorias</a></li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login Admin</a>
            </li>
          </ul>
        </div>
        <span class="navbar-brand mb-0 h1">@yield('vista')</span>
        <span class="navbar-brand mb-0 h1"><p>&nbsp;&nbsp;&nbsp;&nbsp<p></span>
       </div>
    </nav>
    <br><br>
        
        
    <!-- body -->
    @section('body')
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