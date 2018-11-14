<link href="css/mostraAlerta.css" rel="stylesheet">
<?php 
session_start();
function mostraAlerta($tipo){

	
	
	if(isset($_SESSION[$tipo])){
	?>

<h3 id="h1" class="alert alert-<?=$tipo?> col-md-offset-9" ><?=$_SESSION[$tipo]?></h3>
		
<?php
unset ($_SESSION[$tipo]);
}
}
?>
