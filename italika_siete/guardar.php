<?php include("conexion.php");

if($_POST){

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];

$sql="INSERT INTO productos(nombre,precio,cantidad)
VALUES('$nombre','$precio','$cantidad')";

mysqli_query($conexion,$sql);

echo "Registro guardado";
}
?>

<form method="POST">
Nombre:<input type="text" name="nombre"><br>
Precio:<input type="text" name="precio"><br>
Cantidad:<input type="text" name="cantidad"><br>
<input type="submit" value="Guardar">
</form>