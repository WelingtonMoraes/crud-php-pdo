<!DOCTYPE html>
<html lang="pt-br">
	<!-- font do google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<!-- script para icones de redes sociais -->
	<script src="https://use.fontawesome.com/62e43a72a9.js"></script>
	<head>
		<link rel="stylesheet" type="text/css" href="css/Style.css">
    	<script type="text/javascript" src="js/JScript.js"></script>
	</head>
	<?php
		include("php/ClassConexao.php");
		include("php/ClassCrud.php");
		$Crud=new ClassCrud();
	?>
	<body>
		<div class="left">
			<img src="img/doguinho.png" alt="Doguinho" class="doguinho">
		</div>
		<div class="right">
			<h1>Cadastre-se !</h1>
			<div class="form">
				<form method="POST" action="controllers/ControllersCadastro.php">
					<div id="gid">
						<input type="text" id="nome" name="nome" placeholder="Nome">
						<input type="tel" id="telefone" name="telefone" onkeypress="return onlynumber();" placeholder="Telefone" onkeyup="mascara( this, mtel );" maxlength="15" >
					</div>
					<div id="gid">
						<input style="width:80%;" type="text" id="email" name="email" placeholder="Email">
					</div>
					<div id="gid">
						<input type="date" id="" name="nascimento" placeholder="nascimento">
						<input type="text" id="" name="endereco" placeholder="Endereço">
					</div>
					<div id="gid">
						<input type="submit" value="Register Account">
					</div>
					<div id="gid">
						<hr/>
					</div>
					<div id="gid">
						<button type="submit" id="brn_google" class="btn btn-success">
							<i class="fa fa-google fa-lg"></i><a> Register with Google</a>
						</button>
					</div>
					<div id="gid">
						<button type="submit" id="brn_face" class="btn btn-success">
							<i class="fa fa-facebook fa-lg"></i><a> Register with Facebook</a>
						</button>
					</div>
					<div id="gid">
						<hr/>
					</div>
				</form>
				<a href="#" >Forgot password?</a><br>
				<a href="#" >Already have an account? Login!</a>
			</div>
		</div>
	</body>
</html>