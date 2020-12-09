<?php
if (!isset($_POST["codigo"])) {
    return;
}

$codigo = $_POST["codigo"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE codigo = ? LIMIT 1;");
$sentencia->execute([$codigo]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
//capturamos las diferentes situasiones que se pueden dar

// producto inexistente
if (!$producto) {
    header("Location: ./vender.php?status=4");
    exit;
}
// si ese producto se acabo
if ($producto->existencia < 1) {
    header("Location: ./vender.php?status=5");
    exit;
}
session_start();


// guscar producto
$indice = false;
for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    if ($_SESSION["carrito"][$i]->codigo === $codigo) {
        $indice = $i;
        break;
    }
}
// si es un nuevo producto lo agregamos 
if ($indice === false) {
    $producto->cantidad = 1;
    $producto->total = $producto->precioVenta;
    array_push($_SESSION["carrito"], $producto);
} else {
// si no es un nuevo producto le sumamos 1 
    $cantidadExistente = $_SESSION["carrito"][$indice]->cantidad;
// si supera la existencia no lo agrega
    if ($cantidadExistente + 1 > $producto->existencia) {
        header("Location: ./vender.php?status=5");
        exit;
    }
// se pone esto para que si se refresca la pagina siga estando los productos
    $_SESSION["carrito"][$indice]->cantidad++;
    $_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad * $_SESSION["carrito"][$indice]->precioVenta;
}
header("Location: ./vender.php");
