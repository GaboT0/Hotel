
    <?php
    include './includes/templates/header.php';
    require './conexion.php';
    ?>

    <main class="contenedor seccion">
        
        <section class="book">
            <div class container flex_space>
                <div class="text">
                    <h1> Reserva Ahora</h1>
                </div>
                <div class="form">
                <form class="grid2">
                        <p>Ckeck In</p>
                        <p>Check Out</p>
                        <p>Numero de</p>
                        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp.
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        </p>
                    </div>
                </form>
                <form class="grid">
                    <input type="date" placeholder="Araival Date">
                    <input type="date" placeholder="Departure Date">
                    <input type="number" placeholder="Personas">
                    <div class="alinear">
                    <a href="login.php" class="boton-verde">Buscar</a>
                </div>
                </form>
                </div>
            </div>
        </section>
        
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