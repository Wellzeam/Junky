<?php
include("libs/banco.php");
$id_usuario = $_GET["idcli"];
unset($sql);
$sql = "DELETE FROM carrinho WHERE id_usuario = '$id_usuario'";
mysql_query($sql);
header('Location:Carrinho.php');

?>
