<?php
session_start();

$error = "";

if($_POST){

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if(
        $user=="24160656@itoaxaca.edu.mx"
        && $pass=="24160656TSO"
    ){
        $_SESSION["login"] = true;
        $_SESSION["usuario"] = $user;

        $_SESSION["login"] = true;
        $_SESSION["usuario"] = $user;

        header("Location: admin.php");
        exit();
    }else{
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | Italika TecNM</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:
    linear-gradient(to right,#003b75,#0a5abf);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.container{
    background:white;
    width:100%;
    max-width:460px;
    border-radius:25px;
    padding:45px;
    box-shadow:0 8px 30px rgba(0,0,0,.2);
}

.title{
    text-align:center;
    color:#003b75;
    font-size:40px;
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    color:#666;
    margin-bottom:35px;
}

label{
    display:block;
    font-weight:bold;
    margin-bottom:10px;
    color:#333;
}

input{
    width:100%;
    padding:16px;
    border-radius:14px;
    border:1px solid #ddd;
    margin-bottom:25px;
    font-size:16px;
    outline:none;
}

input:focus{
    border-color:#0a5abf;
}

.btn{
    width:100%;
    border:none;
    background:#003b75;
    color:white;
    padding:16px;
    border-radius:14px;
    font-size:17px;
    font-weight:bold;
    cursor:pointer;
    transition:.2s;
}

.btn:hover{
    transform:translateY(-2px);
}

.back{
    display:block;
    text-align:center;
    margin-top:20px;
    text-decoration:none;
    color:#003b75;
    font-weight:bold;
}

.error{
    background:#ffe4e4;
    color:#b00020;
    padding:14px;
    border-radius:12px;
    margin-bottom:20px;
    text-align:center;
}

</style>
</head>
<body>

<div class="container">

    <h1 class="title">
        Iniciar Sesión
    </h1>

    <p class="subtitle">
        Accede al panel administrativo
    </p>

    <?php if($error!=""){ ?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

    <form method="POST">

        <label>
            Correo
        </label>

        <input
        type="text"
        name="user"
        placeholder="Ingresa tu correo"
        required>

        <label>
            Contraseña
        </label>

        <input
        type="password"
        name="pass"
        placeholder="Ingresa tu contraseña"
        required>

        <button type="submit" class="btn">
            Entrar
        </button>

    </form>

    <a href="index.php" class="back">
        ← Volver al inicio
    </a>

</div>

</body>
</html>
