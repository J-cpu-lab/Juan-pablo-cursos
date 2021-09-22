<?php 

include("bd.php");

if ($conex) {
 echo "todo bien :)";
} else {
    echo "algo salio mal :(";
}
if (isset($_POST['registros'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos( nombre, email, fecha) VALUES ('$name','$email','$fecha')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
?>
<h3 class="ok">¡Felicitaciones Ya eres parte de Riot!</h3>
 <?php
	    } else {
?> 
	<h3 class="bad">¡Demonios algo inesperado ocurrio!</h3>
    <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
    }
}

?>