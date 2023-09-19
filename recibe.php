<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    
    echo "Hola, mi nombre es $nombre $apellido y tengo $edad años.";
} 
else {
    echo "No se ha enviado ningún formulario.";
}
?>