<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./Logica_Formulario.css" />
    <title>Formulario</title>
  </head>
  <body>
    <form action="registro.php" name="formulario" method="post">
      <img src="logoPuerelec.png" alt="Logo" />
      <label for="nombre">
        <p>Nombre</p>
        <input type="text" name="nombre" />
      </label>
      <label for="apellidos">
        <p>Apellidos</p>
        <input type="text" name="apellidos" />
      </label>
      <label for="estado">
        <p>Estado</p>
        <input type="text" name="estado" />
      </label>
      <label for="cantidad">
        <p>Cantidad</p>
        <input type="number" name="cantidad" />
      </label>
      <label for="observaciones">
        <p>Observaciones</p>
        <input type="text" name="observaciones" />
      </label>
      <!-- <label for="fechaInicio">
        <p>Fecha Inicio</p>
        <i class="fa-solid fa-calendar"></i>
        <input type="date" id="fechaInicio" />
      </label>
      <label for="fechaFinal">
        <p>Fecha Final</p>
        <i class="fa-solid fa-calendar-check"></i>
        <input type="date" id="fechaFinal" />
      </label>
      <label for="materialesUsados">
        <p>Materiales Usados</p>
        <i class="fa-solid fa-tools"></i>
        <input type="text" id="materialesUsados" />
      </label>
      <label for="costoPorUnidad">
        <p>Costo Unidad</p>
        <i class="fa-solid fa-dollar-sign"></i>
        <input type="number" id="costoPorUnidad" />
      </label> -->
      <button type="submit" name="register">Enviar</button>
    </form>
    <?php
    include("registro.php");
    ?>
  </body>
</html>
