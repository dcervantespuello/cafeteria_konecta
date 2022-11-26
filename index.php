<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cafetería Konecta</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Ícono de ventana-->
  <link rel="icon" href="/img/logo.png" type="image/png">

  <!-- Inicio Estilos -->
  <style>
    footer {
      position: fixed;
      height: 100px;
      bottom: 0;
      width: 100%;
    }
  </style>
  <!-- Fin Estilos -->
</head>

<body>
  <div class="container">
    <!-- Inicio Header -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="bi me-2" src="img/logo.png" alt="Logo konecta" width="30" height="30">
        <span class="fs-4">Cafetería Konecta</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menú
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Productos</a></li>
            <li><a class="dropdown-item" href="#">Ventas</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Reportes</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Fin Header -->

    <main class="flex-shrink-0">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Productos</h1>
          </div>
          <div class="col-2">
            <button type="button" class="btn btn-success btn-lg" style="margin-left: 13px;">Nuevo producto</button>
          </div>
        </div>
      </div>

      <table class="table table-hover mt-4 text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Precio</th>
            <th>Peso</th>
            <th>Categoría</th>
            <th>Stock</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Limón</td>
            <td>LI001</td>
            <td>500</td>
            <td>100</td>
            <td>Alimentos</td>
            <td>5</td>
            <td><button class="btn btn-primary">Editar</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
          </tr>
        </tbody>
      </table>
    </main>

    <!-- Inicio Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-center">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <img src="img/logo.png" alt="Logo Konecta" class="bi" width="20" height="20">
        </a>
        <span class="mb-3 mb-md-0 text-muted">Cafetería Konecta 2022 © Por Deivis Cervantes</span>
      </div>

      <ul class="nav col-md-3 justify-content-start list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="https://mobile.twitter.com/konectacolombia">
            <img src="img/twitter.png" alt="" class="bi" width="24" height="24">
          </a></li>
        <li class="ms-3"><a class="text-muted" href="instagram.com/konectacolombia/">
            <img src="img/instagram.png" alt="" class="bi" width="24" height="24">
          </a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/konecta.col/">
            <img src="img/facebook.png" alt="" class="bi" width="24" height="24">
          </a></li>
      </ul>
    </footer>
    <!-- Fin Footer -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>