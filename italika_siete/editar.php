<?php include("conexion.php");

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE id=$id";
$r=mysqli_query($conexion,$sql);
$f=mysqli_fetch_array($r);
?>

<form action="actualizar.php" method="POST">

<input type="hidden" name="id" value="<?php echo $f['id']; ?>">

Nombre:
<input type="text" name="nombre" value="<?php echo $f['nombre']; ?>"><br>

Precio:
<input type="text" name="precio" value="<?php echo $f['precio']; ?>"><br>

Cantidad:
<input type="text" name="cantidad" value="<?php echo $f['cantidad']; ?>"><br>

<input type="submit" value="Actualizar">

</form>