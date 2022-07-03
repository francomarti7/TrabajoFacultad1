<?php
include("conectar.php");

session_start();

if (isset($_POST['delbut'])) {
    if (strlen($_POST['dnielim']) >= 1){
            $dnielim = trim($_POST['dnielim']);
        

            $verifica_dni = mysqli_query($conex,"SELECT*FROM agentes WHERE DNI ='$dnielim'");

            if (mysqli_num_rows($verifica_dni) == 0 ){
                echo '
                <script>
                    alert("El agente no existe, por favor ingrese otro DNI.");
                    window.location = "eliminar.php";
                </script>
                    
                ';
                exit();
            } 


            $resultado = mysqli_query($conex,"DELETE FROM agentes WHERE DNI='$dnielim'");

            if ($resultado) {
                ?>
                
                <script>
                    alert("Agente eliminado");
                    window.location = "eliminar.php";
                </script>

                
                <?php 
                
            
            }
            
         
    }    
}
    
    

?>


