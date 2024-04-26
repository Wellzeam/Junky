<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Carrinho</title>        
        <!-- Meta específico para dispositivos móveis -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Folhas de estilo -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/flaticon.css" />

        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Color style -->
        <link rel="stylesheet" href="css/color.css">

        <!-- Folha de estilo personalizada -->
        <link rel="stylesheet" href="css/customIndex.css" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader --> 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--Fim do pré-carregador -->
        <!-- Navbar -->
        <nav class="navbar navbar-default bootsnav no-background navbar-fixed black">
            <div class="container">  

                <!-- Iniciar navegação de atributos -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>        
                <!-- Navegação de Atributos Finais -->

                <!-- Iniciar navegação de cabeçalho -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
            </div>   

            <!-- Iniciar menu lateral -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h6 class="title">Menu</h6>
                    <ul class="link">
                        <li><a href="Sobre.php">Sobre</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li><a href="Cadastro.php">Cadastre-se</a></li>
                        <li><a href="Atendimento.php">Atendimento</a></li>
			<li><a href="Login.php">Login</a></li>
			<li><a href="Carrinho.php">Carrinho</a></li>
                    </ul><br><br>
		    <h6 class="title">Continue Comprando</h6>
			<ul class="link">
                        	<li><a href="Menu.php">Menu</a></li>
                        	<li><a href="Bebidas.php">Bebidas</a></li>
                        	<li><a href="Petiscos.php">Petiscos</a></li>
                </div>
            </div>
            <!-- Menu do lado final -->
        </nav>

        <!-- Cabeçalho -->
        <header id="hello">

<br><br><br><br><br><br><br><br>
<?php
session_start(); //inicia a sessão
unset($codigo,$nome); //zera/destrói as variáveis
$id= @$_SESSION['id']; //guarda a sessão id na váriavel id

$num_produtos_carrinho=@$_GET["num_produtos_carrinho"];
?>
<table border="0" align="center">
<tr>

<?
if (isset($_SESSION['id']) && isset($_SESSION['senha'])){ //se existir a id e senha do usuário entra
	include("libs/banco.php"); //inclui arquivo banco para conexão
		@$ver_produto = $_GET['ver']; //pegar via get quando passa um valor via endereço ex: carrinho.php?ver=sim
@$produto= $_GET["produto"];
@$preco= $_GET["preco"];
@$qtd= $_GET["qtd"];
	if ($ver_produto=="sim"){
		unset($sql);
		$sql="INSERT INTO carrinho (nome,preco,id_usuario,qtd_produto) VALUES ('$produto',$preco,'$id','$qtd')";
		mysql_query($sql); //executa o camando sql da variavel $sql
	/********adicionar no carrinho***************************/
	}
	$sql_carrinho="SELECT id, nome, preco, qtd_produto FROM carrinho WHERE id_usuario = '$id'";
	$re = mysql_query($sql_carrinho) or die(mysql_error());
	$num_produtos_carrinho = mysql_num_rows($re);
	
	?>

	<table cellpadding="0" cellspacing="0" align="center">
		<tr>
			<td align="right"><font class="texto3"><h3>Você possui  <?php echo $num_produtos_carrinho; ?>  produto(s) em seu carrinho</h3></font></td><br>
		</tr>
	</table>
	<br>
	<table border="0" cellspacing="0" cellpadding="3" class="tablecarrinho" align="center">
		<tr>
			<td width="50%"><font class="texto12"><h5>Produto</h5></font></td>
			<td align="center"><font class="texto12"><h5>Quantidade&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></font></td>
			<td align="center"><font class="texto12"><h5>Valor Unitário&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></font></td>
			<td align="center"><font class="texto12"><h5>Valor Total</h5></font></td>
			<td align="center">&nbsp;</font></td>
		</tr>
	
	<?php
	$total_compra = 0;
	$x = 0;
	while($lc = mysql_fetch_array($re)){
		if (($x % 2)==0) { $bgcolor="#FFFFFF"; }
		else { $bgcolor="#DADADA";}
		$id_carrinho= $lc["id"];
		$qtd= $lc["qtd_produto"];
		unset($sql,$result,$linha);
		$produto = $lc["nome"];
		$preco = $lc["preco"];
		$valortotal = $preco * $qtd;
		$total_compra = $valortotal + $total_compra;
	?>
		
		<tr>
			<td class="tdcarrinho"><font class="texto10"><?php echo $produto; ?></font></td>
			<td align="center" class="tdcarrinho"><font class="texto10"><?php echo $qtd; ?></font></td>
			<td align="center" class="tdcarrinho"><font class="texto10"><?php echo $preco; ?></font></td>
			<td align="center"><font class="texto10"><?php echo $valortotal; ?></font></td>
			<td align="center"><a href="remover_do_carrinho.php?idpro=<?echo $id_carrinho;?>&idusu=<?echo $id;?>">&nbsp;&nbsp;&nbsp;<img src="images/lixo1.png" width="30" height="30" border="0" title="Excluir Produto"></a></td>
			
	
	<?php $x++;	
		}
}else{
?>

	<table cellpadding="0" cellspacing="8" border="0" class="tableerro" align="center">

		<tr>
			<td align="center"><font class="texto9"><h2>Você precisa efetuar o Login!</h2><br><br><br></font></td>
		</tr>
	</table>
	<table align="center" cellpadding="0" cellspacing="8" border="0">
		<tr>
			<td><form name="login" action="validalogin.php" method="post"></td>
		</tr>
		<tr>
			<td><font class="texto3"><h4>E-mail:</h4></font></td>
			<td><font color=black><input class="campo1" type="text" name="email" size="30" maxlength="30"></font></td>
		</tr>
	
		<tr>
			<td class='texto3'><h4>Senha:</h4></td>
			<td><font color=black><input class="campo1" type="password" name="senha" size="30" maxlength="8" /></font></td>
		</tr>
		<tr>
			<td align="center" colspan='2' height='50'><button type="submit" class="btn btn-default ">Entrar</button></td>
		</tr>
	</table>
	<br>
	<font class="texto3" align="center"><center>Se você não possui cadastro, <a class="link1" href="Cadastro.php" target='principal'>clique aqui</a> e cadastre-se gratuitamente.</font></center>
	<br /><br /><br /><br />
<?
}
?>
		</tr>
	</table>
	
