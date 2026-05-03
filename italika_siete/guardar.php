<?php include("conexion.php");

if($_POST){

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];

$sql="INSERT INTO productos(nombre,precio,stock)
VALUES('$nombre','$precio','$stock')";

mysqli_query($conexion,$sql);

echo "Registro guardado";
}
?>

<form method="POST">
Nombre:<input type="text" name="nombre"><br>
Precio:<input type="text" name="precio"><br>
Stock:<input type="text" name="stock"><br>
<input type="submit" value="Guardar">
</form>
