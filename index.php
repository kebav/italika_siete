<?php
include("conexion.php");

$sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 6";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Italika TecNM | Axel Gabriel</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f4f6f9;
    color:#222;
}

/* NAVBAR */

header{
    background:white;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
    padding:15px 60px;
    position:sticky;
    top:0;
    z-index:100;
}

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:28px;
    font-weight:bold;
    color:#003b75;
}

nav a{
    text-decoration:none;
    color:#333;
    margin-left:25px;
    font-weight:bold;
    transition:0.3s;
}

nav a:hover{
    color:#0056b3;
}

/* HERO */

.hero{
    min-height:85vh;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:70px;
    background:linear-gradient(to right,#003b75,#0a5abf);
    color:white;
}

.hero-text{
    max-width:600px;
}

.hero-text h1{
    font-size:58px;
    margin-bottom:20px;
}

.hero-text p{
    font-size:20px;
    margin-bottom:30px;
    line-height:1.6;
}

.hero-buttons a{
    text-decoration:none;
}

.btn{
    display:inline-block;
    padding:15px 28px;
    border-radius:10px;
    font-weight:bold;
    transition:0.3s;
    margin-right:10px;
}

.btn-primary{
    background:white;
    color:#003b75;
}

.btn-primary:hover{
    transform:translateY(-3px);
}

.btn-secondary{
    background:transparent;
    border:2px solid white;
    color:white;
}

.hero-image img{
    width:500px;
    max-width:100%;
    border-radius:20px;
    box-shadow:0 8px 30px rgba(0,0,0,0.25);
}

/* SECTIONS */

.section{
    padding:70px;
}

.section-title{
    text-align:center;
    margin-bottom:50px;
    font-size:40px;
    color:#003b75;
}

/* PRODUCTOS */

.products{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:25px;
}

.card{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 4px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-content{
    padding:20px;
}

.card-content h3{
    color:#003b75;
    margin-bottom:10px;
}

.price{
    font-size:22px;
    font-weight:bold;
    color:#0a5abf;
}

.stock{
    margin-top:10px;
    color:#666;
}

/* MISION / VISION */

.about{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:30px;
}

.box{
    background:white;
    padding:35px;
    border-radius:20px;
    box-shadow:0 3px 15px rgba(0,0,0,0.08);
}

/* FOOTER */

footer{
    background:#003b75;
    color:white;
    text-align:center;
    padding:25px;
}

/* RESPONSIVE */

@media(max-width:900px){

.hero{
    flex-direction:column;
    text-align:center;
    gap:40px;
}

.hero-text h1{
    font-size:42px;
}

header{
    padding:20px;
}

.section{
    padding:40px 20px;
}

.navbar{
    flex-direction:column;
    gap:20px;
}

nav{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
}

}

</style>
</head>

<body>

<header>
    <div class="navbar">

        <div class="logo">
            Italika TecNM
        </div>

        <nav>
            <a href="/">← Cambiar proyecto</a>
            <a href="#productos">Productos</a>
            <a href="#nosotros">Misión / Visión</a>
            <a href="login.php">Login</a>
        </nav>

    </div>
</header>

<section class="hero">

    <div class="hero-text">
        <h1>
            Potencia el rendimiento de tu motocicleta
        </h1>

        <p>
            Encuentra refacciones confiables, accesibles y productos esenciales
            para mantener tu motocicleta lista para cualquier recorrido, sin preocuparse de nada.
        </p>

        <div class="hero-buttons">

            <a href="#productos" class="btn btn-primary">
                Ver catálogo
            </a>

            <a href="login.php" class="btn btn-secondary">
                Iniciar sesión
            </a>

        </div>
    </div>

    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1558981806-ec527fa84c39?w=1200" alt="Moto">
    </div>

</section>

<section class="section" id="productos">

    <h2 class="section-title">
        Productos Destacados
    </h2>

    <div class="products">

    <?php while($fila=mysqli_fetch_array($resultado)){ ?>

        <div class="card">

            <?php
$imagen = "img/default.jpg";
$nombre = strtolower($fila['nombre']);

if(stripos($nombre,"buj") !== false){
    $imagen = "img/bujia.jpg";

}elseif(stripos($nombre,"aceite") !== false){
    $imagen = "img/aceite.jpg";

}elseif(stripos($nombre,"filtro") !== false){
    $imagen = "img/filtro.jpg";

}elseif(stripos($nombre,"balata") !== false){
    $imagen = "img/balatas.jpg";

}elseif(
    stripos($nombre,"cadena") !== false ||
    stripos($nombre,"arrastre") !== false
){
    $imagen = "img/cadena.jpg";

}elseif(stripos($nombre,"chicote") !== false){
    $imagen = "img/chicote.jpg";

}elseif(stripos($nombre,"bater") !== false){
    $imagen = "img/bateria.jpg";

}elseif(
    stripos($nombre,"voltaje") !== false ||
    stripos($nombre,"fusible") !== false ||
    stripos($nombre,"bobina") !== false ||
    stripos($nombre,"estator") !== false ||
    stripos($nombre,"relevador") !== false ||
    stripos($nombre,"direccional") !== false ||
    stripos($nombre,"calavera") !== false ||
    stripos($nombre,"faro") !== false
){
    $imagen = "img/electrico.jpg";

}elseif(
    stripos($nombre,"llanta") !== false ||
    stripos($nombre,"camara") !== false
){
    $imagen = "img/llanta.jpg";

}elseif(stripos($nombre,"rin") !== false){
    $imagen = "img/rin.jpg";

}elseif(
    stripos($nombre,"manubrio") !== false ||
    stripos($nombre,"puño") !== false ||
    stripos($nombre,"espejo") !== false
){
    $imagen = "img/manubrio.jpg";

}elseif(stripos($nombre,"asiento") !== false){
    $imagen = "img/asiento.jpg";

}elseif(stripos($nombre,"salpicadera") !== false){
    $imagen = "img/salpicadera.jpg";

}elseif(stripos($nombre,"escape") !== false){
    $imagen = "img/escape.jpg";

}elseif(
    stripos($nombre,"motor") !== false ||
    stripos($nombre,"piston") !== false ||
    stripos($nombre,"cilindro") !== false ||
    stripos($nombre,"valvula") !== false ||
    stripos($nombre,"anillo") !== false ||
    stripos($nombre,"leva") !== false ||
    stripos($nombre,"empaque") !== false
){
    $imagen = "img/motor.jpg";

}elseif(stripos($nombre,"carburador") !== false){
    $imagen = "img/carburador.jpg";

}elseif(
    stripos($nombre,"gasolina") !== false ||
    stripos($nombre,"bomba") !== false
){
    $imagen = "img/gasolina.jpg";

}elseif(
    stripos($nombre,"pedal") !== false ||
    stripos($nombre,"posapie") !== false
){
    $imagen = "img/arranque.jpg";

}elseif(stripos($nombre,"amortiguador") !== false){
    $imagen = "img/amortiguador.jpg";

}elseif(stripos($nombre,"caja") !== false){
    $imagen = "img/caja.jpg";
}
?>

<img src="<?php echo $imagen; ?>" alt="Producto">

            <div class="card-content">

                <h3>
                    <?php echo $fila['nombre']; ?>
                </h3>

                <p class="price">
                    $<?php echo $fila['precio']; ?>
                </p>

                <p class="stock">
                    Stock disponible:
                    <?php echo $fila['stock']; ?>
                </p>

            </div>

        </div>

    <?php } ?>

    </div>

</section>

<section class="section" id="nosotros">

    <h2 class="section-title">
        Nuestra Filosofía
    </h2>

    <div class="about">

        <div class="box">
            <h2>Misión</h2>
            <br>

            <p>
                Proporcionar refacciones y productos confiables
                que contribuyan al mantenimiento, rendimiento
                y seguridad de motocicletas.
            </p>

        </div>

        <div class="box">

            <h2>Visión</h2>
            <br>

            <p>
                Consolidarnos como una alternativa confiable
                para usuarios que buscan disponibilidad,
                calidad y confianza.
            </p>

        </div>

    </div>

</section>

<footer>
    <p>
        © 2026 Italika TecNM | Proyecto académico TSO | Axel Gabriel
    </p>
</footer>

</body>
</html>
