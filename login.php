

<html>
<head>
	<meta charset="UTF-8">
	<title>Reserva Medica</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  <link rel="stylesheet" href="css/styleIndex.css">
</head>
<body onload="botonesPrincipales()">
	<div class="background">
		<div class="page">
			
			<a href="index.php" id="logo">Login</a>

				<div id="botones" class="sidebar">

				</div>
			<div class="body">
				<div class="about"><h1>Bienvenido</h1></div>
				<?php 
 
					session_start();
					if(!isset($_SESSION['registrado'])){  ?>
							<div class="wrapper">
							
										<div class="container">
											
													
											<form class="form">
													<input type="email" id="correo" placeholder="Ingrese su Email">
													<input type="password" id="clave" placeholder="Ingrese su contraseña">
													<button  type="submit" id="login-button">Entrar</button>
											</form>
										</div>
													
								<ul class="bg-bubbles">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									</ul>
									</div>				
									
						</div>	
						<script src="js/index.js"></script>	
	<?php }
	else{    
			echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";?>         
    		
    		<button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
 			 <?php  }  ?>
			<div class="footer">
				
			</div>
	</div>
</body>
</html>