<?php
//Llamamos al archivo en el que esta la conexión con la base de datos
$inc = include("con_db.php");
if ($inc) {
    //Creamos una consulta que nos coja todo los atributos de la tabla datos en nuestra BD
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $nombre = $row['nombre'];
            $apellidos = $row['apellidos'];
            $estado = $row['estado'];
            $cantidad = $row['cantidad'];
            $observaciones = $row['observaciones'];
            $fechareg = $row['fecha_reg'];
            ?>
                <div>
                    <h2><?php echo $nombre; ?></h2>
                    <div>
                        <p>
                            <b>ID: </b> <?php echo $id; ?> <br>
                            <b>Apellidos: </b> <?php echo $apellidos; ?> <br>
                            <b>Estado: </b> <?php echo $estado; ?> <br>
                            <b>Cantidad: </b> <?php echo $cantidad; ?> <br>
                            <b>Observaciones: </b> <?php echo $observaciones; ?> <br>
                            <b>Fecha Registro: </b> <?php echo $fechareg; ?>
                        </p>
                    </div>
                </div>
            <?php
        }
    }
}
?>