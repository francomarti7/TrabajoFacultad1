
<?php
/*  Trabajo practico realizado para la materia Base de datos de la Universidad Naciona de Catamarca por el alumno Angel Franco Martinez Matricula 0312*/

/*El proyecto simula un pequeño programa de un Login y un Register de nuevos usuarios para una vez
ingresando al sitio pueden modificar una base de datos, ingresando o quitando filas de la tabla de agentes
de una empresa ficticia  */

/* En este proyecto utilicé diversas herramientas aprendidas durante la materia como es el manejo,gestión,creación y uso de bases de datos con
PhpMyAdmin, lenguaje PHP y MYSQL como tambien conocimientos que ya tenia anteriormente sobre HTML,CSS,Javascript,Google Fonts 
aplicando tecnicas que nunca antes habia aplicado y que aplicaré y puliré en futuros proyectos personales y en el eventual 
trabajo final de la carrera */

/* El trabajo practico se encuentra actualmente en mi repositorio virtual de Github el link esta en el footer de la pagina  */

      include("registro.php");
      include("conecta_usuario.php");
   ?>


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
  <title>Login</title>
</head>
<body>


   <div class="recuadro">
    <h1>Login</h1>
    <form method="post">
      <div class="txt_campo">
        <input name="usuario" type="text" required>
        <span></span>
        <label>Usuario</label>
      </div>
      <div class="txt_campo">
        <input name="contra" type="password" required>
        <span></span>
        <label>Contraseña</label>
      </div>
      <input type="submit" name="login" value="Ingresar">
      <div class="registrar"> Si no tenes cuenta <a href="registrate.php">Registrate</a></div>
      

    </form>
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
      include("conecta_usuario.php");
    ?>

     

</body>

</html>