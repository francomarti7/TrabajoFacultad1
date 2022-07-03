<?php

include("conectar.php");


if (isset($_POST['registerbut'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['pass']) >= 1 &&
        strlen($_POST['name']) >= 1 && strlen($_POST['surname']) >= 1){
            $user = trim($_POST['user']);
            $pass = trim($_POST['pass']);
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $consulta = "INSERT INTO usuarios(usuario, contraseña, apellido, nombre) VALUES ('$user','$pass','$name','$surname')";


            $verifica_usuario = mysqli_query($conex,"SELECT*FROM usuarios WHERE usuario='$user'");

            if (mysqli_num_rows($verifica_usuario) > 0 ){
                echo '
                <script>
                    alert("Usuario DUPLICADO intente nuevamente");
                    window.location = "registrate.php";
                </script>

                ';
                exit();
            }

            $resultado = mysqli_query($conex,$consulta);

            if ($resultado){
                ?> 
                
                <script>
                    alert("Usuario Registrado Exitosamente");
                    window.location = "index.php";
                </script>
                '
            <?php
            } else {
                ?> 
                <h3 class="bad"> ¡USUARIO OCUPADO! </h3>
                <?php
            }

            

    }   else {
        ?>
        <h3 class="bad">¡Por Favor complete los campos!</h3>
        <?php
    }   
    
    
}





?>
