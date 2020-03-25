<?php

include("../php/ClassConexao.php");
include("../php/ClassCrud.php");

$Crud=new ClassCrud();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "cadastro",
    "id=?",
    array(
       $IdUser
    )
);

echo "Dado deletado com sucesso!";