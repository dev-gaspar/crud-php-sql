<?php
require_once 'models/facturas.php';

//Acción para mostrar el listado de facturas
function index()
{
  //Obtener las facturas de la base de datos
  $facturas = obtenerFacturas();

  //Incluir la vista para mostrar el listado de facturas
  require_once 'views/facturas/index.php';
}


//Acción para mostrar el formulario de creación de factura
function crear()
{
  require_once 'views/facturas/nueva_factura.php';
}

//Acción para insertar una nueva factura en la base de datos
function insertar()
{
  insertarFactura($_POST['numero'], $_POST['fecha'], $_POST['cliente'], $_POST['monto']);
  header('Location: index.php?controller=facturas&action=index');
}

//Acción para mostrar el formulario de edición de factura
function editar()
{
  $factura = obtenerFactura($_GET['numero']);
  require_once 'views/facturas/editar_factura.php';
}

//Acción para actualizar una factura en la base de datos
function actualizar()
{
  actualizarFactura($_POST['numero'], $_POST['fecha'], $_POST['cliente'], $_POST['monto']);
  header('Location: index.php?controller=facturas&action=index');
}

//Acción para eliminar una factura de la base de datos
function eliminar()
{
  eliminarFactura($_GET['numero']);
  header('Location: index.php?controller=facturas&action=index');
}