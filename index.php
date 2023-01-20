<?php
require_once 'controllers/facturas.php';

if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action = $_GET['action'];
} else {
  $controller = 'facturas';
  $action = 'index';
}

require_once 'views/layout.php';