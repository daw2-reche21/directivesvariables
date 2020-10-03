<?php
session_start();
$_SESSION['nombre'] = $_POST['usuario'];
$_SESSION['contra'] = $_POST['contrasenya'];
$_SESSION['autentificacio'] = 0;
setcookie("username","Pere",time()+60);

//Check username and password information
if (($_SESSION['nombre'] == 'Pere') and
    ($_SESSION['contra'] == '12345')) {
    $_SESSION['autentificacio'] = 1;
} else {
    echo 'Has possat alguna cosa malament, torna a fer-ho crack';
    exit();     
}
?>
<html>
 <head>
  <title>Pagina principal <?php echo $_GET['titulo'];?></title>
 </head>
 <body>
<?php

setlocale(LC_ALL,"es_ES");
$dia = ("Today is: ");
$titulo=urlencode('Conoce tu dia');

echo $dia.date("l");
echo '</br>';


?>
 <form method="post" action="acierto.php">
   <p>Traduce el día que te ha salido al castellano
    <input type="text" name="comparacion"/>
   </p>
   <p>
    <input type="submit" name="aceptar" value="Aceptar"/>
   </p>
</form>


 </body>
</html>