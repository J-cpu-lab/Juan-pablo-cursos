//BASE DE DATOS PARA ALMACENAR LOS DATOS DE LOS REGISTROS DE LOS USUARIOS DE RIOT GAMES
<?php
require 'basedatos.php'
;$message = '';

if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
  $sql = "INSERT INTO users (usuario,contraseña) VALUES (:usuario, :contraseña)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':usuario', $_POST['usuario']);
  $password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
  $stmt->bindParam(':contraseña', $password);

  if ($stmt->execute()) {
    $message = 'usuario nuevo creado correctamente :)';
} else {
    $message = 'su contraseña no ha sido creado correctamente intentelo de nuevo :(';
  }
}
?>
<?php 
echo "strong>FORMA PARTE DE RIOT GAMES.</strong>";
?>
//ESTO ES UN COMENTARIO
<?php 
echo"<p>JEFE DE PROYECTO JUAN PABLO CORREA!</p>";
echo "<p> Consultas de servidores!</p>";
?>
//Registro
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
</head>
<body>
    <h1>Registro</h1>
    <form action="Registro.php" methot="nuevo usuario">
        <input type="texto" nombre="usuario" placeholder="porfavor digite su nombre">
        <input type="contraseña" tipo="contraseña" placeholder="porfavor digite su contraseña">
        <input type="contraseña" tipo="contraseña" placeholder="confirme su contraseña">
        <input type="submit" value="enviar">
<?php require 'encabezado.php'?>

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


<span>o <a href="Registro.php">acceso</a></span>
<form action="Inicio1.php" methot="post">

<?php
echo "Registrarse";
echo "luego ingresar";
echo "Datos reales no falsos";
?>

<?php
echo "en caso de error consultar 3196318704";
echo "no alterar datos ni registrarse 2 veces";
?>

</form>
</body>
</html>