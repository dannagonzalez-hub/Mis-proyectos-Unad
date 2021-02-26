
<?php

$PRODUCTO = $_POST['Producto'];
$PRECIO = $_POST['Precio'];
$CANTIDAD =$_POST['Cantidad'];

$SUBTOTAL = $PRECIO * $CANTIDAD;
   
$FORMAPAGO = $_POST['formapago'];



if ($FORMAPAGO == 'Tarjeta') {
	
	$DESCUENTO = $SUBTOTAL * 0.2;

}else{

	$DESCUENTO = $SUBTOTAL* 0.1;
}

	$TOTAL= $SUBTOTAL- $DESCUENTO;


?>

<!DOCTYPE html>
<html>
<head>

	
	<title>RECIBO</title>
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
    </head>

<body>
 <h1> TOTAL </h1>
 <p>Producto: 				<?php 	echo $PRODUCTO;   ?> </p> 
 <p>Precio: 				<?php 	echo $PRECIO;     ?> </p>
 <p>Cantidad: 				<?php 	echo $CANTIDAD;     ?> </p>
 <p>Forma de pago: 			<?php   echo $FORMAPAGO;     ?> </p>
 <p>Subtotal: 				<?php   echo $SUBTOTAL;     ?> </p>
 <p>Descuento: 				<?php   echo $DESCUENTO;     ?> </p>
 <p>Total: 					<?php   echo $TOTAL;     ?> </p>




</body>
</html>