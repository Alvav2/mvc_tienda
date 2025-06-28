<?php
ob_start();
?>
<h2>Menú</h2>
<ul>
    <li><a href="index.php?accion=agregar">➕ Agregar Producto</a></li>
    <li><a href="index.php?accion=listar">📋 Listar Productos</a></li>
</ul>
<?php
$contenido = ob_get_clean();
include "vista/plantilla.php";
?>
