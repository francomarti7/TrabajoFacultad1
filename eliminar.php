<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/estilos.css">
    <title>Eliminar</title>
</head>
<body>
    
<header>
    <nav>
        <ul class="nav_links">
            <li><a class="navclass" href="main.php">Agregar</a></li>
            <li><a class="navclass" href="#">Eliminar</a></li>
            <li><a class="navclass" href="logout.php">Salir</a></li>
        </ul>
    </nav>
</header>



<div class="container">
 <h3>ELIMINAR AGENTE</h3>
 <div class="recuadro_del">

    <form action="elimina.php" method="post">
      <div class="txt_campo2">
        <input type="number" name="dnielim" placeholder="Inserte DNI del Agente" required>
        <span></span>
      </div>
     
      <input class="botonform" name="delbut" type="submit" value="Eliminar" >


      </div>
</div>





<footer>
      <div class="foot">
        <div style="margin-left: 30px ;" class="links" >
        <h4>Links Utiles</h4>
          <div class="lin">
          <a style="font-size: 12px ;" href="https://www.unca.edu.ar/">Pagina de la UNCA</a>
          <a  style="font-size: 12px ;" href="https://exactas.unca.edu.ar/">Pagina de FACEN</a>
          </div>
        </div>

        <div style="margin-left:70px; " class="links" >
        <h4>Mis Redes</h4>
          <div class="lin">
          <a style="font-size: 12px ;" href="https://www.linkedin.com/in/angel-franco-martinez-95563712a/">Linkedin</a>
          <a  style="font-size: 12px ;" href="https://github.com/francomarti7">Github</a>
          </div>
        </div>
          <div >
              <h4 style="margin-right: 30px;">Angel Franco Martinez</h4>
              <p class="textofoot">Estudiante de Tec. en Informatica.</p>
          </div>
       </div>

  </footer>



<?php
      include("registro.php");
 ?>

</body>
</html>