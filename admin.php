<?php
include("conexion.php");

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);

$total = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Panel Admin | Axel Gabriel</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f6f9;
    color:#222;
}

/* HEADER */

header{
    background:white;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
    padding:20px 60px;
}

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:20px;
}

.logo{
    font-size:28px;
    font-weight:bold;
    color:#003b75;
}

.actions{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    text-decoration:none;
    padding:12px 20px;
    border-radius:12px;
    font-weight:bold;
    transition:.3s;
}

.btn-home{
    background:#e9eef7;
    color:#003b75;
}

.btn-home:hover{
    transform:translateY(-2px);
}

.btn-add{
    background:#003b75;
    color:white;
}

.btn-add:hover{
    transform:translateY(-2px);
}

/* CONTENT */

.container{
    width:90%;
    max-width:1300px;
    margin:50px auto;
}

.title{
    margin-bottom:10px;
    color:#003b75;
    font-size:42px;
}

.subtitle{
    color:#666;
    margin-bottom:30px;
}

.stats{
    background:white;
    padding:20px;
    border-radius:20px;
    margin-bottom:25px;
    box-shadow:0 3px 15px rgba(0,0,0,.08);
    font-size:20px;
}

/* TABLE */

.table-container{
    overflow-x:auto;
    background:white;
    border-radius:20px;
    box-shadow:0 3px 20px rgba(0,0,0,.08);
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background:#003b75;
    color:white;
}

th,td{
    padding:18px;
    text-align:center;
}

tbody tr{
    border-bottom:1px solid #eee;
    transition:.2s;
}

tbody tr:hover{
    background:#f5f8fc;
}

.price{
    font-weight:bold;
    color:#0a5abf;
}

/* BUTTONS */

.action-btn{
    text-decoration:none;
    padding:10px 16px;
    border-radius:10px;
    color:white;
    font-weight:bold;
    margin:3px;
    display:inline-block;
}

.edit{
    background:#0a5abf;
}

.delete{
    background:#d62828;
}

.action-btn:hover{
    opacity:.9;
}

/* MOBILE */

@media(max-width:800px){

header{
    padding:20px;
}

.title{
    font-size:34px;
}

th,td{
    padding:12px;
}

}

</style>
</head>
<body>

<header>

    <div class="navbar">

        <div class="logo">
            Italika Admin
        </div>

        <div class="actions">

            <a href="index.php" class="btn btn-home">
                ← Volver al inicio
            </a>

            <a href="guardar.php" class="btn btn-add">
                + Nuevo producto
            </a>

        </div>

    </div>

</header>

<div class="container">

    <h1 class="title">
        Panel de Administración
    </h1>

    <p class="subtitle">
        Gestiona productos, precios y stock del sistema.
    </p>

    <div class="stats">
        Productos registrados:
        <strong><?php echo $total; ?></strong>
    </div>

    <div class="table-container">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

            <?php while($fila=mysqli_fetch_array($resultado)){ ?>

                <tr>

                    <td>
                        <?php echo $fila['id']; ?>
                    </td>

                    <td>
                        <?php echo $fila['nombre']; ?>
                    </td>

                    <td class="price">
                        $<?php echo $fila['precio']; ?>
                    </td>

                    <td>
                        <?php echo $fila['stock']; ?>
                    </td>

                    <td>

                        <a class="action-btn edit"
                        href="editar.php?id=<?php echo $fila['id']; ?>">
                            Editar
                        </a>

                        <a class="action-btn delete"
                        href="eliminar.php?id=<?php echo $fila['id']; ?>"
                        onclick="return confirm('¿Eliminar este registro?')">
                            Eliminar
                        </a>

                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>
