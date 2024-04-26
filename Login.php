<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Login</title>        
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

<center>
<?php
	include("libs/banco.php");
	$sql="SELECT ID_CLIENTE FROM CLIENTES";
	$result=mysql_query($sql);
	$qtd_usuarios=mysql_num_rows($result); //conta a qtd de usuarios
?>
<br><br><br><br><br><br><br><br><br>
<table cellspacing="5" cellpadding="0" align="center">
	<tr>
		<td align="center" valign='top' colspan='2' height='50'><h2>Autenticação de Usuário<br><br></h2></td>
	</tr>
	<form action="validalogin.php" target="pri" method="post">
	<tr>
		<td class='texto3'><h4>E-mail:</h4></td>
		<td><font color=black><input type="text" name="email" size="30" class='campo1'></font></td>
	</tr>
	<tr>
		<td class='texto3'><h4>Senha:</h4></td>
		<td><font color=black><input type="password" name="senha" size="30" maxlength="8" class='campo1'></font></td>
	</tr>
	<tr>
      		<td colspan="2" align="center" valign='bottom'><br><button type="submit" class="btn btn-default ">Entrar</button></td></font>
	</tr>
	</form>
	<tr>
		<td align="center" height='30'><br><a class="link1" href="Cadastro.php" target="pri"><h5>Cadastre-se gratuitamente</h5></a></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</center>
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
