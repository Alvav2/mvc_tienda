<?php
ob_start();
?>
<h2>Lista de Productos</h2>
<ul>
<?php foreach ($productos as $i => $producto): ?>
    <li>
        <?= htmlspecialchars($producto->nombre) ?> - <?= htmlspecialchars($producto->categoria) ?> - S/<?= htmlspecialchars($producto->precio) ?>
        <a href="index.php?accion=eliminar&indice=<?= $i ?>" onclick="return confirm('¿Estás seguro de eliminar este producto?');">🗑 Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
<p><a href="index.php">🔙 Volver al menú</a></p>

<?php
$contenido = ob_get_clean();
include "vista/plantilla.php";
?>

