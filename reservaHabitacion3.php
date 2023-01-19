
<?php
include './includes/templates/header.php';
require './conexion.php';
?>
   

<section class="bookrooms">
<div class container flex_space>
    <div class="text">
        <h1>Proceso de Reservacion</h1>
    </div>

    <!--Habitacion-->
    <h2>Tu habitacion</h2>
    <form class="gridrooms">
            <img src="build/img/roommaster.jpg" id="image" alt="Habitacion3" >
            <h5> <b>MASTER ROOM DE THE GRAND MAYAN </b></br>
                Este espacio cuenta con una recámara con cama king-size, baño con jacuzzi y terraza privada</br>   
                Baños: 1 </br>
                Personas: 2</br>
                Estacionamiento: 1</h5>
            <h5>Check In: </h5>
            <h5>Chek Out: </h5>
    </form>

    <!--Servicios--->
    <h2>Agregar Servicios</h2>
    <form class="gridrooms">
        <img src="build/img/plus.png" id="image" alt="Plus" >
        <h5> <b>Servicios Incluidos: </b></br>
            Wi-fi gratis </br>
            Alberca </br>
            Estacionamiento</h5>
        <h5><b>Agregar Servicio 1</b> </br>
            <select>
                <option value="0"> Servicios 1: </option>
                <option value="1"> Desayuno </option>
                <option value="2"> Planchado </option>
                <option value="3"> Lavanderia </option>
            </select></h5>

        <h5><b>Agregar Servicio 2</b> </br>
        <select>
            <option value="0"> Servicios 2: </option>
            <option value="1"> Desayuno </option>
            <option value="2"> Planchado </option>
            <option value="3"> Lavanderia </option>
        </select> </h5>
    </form>


    <!--Total--->
    <h2>Total</h2>
    <form class="gridrooms">
        <img src="build/img/dinero.webp" id="image" alt="Habitacion1" >
        <h5> <b>Habitacion</b></br>
            MXN $5999.00 </br>
            En Total con Impuestos Incluidos</h5>

        <h5> <b>Servicios</b></br>
            + MXN $999.00 </h5>
        <a href="reservaUsuario.php" class="boton-verde" >Confrimar</a>
    </form>

    </div>
</section>

    <?php
      include './includes/templates/footer.php';
    ?>
    </body>
</html>