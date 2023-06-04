<?php
/*Abrir una nueva conección al servidor de MySQL*/
$link = mysqli_connect("localhost", "root", "estiven", "asistencia salon sena");
if (!$link) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;// Muestra la cadena de caracteres
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! A la base de datos asistencia salon sena " . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($link) . PHP_EOL;
$urlCaracteres = $_POST['urlCaracteres'];
/*Crear la cadena de caracteres que sera enviada y se guarda en query*/
$query = "INSERT INTO `pru` (`ID`, `urlCaracteres`,`FECHA`) VALUES (NULL, CURRENT_TIMESTAMP,'$urlCaracteres')"; 

/*Realizar la consulta en la base de datos (escribir en este caso puesto que se uso INSERT INTO)*/
if (mysqli_query($link, $query)) {
  echo "Nuevo dato escrito satisfactorimente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
echo "ECHO";

?>