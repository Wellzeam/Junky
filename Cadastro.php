<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro de Usuário</title>
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

        <br><br><br><br><br><br>

        <h3>
            <center><br>
                <font size=15> Cadastro de Usuário - Junky </font>
            </center><br>

            <center>
                <font size="2" face="verdana" color="red"><b>Atenção: Todos os campos devem ser Preenchidos</b></font>
            </center>

            <table cellspacing="5" border="0" cellpadding="2" align="center">
                <tbody>
                    <form action="validacadastro.php" method="post">
                        <tr>
                            <td class="texto3">Nome:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="nome" size="35" class='campo1'></font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">E-mail:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="email" size="35" class='campo1'></font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">Senha:</td>
                            <td>
                                <font face="arial" color=black><input type="password" name="senha" size="8" maxlength="8" class='campo1'></font>
                                <font size=3>&nbsp;Máximo 8, Mínimo 4 Caracteres</font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">Confirma Senha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <font face="arial" color=black><input type="password" name="confirmasenha" size="8" maxlength="8" class='campo1'></font>
                                <font size=3>&nbsp;Máximo 8, Mínimo 4 Caracteres</font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">Endereço:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="endereco" size="35" class='campo1'></font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">Bairro:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="bairro" size="20" class='campo1'></font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">Cidade:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="cidade" size="35" class='campo1'></font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">Estado:</td>
                            <td>
                                <font face="arial" size=3 color=black>
                                    <select name="estado" class='campo1'>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AM">AM</option>
                                        <option value="AP">AP</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MG">MG</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="PR">PR</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="RS">RS</option>
                                        <option selected value="SC">SC</option>
                                        <option value="SE">SE</option>
                                        <option value="SP">SP</option>
                                        <option value="TO">TO</option>
                                    </select>
                                </font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">CEP:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="cep" size="15" class='campo1' maxlength='8'></font>
                                <font size=3>&nbsp;Apenas números</font>
                            </td>
                        </tr>
                        <tr>
                            <td class="texto3">Telefone:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="fone" size="15" class='campo1'>
                            </td>
                            </font>
                        </tr>
                        <tr>
                            <td class="texto3">RG:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="rg" size="15" maxlength='10' class='campo1'>
                            </td>
                            </font>
                        </tr>
                        <tr>
                            <td class="texto3">CPF:</td>
                            <td>
                                <font face="arial" color=black><input type="text" name="cpf" size="15" class='campo1' maxlength='11'></font>
                                <font size=3>&nbsp;Sem pontuação<br><br></font>
                            </td>
                        </tr>
        </h3>
        <tr height="35">
            <td colspan="2" align="center" valign='bottom'><button type="submit" class="btn btn-default ">Enviar</button></td>
            </font>
        </tr>
        </form>
        </tbody><br><br>
        </table><br><br></h3>
    </header>
    <!-- LBloqueioock -->
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