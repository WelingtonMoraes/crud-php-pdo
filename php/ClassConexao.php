<?php

abstract class ClassConexao{
   
    //conexao com o BD
    protected function conectaBD()
    {
        try{
            $con=new PDO("mysql:host=localhost;bdname=crud","root","usbw");
            return $con;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}