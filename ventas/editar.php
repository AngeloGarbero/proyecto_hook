<?php
// editamos por id y realizamos la consulta  
if (!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if ($producto === FALSE) {
	echo "error 5 (id no existe)";
	exit();
}

?>
<!-- creo un formulario para la edicion de datos -->
<?php include_once "encabezado.php" ?>
<div class="col-xs-12">

	<h1>Editar producto <?php echo $producto->descripcion; ?></h1>
	<form method="post" action="guardarDatosEditados.php">
		<input type="hidden" name="id" value="<?php echo $producto->id; ?>">

		<label for="codigo">Código de barras:</label>
		<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="descripcion">Descripcion:</label>
		<input class="form-control" name="descripcion" required id="descripcion" placeholder="Descripcion">

		<label for="precioVenta">Precio de venta:</label>
		<input value="<?php echo $producto->precioVenta ?>" class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="precioCompra">Precio de compra:</label>
		<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

		<label for="existencia">Existencia:</label>
		<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
		<a class="btn btn-warning" href="./listar.php">Cancelar</a>
	</form>
</div>
<?php include_once "pie.php" ?>