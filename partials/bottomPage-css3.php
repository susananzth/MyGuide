<!-- Aquí estoy colocando jQuery desde las librerias de google. En la dirección
	 coloco // para solucionar el problema si la página web que estoy haciendo
	 es http o https  -->
<script type="text/javascript" rel="script" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- En caso que haya fallado la carga de jQuery desde las librerias de google
	 coloco la condición para que tome el jQuery desde mi carpeta. -->
<script type="text/javascript" rel="script">
    window.jQuery || document.write('<script type="text/javascript" rel="script" src="js/jquery-3.2.1.min.js"><\/script>')
</script>
<script type="text/javascript" rel="script">
    window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/jquery-3.2.1.min.js"><\/script>')
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script type="text/javascript" rel="script">
    window.jQuery || document.write('<script type="text/javascript" rel="script" src="js/bootstrap.min.js"><\/script>')
</script>
<script type="text/javascript" rel="script">
    window.jQuery || document.write('<script type="text/javascript" rel="script" src="../js/bootstrap.min.js"><\/script>')
</script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 1/12/2018
 * Time: 5:38 PM
 */