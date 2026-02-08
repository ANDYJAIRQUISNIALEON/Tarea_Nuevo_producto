<div class="card">
    <div class="card-header">
        <h2 class="card-title">Crear Nuevo Producto</h2>
    </div>

    <div class="card-body">
        <form action="index.php?controlador=producto&accion=guardar" method="POST">

            <div class="form-group">
                <label>Nombre <span class="required">*</span></label>
                <input type="text" name="nombre" required>
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <textarea name="descripcion"></textarea>
            </div>

            <div class="form-group">
                <label>Precio <span class="required">*</span></label>
                <input type="number" name="precio" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Stock <span class="required">*</span></label>
                <input type="number" name="stock" required>
            </div>

            <div class="form-actions">
                <button class="btn btn-primary">Guardar</button>
                <a href="index.php?controlador=producto" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>
</div>
