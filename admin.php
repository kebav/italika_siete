<?php include("conexion.php"); ?>

<h1>Panel Admin</h1>

<a href="guardar.php">Nuevo Registro</a>

<table border="1">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
</tr>

<?php
$sql="SELECT * FROM productos";
$resultado=mysqli_query($conexion,$sql);

while($fila=mysqli_fetch_array($resultado)){
?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['precio']; ?></td>
<td><?php echo $fila['stock']; ?></td>

<td>
<a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>

<a href="eliminar.php?id=<?php echo $fila['id']; ?>"
onclick="return confirm('¿Eliminar registro?')">Eliminar</a>
</td>

</tr>

<?php } ?>

</table>
