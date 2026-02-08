<div class="card confirm-card">
    <div class="card-body">

        <div class="confirm-icon">⚠️</div>

        <h2 class="confirm-title">¿Eliminar producto?</h2>

        <div class="confirm-product-info">
            <strong><?= $producto['nombre'] ?></strong>
        </div>

        <form action="index.php?controlador=producto&accion=eliminar" method="POST">
            <input type="hidden" name="id" value="<?= $producto['id_producto'] ?>">

            <div class="confirm-actions">
                <a href="index.php?controlador=producto" class="btn btn-secondary">Cancelar</a>
                <button class="btn btn-danger">Eliminar</button>
            </div>
        </form>

    </div>
</div>
