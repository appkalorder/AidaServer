<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion Registro</title>
    <link rel="stylesheet" href="CSS/Encabezado.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/Validacion.css">
</head>
<body>
    <header class="menu">
        <logo>
            <p>Aida</p> 
            <p>Server</p>
        </logo>

        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="">Servicio</a></li>
            <li><a href="">Quienes Somos</a></li>
        </ul>
    </header>  
    
    <section>
        <h2>Validacion Registro</h2>
        <?php
            if ($_GET['Pass'] == $_GET['PassVer']) {
                echo "  <h3>Se registro exitosamente</h3> 
                        <a href='index.html'>Continuar</a>
                ";
            }else{
                echo "  <h3>Las contraseñas no son iguales</h3> 
                        <a href='Registro.html'>Regresar</a>
                ";
            }
        ?>
    </section>

    <footer>
        <div>
            <h3>AYUDA</h3>
            <ul>
                <li><a href="">Contactanos</a></li>
                <li><a href="https://maps.app.goo.gl/uR5rZsziNosxAEyR8">Ubicanos</a></li>
            </ul>
        </div>
        <div>
            <h3>INFORMACION DEL SITIO</h3>
            <ul>
                <li><a href="">Terminos y condiciones</a></li>
                <li><a href="">Quienes Somos</a></li>
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