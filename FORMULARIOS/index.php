<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio formulario</title>
</head>

<body>
    <?php if (isset($_POST['nombre'])) { ?>
        <ul>
            <li>Nombre:<b> <?php echo $_POST['nombre']; ?></b></li>
            <li>Edad: <b><?php echo $_POST['edad']; ?></b></li>
            <li>Email: <b><?php echo $_POST['email']; ?></b></li>
            <li>Telefono: <b> <?php echo $_POST['tel']; ?></b></li>
            <li>Curso:<b> <?php echo $_POST['curso']; ?></b></li>
            <li>Ganas: <b><?php echo $_POST['Ganas']; ?></b></li>
            <li>Gastas: <b><?php echo $_POST['Gastas']; ?></b></li>
            <li>Te queda: <?php echo $_POST['Ganas'] - $_POST['Gastas'];?></li>
        </ul>
        <!-- COMO SE ABRE EL PHP-->
    <?php } else { ?>
        <form target="_self" name="form" action="index.php" method="post">
            <!-- HTML MOSTRAMOS EL FORMULARIO ACTION "index.php"-->

            <ul>
                <!-- H1 Y H2 aqui van dentro de la etiqueta ul para que no se solapen con los campos ya que este UL esta en posicion absoluta -->
                <h2>Envíanos tus datos</h2>
                <h1>Cubre el formulario</h1>
                <!-- 
                Empiezan los campos de formulario
             -->
                <li>
                    <!-- Campo obligatorio tipo texto-->
                    <label for="nombre"><span class="required">*</span> Tu nombre</label><br>
                    <input type="text" name="nombre" required>

                </li>
                <li>
                    <!-- Campo tipo numérico-->
                    <label for="edad">Tu edad</label><br>
                    <input type="number" name="edad">

                </li>
                <li>
                    <!-- Campo obligatorio tipo Email-->
                    <label for="email"><span class="required">*</span> Email</label><br>
                    <input type="email" name="email" id="email" required>

                </li>
                <li>
                    <!-- Campo tipo Tel (teléfono)-->
                    Teléfono <br>(formato xxx yyy zzz):<br>
                    <input type="tel" name="tel" <span>(000) 000-0000 x12387</span>
                </li>
                <li>
                    <!-- inputs tipo Radio-button Llevan el mismo nombre 
                    para que se reciba un solo dato. Es un solo campo con dos inputs que
                    se marca además como obligatorio
                -->
                    <span class="required">*</span> ¿Cómo vendrás al centro?
                    <hr>
                    <input type="radio" id="vehiculo" name="comoviene" value="vehiculo" required>
                    <label for="vehiculo">Tengo vehículo</label><br>
                    <input type="radio" id="andando" name="comoviene" value="andando">
                    <label for="andando">Voy andando</label>
                </li>
                <li>
                    <!-- Campo tipo select, que crea un menú desplegable con las ociones
                -->
                    ¿Qué curso quieres?
                    <label for="curso">Elige uno</label>

                    <select name="curso" id="curso">
                        <option value="">Elige uno...</option>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <!-- Este sería el valor seleccionado por defecto
                -->
                        <option value="JS" selected>JAVASCRIPT</option>
                    </select>
                </li>
                <li>
                    <!-- Campo tipo numérico-->
                    <label for="Ganas">Ganas</label><br>
                    <input type="number" name="Ganas">

                </li>
                <li>
                    <!-- Campo tipo numérico-->
                    <label for="Gastas">Gastas</label><br>
                    <input type="number" name="Gatas">

                </li>
                <li>
                    <!-- Botón de enviar.
                    Es un input pero no envía valores, 
                    aunque tiene un value que es el texto que se ve en el botón,  
                    y por defecto (si no se pone) es "submit".
                -->
                    <input type="submit" name="Enviar" value="Enviar">
                </li>
            </ul>
        <?php } ?>
</body>

</html>