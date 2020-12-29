<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="imagenes.css">
</head>

<body>
    <div class="imagenes">
        <ul >
            <li><img class="imgtecnm" src="IMG/Logo-TecNM-2017.png" width="300" height="180" ></li>
            <li><img class="imglobos" src="IMG/lobos GC png con borde.png" width="200" height="200"></li>
            <li><img class="imgmerida" src="IMG/020.png" width="180" height="180"></li>
        </ul>
    </div>
      
    <div class="contenedor">
        <ul class="menu">
            <li id="uno" class="seleccionado"><a href= "index.html">INICIO</a></li>
            <li id="dos"><a href= "galeria.html">GALERIA</a></li>
            <li id="tres"><a href= "contacto.html">CONTACTO</a></li>
            <li id="cuatro"><a href="quienesSomos.html">QUIENES SOMOS</a></li>
            <li id="cinco"><a href= "registro.php">REGISTRO LOBO</a></li>
            
        </ul>
    </div>
    <center>
        <form action="validar.php" method = "POST">
            Usuario <input type="text" name = "usuario">
            <br><br>
            Contraseña <input type="password" name = "contraseña">
            <br><br>
            <button type = "sumbit">Entrar</button>

        </form>
    </center>


    
</body>
</html>
