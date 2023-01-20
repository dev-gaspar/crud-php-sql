<h1 class="text-center">Listado de facturas</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Número</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Monto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($facturas as $factura) { ?>
            <tr>
                <td><?php echo $factura['numero'] ?></td>
                <td><?php echo $factura['fecha'] ?></td>
                <td><?php echo $factura['cliente'] ?></td>
                <td><?php echo ('$'.$factura['monto']) ?></td>
                <td>
                    <a href="index.php?controller=facturas&action=editar&numero=<?php echo $factura['numero'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a onclick="return confirm('¿Estás seguro de que deseas eliminar esta factura?');" href="index.php?controller=facturas&action=eliminar&numero=<?php echo $factura['numero'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a class="btn btn-success btn-sm" href="index.php?controller=facturas&action=crear">Crear nueva factura</a>
