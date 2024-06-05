<?php

include("con_db.php");

//register es como se llama el boton de enviar en el formulario 
if (isset($_POST['register'])) {

    if (strlen($_POST['nombre']) >= 1 && 
    strlen($_POST['apellidos']) >= 1 && 
    strlen($_POST['estado']) >= 1 && 
    strlen($_POST['cantidad']) >= 1 &&
    strlen($_POST['observaciones']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $estado = trim($_POST['estado']);
        $cantidad = trim($_POST['cantidad']);
        $observaciones = trim($_POST['observaciones']);
        $consulta = "INSERT INTO datos(nombre, apellidos, estado, cantidad, observaciones, fecha_reg) VALUES ('$nombre','$apellidos','$estado','$cantidad','$observaciones')";
        
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok"> ¡Te has inscrito correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad"> ¡Ups ha ocurrido un error!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad"> ¡Por favor complete los campos!</h3>
            <?php
        }
    }
}

/* //validamos datos del servidor
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "formulario";

$enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);
?>

<?php
    if(isset($_POST['registro'])){
        $nombre= $_POST ['nombre'];
        $apellidos= $_POST ['apellidos'];
        $estado= $_POST ['estado'];
        $cantidad= $_POST ['cantidad'];
        $observaciones= $_POST ['observaciones'];
        //Dejamos unas comillas vacias para el id autoincremental que se irá añadiendo acada uno de los formularios
        $insertarDatos = "INSERT INTO datos VALUES('$nombre', '$apellidos', '$estado', '$cantidad','$observaciones', '')";
    
        $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
    
    } */
?>


