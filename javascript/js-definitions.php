<!DOCTYPE html>
<html lang="en" ng-app="js">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Página web donde practiqué todo lo aprendido sobre Javascript."/>
        <meta name="author" content="Susana Piñero"/>
        <meta name="keywords" content="javascript, web developer, frontend"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>

        <title>My Guide of Javascript | By Susana Piñero</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.6.7/angular-route.min.js"></script>
    </head>
    <body>
        <div ng-include src="'../partials/header.php'"></div>
        <hr/>
        <nav class="padd2 nav">
            <a href="../myGuide.php#!directory-javascript">Volver al directorio</a>
        </nav>
        <hr/>
        <section class="section padd5">
            <h4 class="text-center">Definiciones</h4>
            <div class="padd2 example">
                <h6>Variables</h6>
                <div class="padd2">
                    Las siguientes variables tienen nombres correctos:<br>
                    <blockquote class="code"><code>
                        var $numero1;<br>
                        var _$letra;<br>
                        var $$$otroNumero;<br>
                        var $_a__$4;<br>
                    </code></blockquote>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Agregando saltos de lineas y comillas en un alert</h6>
                <div class="padd2">
                    <blockquote class="code"><code>
                        var mensaje = "¡Hola Mundo!\n Qué fácil es incluis \'comillas simples\'\n y \"comillas dobles\"<br>
                        alert(mensaje);<br>
                        alert("Soy el segundo alert :)");
                    </code></blockquote>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Arreglos</h6>
                <div class="padd2">
                    <blockquote class="code"><code>
                        var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                    </code></blockquote>
                    <br/>Otra forma de declarar un array<br/>
                    <blockquote class="code"><code>
                        var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                    </code></blockquote>
                    <br/>Para imprimir un array<br/>
                    <blockquote class="code"><code>
                        alert(meses[1]);
                    </code></blockquote>
                    Imprime <b>Febrero</b>
                    <br/><br/>
                    <b>Propiedades y métodos de un array:</b><br/><br/>
                    La propiedad <b>length</b> imprime el número de elementos que hay en un array.<br/>
                    <blockquote class="code"><code>
                        alert(meses.length);
                    </code></blockquote>
                    Imprime <b>12</b><br/>
                    El método <b>push</b> agrega un elemento al final del array.<br/>
                    <blockquote class="code"><code>
                        meses.push("Mes13");
                    </code></blockquote>
                    <br/>
                    El método <b>unshift</b> agrega un elemento al principio del array.<br/>
                    <blockquote class="code"><code>
                        meses.unshift("Mes13");
                    </code></blockquote>
                    <br/>
                    El método <b>pop</b> elimina un elemento al final array.<br/>
                    <blockquote class="code"><code>
                        meses.pop();
                    </code></blockquote>
                    <br/>
                    El método <b>shift</b> elimina un elemento al principio array.<br/>
                    <blockquote class="code"><code>
                        meses.shift();
                    </code></blockquote>
                    <br/>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Imprimir un arreglo con un while</h6>
                <div class="padd2">
                    <blockquote class="code"><code>
                        var i=0;<br>
                        while (i<=11){<br>
                            alert(meses[i]);<br>
                            ++i;<br>
                        }
                    </code></blockquote>
                </div>
            </div>
            <div class="padd2 example">
                <h6>Matematica</h6>
                <div class="padd2">
                    <p>Suma: + | Resta: - | Multiplicación: * | División: /</p>
                    <blockquote class="code"><code>
                        var precioUnidad, cantidad, total;<br/>
                        precioUnidad=5;<br/>
                        cantidad=100;<br/>
                        total=precioUnidad*cantidad;<br/>
                        alert("El importe total de la compra es: " + total + "Bs.");<br/>
                    </code></blockquote>
                    <br/>
                    <blockquote class="code"><code>
                        let x = 4;<br>
                        x += 2; 
                    </code></blockquote>
                    <b>x equals 6</b><br/>
                    <blockquote class="code"><code>
                        let y = 4;<br/>
                        y -= 2; 
                    </code></blockquote>
                    <b>y equals 2</b><br/>
                    <blockquote class="code"><code>
                        let z = 4;<br/>
                        z *= 2; 
                    </code></blockquote>
                    <b>z equals 8</b><br/>
                    <blockquote class="code"><code>
                        let r = 4;<br/>
                        r++; 
                    </code></blockquote>
                    <b>r equals 5</b><br/>
                    <blockquote class="code"><code>
                        let t = 4;<br/>
                        t--; 
                    </code></blockquote>
                    <b>t equals 3</b><br/>
                    <blockquote class="code"><code>
                        let molecule = 16;<br/>
                        let particle = 18;<br/>
                        let assay = 3;
                    </code></blockquote>
                    <br/>
                    <b>Add and assign to molecule below</b><br/>
                    <blockquote class="code"><code>
                        molecule += 16;
                    </code></blockquote>
                    <br/>
                    <b>Multiply and assign to particle below</b><br/>
                    <blockquote class="code"><code>
                        particle *=6.02;
                    </code></blockquote>
                    <br/>
                    <b>Increment assay by 1</b><br/>
                    <blockquote class="code"><code>
                        assay++;
                    </code></blockquote>
                </div>
            </div>
        </section>
        <div ng-include src="'../partials/footer.php'"></div>
        <script type="text/javascript">
            var myApp = angular.module('js' , []);
            /*Dentro de esta variable voy a declarar el modulo de mi app*/
        </script>
    </body>
</html>