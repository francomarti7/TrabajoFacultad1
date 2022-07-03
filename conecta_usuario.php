<?php
include("conectar.php");


if (isset($_POST['login'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contra']) >= 1){
            $usu = trim($_POST['usuario']);
            $cont = trim($_POST['contra']);

            $validar = mysqli_query($conex,"SELECT*FROM usuarios WHERE usuario='$usu' and contraseña='$cont'");
    
            if (mysqli_num_rows($validar) > 0 ){
                $_SESSION['usuario']=$usu;
                header("location: main.php");
                exit();
            } else {
                ?>
                
                <script>
                    alert("Usuario no existente por favor verifique sus datos.")
                    window.location = "index.php";
                </script>
                <?php
                
                exit();
            }

        }
    }  
    
    
    

?>
