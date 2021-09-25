<?php 
include index.php;
//Cantidad de producto y precios,adicional la forma de pago con la que se paga esto hace parte del formulario
$articulo = $_POST ['articulo'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$stotal = $precio * $cantidad;
$formadepago = $_POST['formadepago'];
//El siguiente es para evaluar la forma de pago de los diferentes articulos si es por tarjeta de credito por neki o por efectivo se utilizan condicionales como if else y elseif
if($formadepago == 'Credito' ) {
$descontar = $stotal * 0.3;
}elseif($formadepago == 'Nequi' ){
$descontar = $stotal* 0.2;   
}else{
$descontar = $stotal * 0.1;
}
$total = $stotal - $descontar;
?>
<?php
?>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>articulos</title>
</head>
<body>
<?php
//aqui podemos ver articulos precios cantidades formas de pago subtotal descuentos y el total final el siguiente codigo esta realizad para que se muestren los resultados 
?>
<p>articulo: <?php echo $articulo;?></p>
<p>precio: <?php echo $precio;?></p>
<p>cantidad: <?php echo $cantidad;?></p>
<p>formadepago: <?php echo $formadepago;?></p>
<p>stotal: <?php echo $stotal;?></p>
<p>descontar: <?php echo $descontar;?></p>
<p>Total: <?php echo $total;?></p>
<?php 
echo"<p>Gracias por su compra esperamos que la disfrute si desea comprar algo mas regargue la pagina </p>";
?>
<h1>lo esperamos vuelva pronto rey </h1>
</body>
</html>
