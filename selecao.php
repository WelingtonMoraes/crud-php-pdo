<?php
include("php/ClassConexao.php");
include("php/ClassCrud.php");
?>
<!-- font do google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<head>
	<link rel="stylesheet" type="text/css" href="css/StyleTable.css">
</head>
<body>
    <table class="TabelaCrud">
        <tr>
            <td><strong>NOME</strong></td>
            <td><strong>EMAIL</strong></td>
        </tr>

        <!-- Estrutura de loop -->
        <?php
        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB(
            "*",
            "cadastro",
            "",
            array()
        );

        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?php echo $Fetch['nome']; ?></td>
            <td><?php echo $Fetch['email']; ?></td>
            <td>
                <a href="<?php echo "update.php?id={$Fetch['id']}"; ?>">edite</a>
                <a href="<?php echo "controllers/ControllersDelete.php?id={$Fetch['id']}"; ?>">exclui</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>