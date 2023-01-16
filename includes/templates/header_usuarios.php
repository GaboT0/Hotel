<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel 5 estrellas</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body> 
    
    <header class="header inicio">
        <div class="contenedor contenido-header">
        
            <div class="barra">
            
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre">Hotel <span class="logo__bold">5 Estrellas</span></h1>
                </a>
                    
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                    <nav class="navegacion">
                   
                        <a href="login.php">Cerrar sesión</a>
                        <a href=""></a>
                        <p>Menu</P>
                        <!-- MENU LATERAL -->
                        <div class="btn-menu"> 
                        <label for="btn-menu">&nbsp;☰&nbsp;</label>
                        </div>
                        <!-- MENU LATERAL -->
                    </nav>
                    
                </div>
            </div> <!--.barra-->
        </div>
    </header>
<!-- MENU LATERAL -->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Modificar perfil</a>
			<a href="#">Habitaciones reservadas</a>
			<a href="#">Cancelar reservacion</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
<!-- MENU LATERAL -->