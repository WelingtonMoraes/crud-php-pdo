<?php

include("../php/ClassConexao.php");
include("../php/variaveis.php");
include("../php/ClassCrud.php");
require_once('../PHPMailer/src/PHPMailer.php');
require_once('../PHPMailer/src/SMTP.php');
require_once('../PHPMailer/src/Exception.php');

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

include("../topMensagem.php");
echo"cadastro realizado com sucesso";
include("../bottomMensagem.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->Port = 587;

    $mail->setFrom('');
    $mail->addAddress('davi@signoweb.com.br');

    $mail->isHTML(true);
    $mail->Subject = "Teste de email via PHPMailer";
    $mail->Body = "nome: $nome <br>
    telefone: $telefone <br>
    email: $email <br>
    data: $data <br>
    endereco: $endereco";

    $mail->AltBody = 'Chegou o email teste do Canal TI';

    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}