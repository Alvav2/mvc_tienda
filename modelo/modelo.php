<?php
class Producto {
    public $nombre;
    public $categoria;
    public $precio;

    public function __construct($nombre, $categoria, $precio) {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
    }
}

function guardar_producto($producto) {
    $archivo = fopen("datos/productos.txt", "a");
    fwrite($archivo, "{$producto->nombre},{$producto->categoria},{$producto->precio}\n");
    fclose($archivo);
}

function obtener_productos() {
    $productos = [];
    if (file_exists("datos/productos.txt")) {
        $lineas = file("datos/productos.txt");
        foreach ($lineas as $linea) {
            list($nombre, $categoria, $precio) = explode(",", trim($linea));
            $productos[] = new Producto($nombre, $categoria, $precio);
        }
    }
    return $productos;
}
function eliminar_producto($indice) {
    if (file_exists("datos/productos.txt")) {
        $lineas = file("datos/productos.txt");
        unset($lineas[$indice]);
        file_put_contents("datos/productos.txt", implode("", $lineas));
    }
}

?>
