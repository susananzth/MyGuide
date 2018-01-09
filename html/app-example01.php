<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="UTF-8"/>
	    <meta name="description" content="Página web de ejemplo de la clase n° 1 de FrontEnd."/>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1"/>
	    <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	    <link rel="stylesheet" type="text/css" href="../css/exam01-style.css"/>
	    <title>Puls4</title>
	</head>
	<body>
		<header>
		    <div class="logo left">
		    	<img src="../img/logo-exam01.png" alt="Puls4" title="">
		    </div>
		    <div class="titular">
		    	<h1 class="titulo">
		    		Puls4: comunidad profesional de gente atractiva
		    	</h1>
		    	<div>
		    		<a hreflang="ES" type="text/html" target="" class="filtro">Responsive Desing</a>
		    		<a class="boton">Publicar</a>
		    	</div>
		    </div>
		    <div class="usuario">
		    	<figure class="avatar">
		    		<img src="../img/avatar.jpg" title="" alt="Fredier">
		    	</figure>
		    	<a href="#" class="flechita">U</a>
		    </div>
		</header>
		<nav>
			<ul class="menu">
				<li><a href="#" hreflang="ES" type="text/html" target="">Python</a></li>
				<li><a href="#" hreflang="ES" type="text/html" target="">HTML5</a></li>
				<li><a href="#" hreflang="ES" type="text/html" target="">Javascript</a></li>
				<li><a href="#" hreflang="ES" type="text/html" target="">Django</a></li>
				<li><a href="#" hreflang="ES" type="text/html" target="">CSS3</a></li>
			</ul>
		</nav>
		<section class="section-html">
		    <div class="exam-html">
		        
		    </div>
		</section>
		<footer>
			<strong>Powered by Susana Piñero</strong>
		    <!-- ETIQUETA PARA COLOCAR DIRECCION DE CONTACTO -->
		    <address>Correo: <a href="mailto:susananzth@gmail.com" target="_top">
		            susananzth@gmail.com</a></address>
		</footer>
		<!-- Aquí estoy colocando jQuery desde las librerias de google. En la dirección
			 coloco // para solucionar el problema si la página web que estoy haciendo 
			 es http o https  -->
		<script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- En caso que haya fallado la carga de jQuery desde las librerias de google
			 coloco la condición para que tome el jQuery desde mi carpeta. -->
		<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js">
			window.jQuery || document.write('<script type="text/javascript" rel="script" src="js/jquery-3.2.1.min.js"><\/script>')
		</script>
	</body>
</html>
