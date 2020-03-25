<?php
/*
include("Class/ClassConexao.php");
include("Class/ClassCrud.php");

$nome  = $_POST['nome'];
$tele  = $_POST['telefone'];
$mail  = $_POST['email'];
$nasc  = $_POST['nascimento'];
$ender = $_POST['endereco'];

echo "$nome / $tele / $mail / $nasc / $ender";

$Crud=new ClassCrud();
$Crud->insertBD(
    "cadastro",
    "? , ? , ? , ?",
    array(
        $id,
        $nome,
        $sexo,
        $cidade,
    )
);*/

include("../php/ClassConexao.php");
include("../php/variaveis.php");
include("../php/ClassCrud.php");

$Crud=new ClassCrud();
$aqio = $Crud->insertDB(
        "cadastro",
        "id,nome,telefone,email,data,endereco",
        array(
            $id,
            $nome,
            $telefone,
            $email,
            $data,
            $endereco
        )
);

print_r($Crud);
echo"<br>";
echo "Cadastro Realizado com Sucesso!";
