<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Finalizar Compra</title>
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
				</ul>
			</div>
		</div>
		<!-- Menu do lado final -->
	</nav>

	<!-- Cabeçalho -->
	<header id="hello">

		<br><br><br><br><br><br><br>
		<table width="650px" cellpadding="0" cellspacing="0" align=center>
			<div class="product-big-title-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="product-bit-title text-center">
								<div align="center">
									<h2>Finalizar Compra</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br>
		</table>
		<?php
		include("libs/banco.php");
		include("libs/valor_formata.php");
		unset($id_usuario, $sql, $linha, $query);
		$id_usuario = $_GET['idcli'];
		$sql = "SELECT * FROM CLIENTES WHERE ID_CLIENTE = '$id_usuario'";
		$query = mysql_query($sql);
		while ($linha = mysql_fetch_array($query)) {
			$codigo		= $linha["ID_CLIENTE"];
			$nome		= $linha["NOME"];
			$email		= $linha["EMAIL"];
			$fone		= $linha["FONE"];
			$endereco	= $linha["ENDERECO"];
			$bairro		= $linha["BAIRRO"];
			$cidade		= $linha["CIDADE"];
			$estado		= $linha["ESTADO"];
			$cep		= $linha["CEP"];
			$cpf		= $linha["CPF"];
			$rg		= $linha["RG"];
		}

		unset($sql, $query, $linha);
		?>

		<table width="620px" cellpadding="0" cellspacing="1" class="tableerro" border="0" align="center" align=center>
			<tr>
				<td width="5%"></td>
				<td align="left">&nbsp;</td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="left">
					<font class="erro1">Atenção!</font>
				</td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="left">
					<font class="textoerro">&rsaquo;&nbsp;Confira todos os dados abaixo antes de finalizar a compra.</font>
				</td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="left">
					<font class="textoerro">&rsaquo;&nbsp;Caso haja alguma informação errada (Nome, Endereço, E-mail, etc) <a href="contausuario.php" class="link1">clique aqui</a> para alterar.</font>
				</td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="left">
					<font class="textoerro">&rsaquo;&nbsp;Preencha os campos quanto a forma de pagamento.</font>
				</td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td align="left">&nbsp;</td>
			</tr>
		</table>

		<br>

		<table width="650px" cellpadding="0" cellspacing="3" border="0" align=center>
			<tr>
				<td colspan="5">
					<font class="texto4"><b>
							<h4>Informações do cliente
						</b></font>
				</td>
				</h4>

			</tr>
			<tr>
				<td>
					<font class="texto3"><b>Nome:</b></font>
				</td>
				<td colspan="5">
					<font class="texto6"><?php echo $nome; ?></font>
				</td>
			</tr>
			<tr>
				<td>
					<font class="texto3"><b>E-mail:</b></font>
				</td>
				<td colspan="5">
					<font class="texto6"><?php echo $email; ?></font>
				</td>
			</tr>
			<tr>
				<td>
					<font class="texto3"><b>Telefone:</b></font>
				</td>
				<td>
					<font class="texto6"><?php echo $fone; ?></font>
				</td>
				<td>
					<font class="texto3"><b>Bairro:</b></font>
				</td>
				<td colspan="3">
					<font class="texto6"><?php echo $bairro; ?></font>
				</td>
			</tr>
			<tr>
				<td>
					<font class="texto3"><b>Endereço:</b></font>
				</td>
				<td>
					<font class="texto6"><?php echo $endereco; ?></font>
				</td>
				<td>
					<font class="texto3"><b>CEP:</b></font>
				</td>
				<td>
					<font class="texto6"><?php echo $cep; ?></font>
				</td>

			</tr>
			<tr>
				<td>
					<font class="texto3"><b>Cidade:</b></font>
				</td>
				<td>
					<font class="texto6"><?php echo $cidade; ?></font>
				</td>
				<td>
					<font class="texto3"><b>Estado:</b></font>
				</td>
				<td>
					<font class="texto6"><?php echo $estado; ?></font>
				</td>

			</tr>
			<tr>
				<td>
					<font class="texto3"><b>CPF:</b></font>
				</td>
				<td>
					<font class="texto6"><?php echo $cpf; ?></font>
				</td>
				<td>
					<font class="texto3"><b>RG:</b></font>
				</td>
				<td colspan="3">
					<font class="texto6"><?php echo $rg; ?></font>
				</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
		</table>

		<?php
		$data = date("d/m/Y", time());
		?>
		<table width="650px" cellpadding="0" cellspacing="3" border="0" align=center>
			<tr>
				<td colspan="6">
					<font class="texto3"><b>
							<h4>Produtos</h4>
						</b></font>
				</td>
			</tr>
			<tr bgcolor="">
				<td width="7%">
					<font class="texto12">
						<h5>Código&nbsp;&nbsp;&nbsp;&nbsp;</h5>
					</font>
				</td>
				<td width="50%">
					<font class="texto12">
						<h5>Produto&nbsp;&nbsp;&nbsp;&nbsp;</h5>
					</font>
				</td>
				<td align="center">
					<font class="texto12">
						<h5>Quantidade&nbsp;&nbsp;&nbsp;&nbsp;</h5>
					</font>
				</td>
				<td align="center">
					<font class="texto12">
						<h5>Valor Unitário&nbsp;&nbsp;&nbsp;&nbsp;</h5>
					</font>
				</td>
				<td align="center">
					<font class="texto12">
						<h5>Valor Total&nbsp;&nbsp;&nbsp;&nbsp;</h5>
					</font>
				</td>
			</tr>

			<?php

			unset($sql_carrinho, $re, $num_produtos_carrinho);
			$sql_carrinho = "SELECT id, nome, preco, qtd_produto FROM carrinho WHERE id_usuario = '$id_usuario'";
			$re = mysql_query($sql_carrinho) or die(mysql_error());
			$num_produtos_carrinho = mysql_num_rows($re);

			$total_compra = 0;
			$x = 0;
			unset($sql, $result, $linha);
			while ($lc = mysql_fetch_array($re)) {
				if (($x % 2) == 0) {
					$bgcolor = "";
				} else {
					$bgcolor = "";
				}

				$id_produto	= $lc["id"];
				$qtd		= $lc["qtd_produto"];

				$sql = "SELECT id,nome,preco FROM carrinho WHERE id = '$id_produto'";
				$result = mysql_query($sql);
				while ($linha = mysql_fetch_array($result)) {
					$id	= $linha["id"];
					$nome	= $linha["nome"];
					$valor	= $linha["preco"];

					$valortotal = $valor * $qtd;
					$total_compra = $valortotal + $total_compra;
			?>
					<tr bgcolor="<?php echo $bgcolor; ?>">
						<td align="center">
							<font class="texto10"><?php echo $id_produto; ?></font>
						</td>
						<td>
							<font class="texto10"><?php echo $nome; ?></font>
						</td>
						<td align="center">
							<font class="texto10"><?php echo $qtd; ?></font>
						</td>
						<td align="center">
							<font class="texto10"><?php echo ($valor); ?></font>
						</td>
						<td align="center">
							<font class="texto10"><?php echo ($valortotal); ?></font>
						</td>

				<?php $x++;
				}
			}
				?>
					</tr>
					<tr>
						<td colspan="6">
							<font class="texto3">&nbsp;</font>
						</td>
					</tr>
		</table>
		<table width="650px" border="0" cellspacing="3" cellpadding="0" align=center>
			<tr>
				<td width="86%">
					<font class="texto3"><b>
							<h5>Total da compra:</h5>
						</b></font>
				</td>
				<td align="center">
					<font class="erro1"><b><?php if ($num_produtos_carrinho == 0) {
												echo "R$ 0,00";
											} else {
												echo "R$" . ($total_compra);
											} ?></b></font>
				</td>
			</tr>
		</table>

		<table width="650px" border="0" cellspacing="3" cellpadding="0" align=center>
			<tr>
				<td>
					<font color=""><b><br>Obs: </b></font>
				</td>
				<td>
					<font color=""><br><b>No valor total da compra não está incluso o valor do frete. Para calcular o preço do frete, <a href="http://www.correios.com.br/encomendas/precos/default.cfm" target="_blank" class="link1">clique aqui.</a></font></b>
				</td>
			</tr>
		</table>
		<br>

		<table width="650px" cellpadding="0" cellspacing="4" border="0" align=center>
			<tr>
				<td colspan="6">
					<font class="texto4"><b></b></font>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<form name="formas" action="compra_finalizada.php?idpro=<? echo $id_produto ?>&qtd=<? echo $qtd ?>&idcli=<? echo $id_usuario ?>&total=<? echo $total_compra ?>" method="post">
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<font class="texto3"><b>Escolha a forma de pagamento:</b></font>
				</td>
			</tr>
			<tr>
				<td width="3%"><input type="radio" name="pagamento" value="1" checked="checked" /></td>
				<td width="30%">
					<font class="texto3">Boleto</font>
				</td>
				<td width="3%"><input type="radio" name="pagamento" value="2" /></td>
				<td>
					<font class="texto3">Depósito em Conta</font>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="6">
					<font class="texto3">&nbsp;</font>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="6">
					<font class="texto3">&nbsp;</font>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="6"><button type="submit" class="btn btn-default ">Enviar Dados</button></form>
				</td>
			</tr>
		</table>

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
							421, Centro, Concórdia<br />
							Santa Catarina <br />
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
								<a target="_blank" href="http://bootstrapthemes.co">William Mateus</a> <br />
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