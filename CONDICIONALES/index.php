<?php
//Encabezado comentarios de bienvenida indicaciones e informacion para el usuario
include PRECIOS.PHP;
?>
<?php 
echo"<p>Bienvenido a la tienda de compras de RIOT GAMES empieza seleccionando cualquier articulo de tu interes </p>";
echo"<p> te ofrecemos un 30% de descuento si tu medio de pago es tarjeta de credito y con nequi un 20 % si pagas en efectivo seria un 10% </p>";
echo"<p>Ofrecemos 3 articulos diferentes Riot Points Pases de evento  y tarjetas de codigos que pueden contener premios increibles </p>";
echo"<p>IMPORTANTE TEN EN CUENTA LA FORMA DE PAGO LLENA TODOS LOS CAMPOS Y ASEGURATE DE TUS DECICIONES </p>";
?>
<?php
//Seleccion de articulo es decir o Riot Points pase de evento o tarjeta sorpresa estos son los diferentes articulos que puede comprar el usuario
?>
<form action="PRECIOS.PHP" method="post">
<h1>ARTICULOS RP PE TS </h1>
<label for="">articulo: </label>
<select name="articulo" id="">
<option value="RiotPoints">RiotPoints</option>
<option value="Pase de evento">Pase de evento</option>
<option value="Tarjeta con codigo">Tarjeta sorpresa</option>
<?php
//Seleccion de el precio la cantidad y forma de pago dependediendo de la forma de pago se hace un descuento
?>
</select>
<label for="">Precio: </label>
<input type="text" name="precio">
<label for="">Cantidad: </label>
<input type="text" name="cantidad">
<label for="">formadepago: </label>
<?php
//seleccion de medio de pago se usa un select al igual que anteriormente si se paga con credito efectivo tarjeta de regalo
?>
<select>
<option value="Credito">Credito</option>
<option value="Efectivo">Efectivo</option>
<option value="Nequi">Nequi</option>
</select>
<input type="submit" value="Comprar">
</form>
<?php
echo"<p>Todos los derechos reservados @riotgames.com tienda y desarrolladora de videojuegos </p>";
?>