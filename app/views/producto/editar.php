
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Editar Producto</h2>
    </div>
    
    <div class="card-body">
        <?php if (isset($errores['general'])): ?>
            <div class="alert alert-error">
                <span class="alert-icon">✕</span>
                <span><?php echo htmlspecialchars($errores['general']); ?></span>
            </div>
        <?php endif; ?>
        
        <form action="index.php?controlador=producto&accion=actualizar" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($producto['id_producto']); ?>">
            
            <div class="form-group">
                <label for="nombre">
                    Nombre del Producto <span class="required">*</span>
                </label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    value="<?php echo htmlspecialchars($datos['nombre'] ?? $producto['nombre']); ?>"
                    class="<?php echo isset($errores['nombre']) ? 'input-error' : ''; ?>"
                    placeholder="Ej: Laptop Dell XPS 15"
                >
                <?php if (isset($errores['nombre'])): ?>
                    <div class="error-message"><?php echo htmlspecialchars($errores['nombre']); ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="descripcion">
                    Descripción
                </label>
                <textarea 
                    id="descripcion" 
                    name="descripcion"
                    placeholder="Descripción detallada del producto"
                ><?php echo htmlspecialchars($datos['descripcion'] ?? $producto['descripcion']); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="precio">
                    Precio <span class="required">*</span>
                </label>
                <input 
                    type="number" 
                    id="precio" 
                    name="precio" 
                    step="0.01" 
                    min="0"
                    value="<?php echo htmlspecialchars($datos['precio'] ?? $producto['precio']); ?>"
                    class="<?php echo isset($errores['precio']) ? 'input-error' : ''; ?>"
                    placeholder="0.00"
                >
                <?php if (isset($errores['precio'])): ?>
                    <div class="error-message"><?php echo htmlspecialchars($errores['precio']); ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="stock">
                    Stock <span class="required">*</span>
                </label>
                <input 
                    type="number" 
                    id="stock" 
                    name="stock" 
                    min="0"
                    value="<?php echo htmlspecialchars($datos['stock'] ?? $producto['stock']); ?>"
                    class="<?php echo isset($errores['stock']) ? 'input-error' : ''; ?>"
                    placeholder="0"
                >
                <?php if (isset($errores['stock'])): ?>
                    <div class="error-message"><?php echo htmlspecialchars($errores['stock']); ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    Actualizar Producto
                </button>
                <a href="index.php?controlador=producto&accion=index" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>