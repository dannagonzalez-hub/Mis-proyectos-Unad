<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ofertas</title>
     <link href="newcss.css" rel="stylesheet" type="text/css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action="calcular.php"method="post">

	
		<h1>CALCULAR PEDIDO </h1>
		
		<label for= "">PRODUCTO:</label>

		<select name="Producto" id="">
		<option value = "Concreto">CONCRETO </option>
		<option value = "Montacarga">MONTACARGA ELECTRICO</option>
		<option value = "MontacargaManual">MONTACARGA MANUAL</option>
		<option value = "Tubos">TUBOS DE ACERO</option>
		</select>

	
		<label for= "">PRECIO:</label>
		<input type="text" name="Precio">
		<label for= "">CANTIDAD:</label>
		<input type="text" name="Cantidad">
		<label for= "">FORMA DE PAGO:</label>
	
		
		<select name="formapago">
		<option value="Tarjeta">TARJETA</option>
		<option value="Efectivo">EFECTIVO</option>
	</select>	
		


<input type="submit" value="CALCULAR">
</form>




	


</body>
</html>