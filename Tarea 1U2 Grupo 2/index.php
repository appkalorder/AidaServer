<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="Images/Logo.png">
    <link rel="stylesheet" href="CSS/Encabezado.css">
    <link rel="stylesheet" href="CSS/Inicio.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <header class="menu">
        <logo>
            <p>Aida</p> 
            <p>Server</p>
        </logo>

        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="Tiendas.html">Tiendas</a></li>
            <li><a href="Quienes Somos.html">Quienes Somos</a></li>
        </ul>

        <div>
            <?php
                if ($_POST == null) {
                    echo "
                        <a class='boton' href='/Login.html'>Iniciar Sesión</a>
                        <a class='boton' href='/Registro.html'>Registrate</a>
                    ";
                } else {
                    echo "
                        <div class='user' descrip='Usuario: ",$_POST["correo"]," Contraseña: ",$_POST["contraseña"],"'>
                            <img src='Images/User.png' alt='Correo:'>
                        </div>
                        ";      
                }
            ?>
        </div>
    </header>  

    <nav class="navbar">
        <div class="logo">
            <img src="Images/Logo.png" alt="">
        </div>
        <div class="seccion_nav">
            <ul>
                <li><a href="Hombres.html">Hombre</a></li>
                <li><a href="Mujeres.html">Mujer</a></li>
            </ul>
        </div>
        <div class="buscador">
            <input type="text">
            <icon>
                <span class="material-symbols-outlined">search</span>
            </icon>
        </div>
    </nav>

    <article class="promocion">
        <div class="prom-content">
            <div class="prom-degradado"></div>
            <img class="prom-logo" src="Images/LogoPortada1.png" alt="">
            <video class="prom-portada" src="Video/Portada1.mp4" autoplay muted loop></video>
        </div>
    </article>

    <div class="descripcion">
        <div class="desc desc1">
            <div class="letras">
                <h3>Publicitamos Negocios</h3>
                <p>Nos encargamos de dar visibilidad a los productos de nuestros vendedores, a traves de esta pagina.</p>
            </div>
            <img src="Images/tendedor.png" alt="">
        </div>
        <div class="desc desc2">
            <div class="letras">
                <h3>Encuentra lo que buscas</h3>
                <p>Tu ropa preferida de tus vendedores favoritos en una misma pagina.</p>
            </div>
            <img src="Images/Encuentra.png" alt="">
        </div>
        <div class="desc desc3">
            <div class="letras">
                <h3>Contacto directo</h3>
                <p>Habla directamente con nuestros vendedores para obtener tus productos deseados.</p>
            </div>
            <img src="Images/Contacto.png" alt="">
        </div>
    </div>

    <section class="categoria">
        <div class="categoria-content categoria-content1">
            <img src="Images/Hombre.png" alt="">
            <div class="cuadro" style="background-color: black;">
                <a href="Hombres.html"><b style="color: white;">Hombre</b></a>
            </div>
        </div>
        <div class="categoria-content">
            <img src="Images/Mujer.png" alt="">
            <div class="cuadro" style="background-color: white;">
                <a href="Mujeres.html"><b style="color: black;">Mujer</b></a>
            </div>
        </div>
    </section>

    <footer>
        <div>
            <h3>AYUDA</h3>
            <ul>
                <li><a href="contacto.html">Contactanos</a></li>
                <li><a href="https://maps.app.goo.gl/uR5rZsziNosxAEyR8">Ubicanos</a></li>
            </ul>
        </div>
        <div>
            <h3>INFORMACION DEL SITIO</h3>
            <ul>
                <li><a href="">Terminos y condiciones</a></li>
                <li><a href="Quienes Somos.html">Quienes Somos</a></li>
                <li><a href="Mision y Vision.html">Mision y Vision</a></li>
            </ul>
        </div>
        <div>
            <img src="Images/Logo.png" alt="">
            <h4>Aida-Server</h4>
        </div>
    </footer>
</body>
</html>