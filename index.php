
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="48" height="48" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>2</p>
                        </li>
                    </ul>
                    <!--
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver habitación
                    </a>-->
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="48" height="48" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <p>4</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>2</p>
                        </li>
                    </ul>
                    <!--
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver habitación
                    </a>-->
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="48" height="48" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="7" r="4" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>1</p>
                        </li>
                    </ul>
                    <!--
                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver habitación
                    </a>-->
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
        <a href="contacto.php" class="boton-amarillo">Contactános</a>
    </section>

   

    <?php
      include './includes/templates/footer.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>