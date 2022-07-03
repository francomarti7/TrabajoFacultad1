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

   <div class="recuadro_registro">
    <h1>Registrate</h1>
    <form method="post">
      <div class="txt_campo">
        <input type="text" name="user" required>
        <span></span>
        <label>Tu Usuario</label>
      </div>
      <div class="txt_campo">
        <input type="password" name="pass" required>
        <span></span>
        <label>Tu Contraseña</label>
      </div>
      <div class="txt_campo">
        <input type="text" name="name" required>
        <span></span>
        <label>Tu Nombre</label>
      </div>
      <div class="txt_campo">
        <input type="text" name="surname" required>
        <span></span>
        <label>Tu Apellido</label>
      </div>
      <input class="registro_boton" name="registerbut" type="submit" value="Registrar" >

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
    ?>

      
     
</body>
</html>