<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Administração</title>        
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
                    <a class="navbar-brand" href="ProvaPHP/index.php"><img src="images/logo.png" class="logo" alt=""></a>
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

<br><br><br><br><br>

<script>
	function sf(){
		document.adm.usuario.focus();
		document.adm.usuario.value="";
		document.adm.senha.value="";
	}
</script>

<br><br><br><br><br><br><br>
<center>
			<h1>Administração - Junky</h1><br><br><br>
	<table width="200px" cellpadding="0" cellspacing="5" border="0" bgcolor="#FFFFFF">
		<tr>
			<td><form name="adm" action="validaloginadm.php" method="post"></td>
		</tr>
		<tr>
			<td align="right" class="texto3"><h3>Usuário:&nbsp;</h3></td>
			<td><font color=black><input class="campo1" name="usuario" type="text" size="15" maxlength="15" /></font></td>
		</tr>
		<tr>
			<td align="right" class="texto3"><h3>Senha:&nbsp;</h3></td>
			<td><font color=black><input class="campo1" name="senha" type="password" size="15" maxlength="15" /></font></td>
		</tr>
		<tr><br>
			<td align="right">&nbsp;</td>
			<td align="center"><button type="submit" class="btn btn-default ">Entrar</button></td>
		</tr>
	</table>
</center>
<br><br><br><br><br>

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