<?php if($num_produtos_carrinho == 0){echo "";}else{ ?>

<br>
	<table border="0" cellspacing="5" cellpadding="0" align="center">
		<tr>
			<td colspan="2"><hr></td>
		</tr>
		<tr>
			<td width="85%"><b>Total da compra: R$</b></td>
			<td align="center"><font class="erro1"><b><?php if($num_produtos_carrinho == 0){ echo "R$ 0,00";}else{echo $total_compra;} ?></b></font></td>
		</tr>
	</table>
	<br><br><br>
<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td align="center">
		<td colspan="2" align="center" valign='bottom'><a href="finalizarcompra.php?idcli=<?echo $id?>"><button class="btn btn-default ">Finalizar</button></a></td>
		<td colspan="2" align="center" valign='bottom'><a href="limparcarrinho.php?idcli=<?echo $id?>"><button class="btn btn-default ">Limpar</button></a></td>
		</tr>
</table>

<?php
}
?>
<br><br><br><br><br><br>
	<!-- Fim Cabeçalho -->
	</header>
        
        <!-- Rodapé -->
        <footer>
	
            <!-- Container -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="subscribe">
                            <h4>Inscreva-se agora</h4>
                            <p>Subscreva a newsletter e
                                Pegue algumas coisas crocantes toda semana.</p>

                            <form role="form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="em" placeholder="Digite seu email aqui">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn send_btn">
                                                <i class="glyphicon glyphicon-send"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-xs-12 col-lg-offset-1 pull-right">
                        <div class="contact_us">
                            <h4>Contate-Nos</h4>
                            <a href="">william.bsi.mateus@gmail.com</a>

                            <address>
                                 Rua Domingos Machado de Lima,<br />
                                 421, Centro, Concórdia<br/>
                                 Santa Catarina <br/>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-xs-12 pull-right">
                        <div class="basic_info">
                            <a href="adm"><img class="footer_logo" src="images/footer_logo.png" alt="Burger" /></a>
                            <div class="footer-copyright">
                                <p class="wow fadeInRight" data-wow-duration="1s">
                                    Feito com 
                                    <i class="fa fa-heart"></i>
                                     por
                                    <a target="_blank" href="http://bootstrapthemes.co">William Mateus</a> <br/> 
                                    2018. Todos os direitos reservados
                                </p>
                            </div>					
                        </div>
                    </div>

                </div>
            </div>
<!-- Container end -->
        </footer>
<!-- Footer end -->

<!-- scroll up-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
<!-- End off scroll up->

        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>
        <!--main js-->
        <script type="text/javascript" src="js/main.js"></script>
    </body>	
</html>
