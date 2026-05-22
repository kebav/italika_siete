<?php include("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];

$sql="UPDATE productos SET
nombre='$nombre',
precio='$precio',
stock='stock'
WHERE id=$id";

mysqli_query($conexion,$sql);

header("Location: admin.php");
?>
