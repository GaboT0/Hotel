
    <?php
    include './includes/templates/header.php';

       include_once("conexion.php");
       //$varc = new Cconexion();
       //$varc ->ConexionBD();
       //$varc ->InsertBD();
       //$varc->DeleteBD();
       //$varc->UpdateBD();
       //$varc->SelectBD();
    ?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
           
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Habitacioón</h3>
                <p> 
                Nuestras habitaciones cumplen con la Promesa de limpieza IHG, lo que garantiza 
                que proporcionaremos un lugar limpio y cómodo para alojarse.​
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
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/sgarden.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>SUITE GARDEN</h3>
                    <p>Una habitación coloreada por el verde de la selva maya y nuestros 
                        jardines. La vista se complementa con su diseño mexicano contemporáneo.</p>
                    <p class="precio">$21,542.40 MXN</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>8</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>12</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver habitación
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/oceanview.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>SUITE OCEAN VIEW</h3>
                    <p>La habitación ideal para admirar el mar turquesa y la 
                        abundante vegetación del paraíso en el que nos encontramos.</p>
                        &nbsp;
                     ;
                    <p class="precio">$25,622.40 MXN</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>8</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver habitación
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/river.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>SUITE OCEAN FAMILY</h3>
                    <p>Es la opción de hospedaje perfecta para disfrutar en familia de 
                        los impresionantes colores del mar Caribe y de nuestras icónicas caletas.</p>
                    <p class="precio">$26,438.40 MXN</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>5</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>5</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>10</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver habitación
                    </a>
                </div><!--.contenido-anuncio-->
            </div><!--anuncio-->

        </div> <!--.contenedor-anuncios-->

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Tomate un descanso con nosotros</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo">Contactános</a>
    </section>

   

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados 2021 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>