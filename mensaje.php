<?php

include("bd_php.php");

if(isset($_POST['enviar'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['number']) >= 1 && strlen($_POST['textArea']) >= 1 ){
        $name = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $number = $_POST['number'];
        $msj = $_POST['textArea'];
        $consulta = "INSERT INTO mensaje(nombre, celular, correo, msj) VALUES ('$name','$correo','$number','$msj')";
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
            ?>
            <h3>Se ha enviado Correctamente!</h3>
            <?php
        } else{ 
            ?>
            <h3>Ha ocurrido un error al enviar el mensaje</h3>
            <?php
        }
    }   else {
            ?>
            <h3>Porfavor Complete los Campos</h3>
            <?php
            

    }
}

?>