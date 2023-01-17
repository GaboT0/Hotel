
    <?php
    include './includes/templates/header.php';
    include './includes/templates/buscador.php';
    require './conexion.php';
    ?>

    

    <section class="seccion contenedor">
        <h2>Habitaciones de nuestro hotel</h2>

        <div class="contenedor-anuncios">
        <?php
            include './includes/templates/rooms.php';
        ?>
        </div> <!--.contenedor-anuncios-->

        <div class="alinear-derecha">
            <a href="habitaciones.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Tomate un descanso con nosotros</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactános</a>
    </section>

   

    <?php
      include './includes/templates/footer.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>