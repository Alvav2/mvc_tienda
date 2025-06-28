<?php
require_once "controlador/controlador.php";

$accion = $_GET['accion'] ?? '';

echo "<h1>Sistema de Registro de Productos</h1>";

switch ($accion) {
    case 'agregar':
        agregar_producto();
        break;
    case 'guardar':
        guardar_producto_desde_formulario();
        break;
    case 'listar':
        listar_productos();
        break;
    case 'eliminar':
        $indice = $_GET['indice'] ?? -1;
        if ($indice >= 0) {
            eliminar_producto_controlador($indice);
        }
        break;
    default:
        include "vista/menu.php";
}
