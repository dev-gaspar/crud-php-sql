<div class="container">
  <h1 class="text-center mb-3">Crear nueva factura</h1>
  <form action="index.php?controller=facturas&action=insertar" method="post">
    <div class="form-group">
      <label>Número:</label>
      <input type="text" class="form-control" name="numero" required>
    </div>
    <div class="form-group">
      <label>Fecha:</label>
      <input type="date" class="form-control" name="fecha" required>
    </div>
    <div class="form-group">
      <label>Cliente:</label>
      <input type="text" class="form-control" name="cliente" required>
    </div>
    <div class="form-group">
      <label>Monto:</label>
      <input type="text" class="form-control" name="monto" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Crear">
  </form>
</div>