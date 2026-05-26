<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id=$id";
$r = mysqli_query($conexion, $sql);
$f = mysqli_fetch_array($r);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Editar Producto | Axel Gabriel</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f6f9;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
}

.container{
    width:100%;
    max-width:520px;
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 6px 25px rgba(0,0,0,.08);
}

.title{
    color:#003b75;
    font-size:36px;
    margin-bottom:10px;
    text-align:center;
}

.subtitle{
    text-align:center;
    color:#666;
    margin-bottom:35px;
}

label{
    display:block;
    margin-bottom:10px;
    font-weight:bold;
    color:#333;
}

input[type="text"]{
    width:100%;
    padding:16px;
    border:1px solid #dcdcdc;
    border-radius:14px;
    font-size:16px;
    margin-bottom:25px;
    outline:none;
    transition:.2s;
}

input[type="text"]:focus{
    border-color:#0a5abf;
}

.buttons{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    flex:1;
    text-align:center;
    text-decoration:none;
    padding:16px;
    border-radius:14px;
    font-weight:bold;
    border:none;
    cursor:pointer;
    transition:.2s;
    font-size:16px;
}

.save{
    background:#003b75;
    color:white;
}

.save:hover{
    transform:translateY(-2px);
}

.cancel{
    background:#e8edf5;
    color:#003b75;
}

.cancel:hover{
    transform:translateY(-2px);
}

</style>
</head>

<body>

<div class="container">

    <h1 class="title">
        Editar Producto
    </h1>

    <p class="subtitle">
        Actualiza la información del producto seleccionado
    </p>

    <form action="actualizar.php" method="POST">

        <input type="hidden"
        name="id"
        value="<?php echo $f['id']; ?>">

        <label>
            Nombre del producto
        </label>

        <input
        type="text"
        name="nombre"
        value="<?php echo $f['nombre']; ?>"
        required>

        <label>
            Precio
        </label>

        <input
        type="text"
        name="precio"
        value="<?php echo $f['precio']; ?>"
        required>

        <label>
            Stock disponible
        </label>

        <input
        type="text"
        name="stock"
        value="<?php echo $f['stock']; ?>"
        required>

        <div class="buttons">

            <button type="submit" class="btn save">
                Guardar cambios
            </button>

            <a href="admin.php" class="btn cancel">
                Cancelar
            </a>

        </div>

    </form>

</div>

</body>
</html>
