<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "facturas";

// Crear conexión
$conn = mysql_connect($host, $username, $password);

// Chequear conexión
if (!$conn) {
  die("Error al conectarse a la base de datos: " . mysql_error());
}

// Seleccionar base de datos
$select_db = mysql_select_db($dbname, $conn);
if (!$select_db) {
  die("Error al seleccionar la base de datos: " . mysql_error());
}

?>