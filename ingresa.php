<?php
include("conectar.php");


if (isset($_POST['addbut'])) {
    if (strlen($_POST['apellido']) >= 1 && strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['DNI']) >= 1 && strlen($_POST['nroagente']) >= 1){
            $ape = trim($_POST['apellido']);
            $nom = trim($_POST['nombre']);
            $dni = trim($_POST['DNI']);
            $nroagen = trim($_POST['nroagente']);
            $consulta2 = "INSERT INTO agentes(Apellido, Nombre, DNI, Agentenumero) VALUES ('$ape','$nom','$dni','$nroagen')";


            $verifica_dupli = mysqli_query($conex,"SELECT*FROM agentes WHERE DNI='$dni'");

            if (mysqli_num_rows($verifica_dupli) > 0 ){
                echo '
                <script>
                    alert("Agente DUPLICADO intente nuevamente");
                    window.location = "main.php";
                </script>

                ';
                exit();
            }

            $resultado2 = mysqli_query($conex,$consulta2);

            if ($resultado2){
                ?> 
                
                <script>
                    alert("Usuario Registrado Exitosamente");
                </script>
                
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
