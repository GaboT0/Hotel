<?php
        include './includes/templates/header.php';
        require './conexion.php';

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            print '<script language="JavaScript">';
            print 'alert("Gracias por confiar en nosotros, te contactaremos lo antes posible");';
            print '</script>';
            $nombre = $_POST['nombre'];
            $email= $_POST['email'];
            $telefono= $_POST['telefono'];
            $mensaje= $_POST['mensaje'];
            $cli= $_POST['opciones'];
            $fecha= $_POST['fecha'];
            
            InsertContact($nombre,$email,$telefono,$mensaje,$cli,$fecha);
        }
        
        ?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>
        
        <form class="formulario" method="POST" action="./contacto.php">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" placeholder="Tu Teléfono" id="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>¿Ha sido cliente de nuestro hotel?</legend>
                
                    <label for="opciones">Es Cliente:</label>
                    <select name="opciones" id="opciones">
                        <option value="" disabled selected>-- Seleccione --</option>
                        <option  value="SI">Si</option>
                        <option value="No">No</option>
                    </select>

                    <label for="fecha">Fecha:</label>
                    <input name="fecha" type="date" id="fecha">
                
            </fieldset>

        
            <input type="submit" value="Enviar" class="button">
        </form>
    </main>

    <?php
      include './includes/templates/footer.php';
    ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>