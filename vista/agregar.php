<?php
ob_start();
?>
<h2>Agregar Producto</h2>
<form method="POST" action="index.php?accion=guardar">
    Nombre: <input type="text" name="nombre" required><br>
    Categoría: <input type="text" name="categoria" required><br>
    Precio: <input type="text" name="precio" required><br>
    <input type="submit" value="Guardar">
</form>
<p><a href="index.php">🔙 Volver al menú</a></p>

<?php

$contenido = ob_get_clean();
include "vista/plantilla.php";
?>

