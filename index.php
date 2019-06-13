<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la velocidad de escape de la Tierra</h2>
  <p>Descripción:</p>
  <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br>
a) ¿Cuál es la velocidad de escape de la Tierra?<br>

</section>
<section class="formulas">
<h2>Fórmulas</h2>
    Velocidad de escape=((2*G*M)/r)<sup>1/2</sup>
</section>
<section class="datos">
<h2>Datos:</h2>
   M= 5.972×10^24 kg<br>
   r= 6.371 Km.<br>
   G= 6.672×10^−11 N m2/kg2
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)La velocidad de escape de la Tierra es:<br>
    Velocidad de escape = ((2*(6.672×10^−11)*(5.972×10^24))/6.371)<sup>1/2</sup> <br>
    
</section>
<?php
     function calcula_densidad(){
        $Gr=6.672e-11;
        $Ma= 5.972e24;
        $radio= 6.371;
        $mo=(2*$Ma*$Gr);
        $mn=$mo/$radio;
        $mm=$Math.pow($mn,0.5);
        $densidad= $mm;
        return $densidad;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_densidad(). " kg/(metro cubico)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
