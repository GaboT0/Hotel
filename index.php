
    <?php
    include './includes/templates/header.php';
    require './conexion.php';
   
       
    ?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
           
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p></p>
                <h3>Habitacioón</h3>
                <p> 
                Nuestras habitaciones cumplen con la Promesa de limpieza IHG, lo que garantiza 
                que proporcionaremos un lugar limpio y cómodo para alojarse.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Su salud</h3>
                <p>
                Con la Promesa de limpieza Hotel 5 estrellas®, 
                los huéspedes pueden estar seguros que lo bueno no es suficiente ya que estamos 
                comprometidos con elevados niveles de limpieza. Eso significa habitaciones limpias, 
                bien mantenidas y ordenadas que cumplen con nuestros estándares. Si esto no es lo que 
                encuentras tras tu registro de entrada, prometemos corregirlo.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Recepción</h3>
                <p>
                Una experiencia eficiente en el registro de entrada y 
                el registro de salida le permite seguir su camino con facilidad y rapidez.
                </p>
            </div>
        </div>
    </main>

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