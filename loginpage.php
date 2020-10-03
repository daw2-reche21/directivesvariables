<?php
session_unset();
?>
<html>
 <head>
  <title>Login </title>
 </head>
 <body>
  <form method="post" action="mainpage.php">
   <p>Enter your username: 
    <input type="text" name="usuario"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="contrasenya"/>
   </p>
   <p>
    <input type="submit" name="aceptar" value="Dale"/>
   </p>
  </form>
  
 </body>
</html>
