<?php

if (isset($enviar)) {
	$username = clear($username);
	$password = clear($password);

	$q = mysql_query("SELECT=FROM usuario WHERE username = '$username' AND password ='$password'");

	if(mysql_num_rows($q)>0)¨{
			$r = mysql_fetch_array($q)
			$SESSION["id"]= $r["id"];
			redir("?p=usuario");

	
	}else{
		alert("los datos no son validos");
		redir("?p=usuario");
	}

}




if(isset($_SESSION["id"])){
?>
	<a href="?p=agregar_producto">
		<button class=" btn btn-prymary"><i class="fa fa-plus-circle"> agregar productos</i> </button>


	</a>  

}

<center>
	<form method="post"action="" >

	<div class="centrar_login">
			<label><h2><i class="fa fa-key"></i>INICIAR SESION</h2></label>	
			</div>


			<div class="form-group">
			<input type="text" class="form-control" placeholder="usuario"name="username"/>
			</div>

			<div class="form-group">
			<input type="password" class="form-control" placeholder="contraseña"name="password"/>
			</div>
		 
			<div class="form-group">
			<button class="btn btn-submit"name="enviar"type="submit"><i class="fa fa-sign in" ></i>INGRESAR</button> 
	</div>

	</form>
</center>

 ?>
