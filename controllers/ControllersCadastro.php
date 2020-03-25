<?php

include("../php/ClassConexao.php");
include("../php/variaveis.php");
include("../php/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB(
    "cadastro",
    "?,?,?,?,?,?",
    array(
        $id,
        $nome,
        $telefone,
        $email,
        $data,
        $endereco
        )
);



echo "Cadastro realizado com sucesso";
