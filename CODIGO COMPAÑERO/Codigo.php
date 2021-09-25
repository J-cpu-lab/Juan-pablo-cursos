<?php
//Inicio del codigo 
?>
<!DOCTYPE html>
<html land="RiotGames">
    <head>
        <h1>Soporte RiotGames</h1>
        <?php 
echo"<p>Bienvenido al soporte tecnico en el siguiente programa realizaremos una serie de preguntas para analizar la probabilidad de falla de los diferentes servidores </p>";
echo"<p> se debe tener en cuenta que los datos que ponga son datos al año es decir ejemplo hago ejercicio 40 veces al año </p>";
echo"<p>Valores totalmente ciertos evite colocar algo erroneo ya que generaria un informe falso </p>";

?>
</head>
<body>
<?php
//Formulario y texto que se imprime para indicar donde se deben poner los valores
?>  
<form method="POST" action="Codigo.php" >
    <Label>Numero de Servidores </label><br>
    <input type="number" name="numero1"><br>
    <Label>Horas en funcionamiento</label><br>
    <input type="number" name="numero2"><br>
    <Label>Descuidos de los servidores</label><br>
    <input type="number" name="numero3"><br>
    <Label>Apagones de los servidores</label><br>
    <input type="number" name="numero4"><br>
    <Label>Ataques ciberneticos</label><br>
    <input type="number" name="numero5"><br>
    <Label>Personal no capacitado</label><br>
    <input type="number" name="numero6"><br>
 
    <button type="submit">Verificar</button>

</form>
</body>
<html>




<?php

//Variables (numeros que se indican en el formulario para luego sumarlos y dividirlos)

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$num3 = $_POST['numero3'];
$num4 = $_POST['numero4'];
$num5 = $_POST['numero5'];
$num6 = $_POST['numero6'];
$num7 = 10;

$suma=$num1+$num2+$num3+$num4+$num5; 

$Resultado=$suma%$num6*$num7;


//DA EL RESULTADO DE LA PROBABILIDAD DE FALLA
echo "Probabilidad de falla o daño grande: ".$Resultado."%";

echo"<p>DE 0% A 10% SEGURO</p>";
echo"<p>DE 10% A 20% LEVEMENTE EN RIESGO  </p>";
echo"<p>DE 30% A 50% PROXIMO A RIESGO </p>";
echo"<p>DE 50% A 70% ¡EN RIESGO!</p>";
echo"<p>DE 70% A 100% ¡PRECAUCION EN RIESGO!</p>";
echo"<p>MAYOR A 100% ¡ALERTA MUY EN RIESGO!</p>";

?>