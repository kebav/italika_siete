<?php
if($_POST){
    
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user=="24160656@itoaxaca.edu.mx" && $pass=="24160656TSO"){
    header("Location: admin.php");
}else{
    echo "Datos incorrectos";
}
}
?>

<form method="POST">
Usuario:<br>
<input type="text" name="user"><br>

Password:<br>
<input type="password" name="pass"><br><br>

<input type="submit" value="Entrar">
</form>