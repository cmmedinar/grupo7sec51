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
                <span class="navbar-brand mb-0 h1">Sistema de gestion de Stock</span>
            </a>
            <a class="navbar-brand ml-auto">
                <span class="navbar-brand mb-0 h1">Repuestos GRUPO7</span>
            </a>
        </nav>
        
    <!-- body -->
    @section('body')
      <div class="container">
        @yield('content')
    @show
    <!-- footer -->
    @section('footer')
    <h3> Footer de mi web </h3>
    @show


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>