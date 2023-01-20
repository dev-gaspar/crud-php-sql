<!DOCTYPE html>
<html>

<head>
  <title>CRUD Facturas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">

  <style>
    .nav-item {
      margin-left: 10px;
      margin-right: 10px;
    }

    .nav-item:not(:last-child):after {
      content: "|";
      padding-left: 10px;
    }
  </style>

  <header class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">CRUD Facturas</a>
    <nav class="navbar-nav ml-auto d-flex flex-row">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="index.php?controller=facturas&action=index">Facturas</a>
      <a class="nav-item nav-link" href="index.php?controller=facturas&action=crear">Nueva Factura</a>
    </nav>
  </header>
  </nav>

  <main class="flex-grow-1 d-flex align-items-center justify-content-center">
    <section>
      <?php
      //Incluir el controlador correspondiente
      require_once 'controllers/' . $controller . '.php';
      //Ejecutar la acción correspondiente
      call_user_func($action);
      ?>
    </section>
  </main>

  <footer class="d-flex justify-content-center align-items-center bg-light text-center py-3">
    <p class="text-muted">CRUD Facturas | jgasparlopez29@gmail.com</p>
  </footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>