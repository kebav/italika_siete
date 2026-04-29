<?php include("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];

$sql="UPDATE articulos SET
nombre='$nombre',
precio='$precio',
cantidad='$cantidad'
WHERE id=$id";

mysqli_query($conexion,$sql);

header("Location: admin.php");
?>