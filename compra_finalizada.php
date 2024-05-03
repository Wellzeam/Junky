<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Junky</title>
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

        <br><br><br><br><br><br><br><br>
        <center>
            <h3>
                <table width="650px" cellpadding="0" cellspacing="0">
                    <tr style="height:40px">
                    </tr>
                </table>
                <?php
                include("libs/banco.php");
                include("libs/valor_formata.php");
                unset($totalcompra);
                $forma        = $_POST["pagamento"];
                $totalcompra    = $_GET['total'];

                if ($forma == "1") {
                ?>
                    <h1>Compra Finalizada!</h1>
                    <table width="650px" cellpadding="0" cellspacing="15">
                        <tr>
                            <td>
                                <font class="texto9">Sua compra foi finalizada com sucesso!</font>
                            </td> <br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Forma de Pagamento: <b>Boleto</b></font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Os produtos serão entregues no endereço informado no seu cadastro, e o pagamento deverá ser feito no ato da Entrega do Produto</font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Valor da compra: <b><? echo "R$" . ($totalcompra) ?></b></font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Obrigado, por efetuar sua compra em nosso Site</font>
                            </td><br>
                        </tr>
                    </table>
                <?
                }
                if ($forma == "2") {
                ?>
                    <h1>Compra Finalizada!</h1>
                    <table width="650px" cellpadding="0" cellspacing="15">
                        <tr>
                            <td>
                                <font class="texto9">Sua compra foi finalizada com sucesso!</font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Forma de Pagamento: <b>Depósito em conta</b></font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Sua compra será entregue no endereço informado no seu cadastro, após o Depósito na conta:</font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Banco: <b>Itáu</b><br>Agência: <b>013</b><br>Conta: <b>10005-15</b></font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Valor da compra: <b><? echo "R$" . ($totalcompra) ?></b></font>
                            </td><br>
                        </tr>
                        <tr>
                            <td>
                                <font class="texto9">Obrigado, por efetuar sua compra em nosso Site</font>
                            </td><br>
                        </tr>
                    </table>
                <?
                }
                ?>

                <?php
                unset($id_usuario, $sql, $id_produto, $qtd);

                $id_usuario    = $_GET['idcli'];

                $sql = "SELECT id,qtd_produto FROM carrinho WHERE id_usuario = '$id_usuario'";
                $query = mysql_query($sql);
                while ($linha = mysql_fetch_array($query)) {
                    $id_produto    = $linha["id"];
                    $qtd        = $linha["qtd_produto"];

                    $sql = "INSERT INTO PEDIDOS (ID_PEDIDO,ID_PRODUTO,ID_USUARIO,QTD_PRODUTO,FORMAPAG) VALUES (0,'$id_produto','$id_usuario','$qtd','$forma')";
                    mysql_query($sql); //executa o camando sql da variavel $sql
                }

                $sql2 = "DELETE FROM carrinho WHERE id_usuario = '$id_usuario'";
                mysql_query($sql2);
                ?>
                <br><br><br><br><br><br><br>
            </h3>
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