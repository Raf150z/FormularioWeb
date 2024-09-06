# Formulario Web
## Formulario en HTML
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormularioWeb</title>
</head>
<body>

    <form action="RecogerWeb.php" method="POST">
    <label for="nombre" >Nombre completo: </label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre completo">

    <br>

    <label for="edad">Edad: </label>
    <input type="number" id="edad" name="edad" placeholder="Edad">

    <br>

    <label for="calificacion">Calificacion: </label>
    <input type="range" id="calificacion" name="calificacion" min="1" max="10">

    <br>

    <label for="color">Color: </label>
    <input type="color" id="color" name="color">

    <br>

    <label for="hora">Hora: </label>
    <input type="time" id="hora" name="hora">

    <br>

    <label for="fecha">Fecha: </label>
    <input type="date" id="fecha" name="fecha">

    <br>

    <label for="correo">Correo electronico:</label>
    <input type="email" id="email" name="email" placeholder="Ejemplo@gmail.com">

    <br>

    <label for="genero">Genero:</label>
    <select id="genero" name="genero" require>
        <option value="hombre">Hombre</option>
        <option value="mujer">Mujer</option>
        <option value="otro">otro</option>
    </select>

    <br>

    <label for="estado">Estado Civil:</label>
    <label for="soltero/a">
        <input id="soltero" type="radio" name="estadoCivil" value="soltero"> Soltero/a
    </label>
    <label for="casado/a">
        <input id="casado" type="radio" name="estadoCivil" value="casado"> Casado/a
    </label>
    <label for="otro">
        <input id="otro" type="radio" name="estadoCivil" value="otro"> Otro
    </label>

    <br>

    <textarea id="comentario" name="comentario" cols="50" rows="10"></textarea>

    <br>

    <label for="aceptarTYC">Aceptar terminos y condiciones</label>
    <input type="checkbox" id="terminosYC" name="terminosYC">

    <br>

    <input type="submit" value="Enviar">

    </form>
</body>
</html>
```

## Recibir datos y mostrar en tabla en PHP

```php
<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$calificacion = $_POST['calificacion'];
$color = $_POST['color'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$genero = $_POST['genero'];
$estadoCivil = $_POST['estadoCivil'];
$comentario = $_POST['comentario'];
$terminosYC = ($_POST['terminosYC']) ? 'Terminos aceptados' : 'Terminos no aceptados';

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Campo</th><th>Valor</th></tr>";
echo "<tr><td>Nombre completo</td><td>" . htmlspecialchars($nombre) . "</td></tr>";
echo "<tr><td>Edad</td><td>" . htmlspecialchars($edad) . "</td></tr>";
echo "<tr><td>Calificación</td><td>" . htmlspecialchars($calificacion) . "</td></tr>";
echo "<tr><td>Color</td><td style='background-color: " . htmlspecialchars($color) . ";'>" . htmlspecialchars($color) . "</td></tr>";
echo "<tr><td>Hora</td><td>" . htmlspecialchars($hora) . "</td></tr>";
echo "<tr><td>Fecha</td><td>" . htmlspecialchars($fecha) . "</td></tr>";
echo "<tr><td>Correo electrónico</td><td>" . htmlspecialchars($email) . "</td></tr>";
echo "<tr><td>Género</td><td>" . htmlspecialchars($genero) . "</td></tr>";
echo "<tr><td>Estado Civil</td><td>" . htmlspecialchars($estadoCivil) . "</td></tr>";
echo "<tr><td>Comentario</td><td>" . htmlspecialchars($comentario) . "</td></tr>";
echo "<tr><td>Aceptar términos y condiciones</td><td>" . htmlspecialchars($terminosYC) . "</td></tr>";
echo "</table>";
?>

```