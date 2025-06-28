<?php
require_once "modelo/modelo.php";

function agregar_producto() {
    include "vista/agregar.php";
}

function guardar_producto_desde_formulario() {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];

    $producto = new Producto($nombre, $categoria, $precio);
    guardar_producto($producto);

    header("Location: index.php?accion=listar");
}

function listar_productos() {
    $productos = obtener_productos();
    include "vista/listar.php";
}
function eliminar_producto_controlador($indice) {
    eliminar_producto($indice);
    header("Location: index.php?accion=listar");
}

?>
