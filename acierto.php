<?php
session_start();
setcookie("username","Pere",time()+60);
?>
<html>
 <head>
  <title>Acierto <?php echo $_POST['comparacion'];?></title>
 </head>
 <body>
<?php

$diasCast = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
 
$diaHoy=$diasCast[date('w')];

$dia=$_POST['comparacion'];

$_POST['comparacion'] ?? 'mal hecho';

if($_POST['comparacion']==$diaHoy){
    echo "<h1>Acertaste ".$_COOKIE["username"].". Hoy es dia ". $_POST['comparacion'] ."</h1>";
}else{

    
    echo "<a href='loginpage.php?'>";
    echo "Click on the link ".$_COOKIE['nombre']." to try again!"; 
    echo "</a>";
}


?>


 </body>
</html>