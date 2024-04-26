<?
session_start();
include ("../libs/banco.php");
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$sair=$_GET['sair']; // SÓ FUNCIONA COM O GET
unset($sql, $result);
$sql="SELECT * FROM ADM WHERE USUARIO='$usuario' AND SENHA='$senha'";
$result=mysql_query($sql) or die(mysql_error());//executa o comando sql e guarda na variavel result
$existe=mysql_num_rows($result);//conta a qtd de linhas da variavel result
if ($existe>0){//se existir alguma linha ele entra
$linha=mysql_fletch_array($result);
$usuario2=$linha["USUARIO"];
$senha2=$linha["SENHA"];
$_SESSION['usuario']=$usuario2;
$_SESSION['senha']=$senha2;
header('Location:adm.php');
?>
<?
$erro=false;
}else{
$erro=true;
}
if ($erro==true){
include ("../libs/estilos.php");
echo "<br><br><br><br><center><font class='texto1'> E-mail ou Senha Inválida!<br> Tente Novamente!</font>";
echo "<br><br><font class='texto1> Clique em <a class='link2' href='javascript:hystory.back(-1)' target='pri'> Voltar</a> para corrigir </font>";
}
?>





