<div class="container">
  <h1 class="text-center mb-3">Editar factura</h1>
  <form action="index.php?controller=facturas&action=actualizar" method="post">
    <input type="hidden" name="numero" value="<?php echo $factura['numero'] ?>">
    <div class="form-group">
      <label for="fecha">Fecha:</label>
      <input type="date" class="form-control" name="fecha" value="<?php echo $factura['fecha'] ?>" required>
    </div>
    <div class="form-group">
      <label for="cliente">Cliente:</label>
      <input type="text" class="form-control" name="cliente" value="<?php echo $factura['cliente'] ?>" required>
    </div>
    <div class="form-group">
      <label for="monto">Monto:</label>
      <input type="text" class="form-control" name="monto" value="<?php echo $factura['monto'] ?>" required>
    </div>
    <input type="submit" class="btn btn-primary" value="Actualizar">
  </form>
</div>