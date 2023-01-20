<?php
require_once './includes/db.php';

//Función para insertar una nueva factura en la base de datos
function insertarFactura($numero, $fecha, $cliente, $monto)
{
  $sql = "INSERT INTO facturas (numero, fecha, cliente, monto)
            VALUES ('$numero', '$fecha', '$cliente', '$monto')";
  return ejecutarConsulta($sql);
}

//Función para obtener todas las facturas de la base de datos
function obtenerFacturas()
{
  $sql = "SELECT * FROM facturas";
  return obtenerFilas(ejecutarConsulta($sql));
}

//Función para obtener una factura específica de la base de datos
function obtenerFactura($numero)
{
  $sql = "SELECT * FROM facturas WHERE numero = '$numero'";
  return obtenerFila(ejecutarConsulta($sql));
}

//Función para actualizar una factura en la base de datos
function actualizarFactura($numero, $fecha, $cliente, $monto)
{
  $sql = "UPDATE facturas SET fecha = '$fecha', cliente = '$cliente', monto = '$monto' WHERE numero = '$numero'";
  return ejecutarConsulta($sql);
}

//Función para eliminar una factura de la base de datos
function eliminarFactura($numero)
{
  $sql = "DELETE FROM facturas WHERE numero = '$numero'";
  return ejecutarConsulta($sql);
}

//Función para obtener el total de facturas
function obtenerTotalFacturas()
{
  $sql = "SELECT COUNT(*) as total FROM facturas";
  return obtenerFila(ejecutarConsulta($sql))['total'];
}

//Función para ejecutar una consulta
function ejecutarConsulta($sql)
{
  $result = mysql_query($sql);
  if (!$result) {
    die('Error al ejecutar la consulta: ' . mysql_error());
  }
  return $result;
}

//Función para obtener todas las filas de una consulta
function obtenerFilas($result)
{
  $filas = array();
  while ($row = mysql_fetch_assoc($result)) {
    $filas[] = $row;
  }
  return $filas;
}

//Función para obtener una fila de una consulta
function obtenerFila($result)
{
  return mysql_fetch_assoc($result);
}