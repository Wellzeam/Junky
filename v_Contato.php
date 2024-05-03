<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["fone"];
$empresa = $_POST["empresa"];
$cpfcnpj = $_POST["cpfcnpj"];
$endereco = $_POST["ender"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["msg"];
include("libs/banco.php");
$sql = "insert into Contato (Nome, Email, Telefone, Empresa, CPF_CNPJ, Endereco, Cidade, Estado, Assunto, Mensagem) values('$nome','$email','$telefone','$empresa','$cpfcnpj','$endereco','$cidade','$estado','$assunto','$mensagem')";
if (mysql_query($sql, $conexao) or die(mysql_error())) {
    echo "Sucesso";
} else {
    echo "Falhou";
}
