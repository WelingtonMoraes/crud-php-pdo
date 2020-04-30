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
        $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
	?>
	
	<body>
		<div class="left">
			<img src="img/doguinho.png" alt="Doguinho" class="doguinho">
		</div>
		<div class="right">
			<h1>Atualize os dados !</h1>
			<div class="form">
				<form method="POST" action="controllers/ControllersUpdate.php?id=<?php echo $IdUser; ?>">
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
						<input type="submit" value="Atualizar">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>