<div class="card">
    <div class="card-header">
        <h2 class="card-title">Detalle del Producto</h2>
        <a href="index.php?controlador=producto" class="btn btn-secondary">
            Volver
        </a>
    </div>

    <div class="card-body">
        <div class="detail-grid">

            <div class="detail-item">
                <div class="detail-label">ID</div>
                <div class="detail-value">#<?= $producto['id_producto'] ?></div>
            </div>

            <div class="detail-item">
                <div class="detail-label">Nombre</div>
                <div class="detail-value"><?= $producto['nombre'] ?></div>
            </div>

            <div class="detail-item">
                <div class="detail-label">Precio</div>
                <div class="detail-price">$<?= number_format($producto['precio'], 2) ?></div>
            </div>

            <div class="detail-item">
                <div class="detail-label">Stock</div>
                <div class="detail-value"><?= $producto['stock'] ?></div>
            </div>

        </div>

        <div class="detail-actions">
            <a href="index.php?controlador=producto&accion=editar&id=<?= $producto['id_producto'] ?>" class="btn btn-primary">
                Editar
            </a>
            <a href="index.php?controlador=producto&accion=confirmarEliminar&id=<?= $producto['id_producto'] ?>" class="btn btn-danger">
                Eliminar
            </a>
        </div>
    </div>
</div>
