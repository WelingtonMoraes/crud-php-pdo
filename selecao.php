<?php
include("php/ClassConexao.php");
include("php/ClassCrud.php");
?>
<!-- font do google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<head>
    <link rel="stylesheet" type="text/css" href="css/StyleTable.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="right">
        <h1>Lista de usuarios<h1>
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
                    <button><a href="<?php echo "update.php?id={$Fetch['id']}"; ?>">editar</a></button>
                    <button id="btn<?php echo ($Fetch['id']); ?>" value="<?php echo ($Fetch['id']); ?>">excluir</button>
                    
                    <script type="text/javascript" language="javascript">
                        $(document).ready(function(){
                                
                            $("#btn<?php echo ($Fetch['id']); ?>").click(function(event){
                                var exclui = $("#btn<?php echo ($Fetch['id']); ?>").val();
                                if (confirm('Deseja excluir ?')) {
                                    location.href= "controllers/ControllersDelete.php?id=" + exclui;
                                }
                            });
                        });
                    </script>
                    
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>