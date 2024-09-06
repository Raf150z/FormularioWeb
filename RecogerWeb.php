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
