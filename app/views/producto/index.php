<?php
$titulo = 'Lista de Productos';
ob_start();
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Productos</h2>
        <a href="index.php?controlador=producto&accion=crear" class="btn btn-primary">
            Nuevo Producto
        </a>
    </div>
    
    <div class="card-body">
        <?php if (empty($productos)): ?>
            <div class="empty-state">
                <div class="empty-state-icon">📦</div>
                <h3 class="empty-state-title">No hay productos</h3>
                <p class="empty-state-message">Comienza agregando tu primer producto al catálogo</p>
                <a href="index.php?controlador=producto&accion=crear" class="btn btn-primary">
                    Agregar Producto
                </a>
            </div>
        <?php else: ?>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($producto['nombre']); ?></strong>
                                    <?php if (!empty($producto['descripcion'])): ?>
                                        <br>
                                        <small style="color: var(--text-secondary);">
                                            <?php echo htmlspecialchars(substr($producto['descripcion'], 0, 60)); ?>
                                            <?php echo strlen($producto['descripcion']) > 60 ? '...' : ''; ?>
                                        </small>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <strong style="color: var(--primary);">
                                        $<?php echo number_format($producto['precio'], 2); ?>
                                    </strong>
                                </td>
                                <td>
                                    <?php if ($producto['stock'] > 10): ?>
                                        <span class="badge badge-success"><?php echo $producto['stock']; ?> unidades</span>
                                    <?php elseif ($producto['stock'] > 0): ?>
                                        <span class="badge badge-warning"><?php echo $producto['stock']; ?> unidades</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Agotado</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo date('d/m/Y H:i', strtotime($producto['fecha_creacion'])); ?></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="index.php?controlador=producto&accion=ver&id=<?php echo $producto['id_producto']; ?>" 
                                           class="btn btn-secondary btn-sm" title="Ver detalle">
                                            👁️ Ver
                                        </a>
                                        <a href="index.php?controlador=producto&accion=editar&id=<?php echo $producto['id_producto']; ?>" 
                                           class="btn btn-primary btn-sm" title="Editar">
                                            Editar
                                        </a>
                                        <a href="index.php?controlador=producto&accion=confirmarEliminar&id=<?php echo $producto['id_producto']; ?>" 
                                           class="btn btn-danger btn-sm" title="Eliminar">
                                            Eliminar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
