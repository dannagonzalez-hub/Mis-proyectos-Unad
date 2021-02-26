	  <?php
 mysql_connect($mysql_host,$mysql_user,$mysql_pass)or die ("Error al conectar con el servidor");
 mysql_select_db($db_mysql)or die ("error conectado a la base de datos");

function clear($var){
	htmlspecialchars($var)


	return $var

}

function check_admin(){

	if(!isset($_SESSION["id"]){
		redir("./");


	   }
   }

}






function redir($var){
?>
	<script>
		window.location = "<?=$var?>";
	</script>
<?php
die();
}

function alert($var){

	?>
	<script type="text/javascript">  
			alert("<?=$var");


	</script>
<?php
}



        ?>