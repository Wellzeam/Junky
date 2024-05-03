<?php
$servidor = "10.1.1.50";
$usuario = "root";
$senha = "";
$nome_banco = "prova_php_william";
$conexao = mysql_connect($servidor, $usuario, $senha);
mysql_select_db($nome_banco, $conexao);
