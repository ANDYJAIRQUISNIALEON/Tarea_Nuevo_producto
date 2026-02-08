<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? 'Gestión de Productos' ?></title>

    <!-- IMPORTANTE: ruta correcta -->
    <link rel="stylesheet" href="/TAREA_PRODUCTO/public/style.css">
</head>
<body>

<div class="header">
    <div class="container">
        <h1>Gestión de Productos</h1>
        <p>Sistema de administración de catálogo</p>
    </div>
</div>

<div class="container">

    <?php if (!empty($_SESSION['exito'])): ?>
        <div class="alert alert-success">
            <?= $_SESSION['exito']; unset($_SESSION['exito']); ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($_SESSION['error'])): ?>
        <div class="alert alert-error">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <?= $contenido ?? '' ?>

</div>

</body>
</html>
