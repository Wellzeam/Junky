<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
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
                <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo" alt=""></a>
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
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="banner">
                        <h3>-Introdução-</h3>
                        <h1>FATTY BURGER</h1>

                        <div class="inner_banner">
                            <div class="banner_content">
                                <p>Uma dupla camada de carne 100% puro misturado com molho especial em um pão de gergelim e coberto com queijo americano melt, alface crocante, cebola picada e pickles picantes.</p>
                                <p>*Baseado no peso de rissol pré-cozido.</p>
                            </div>
                            <div class="stamp">
                                <img src="images/stamp.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container end -->
        <p class="caption">*Apenas tempo limitado</p>
    </header>
    <!-- Final do cabeçalho -->

    <!-- Bloquear Conteúdo -->
    <section id="block">
        <div class="container">

            <!-- Primeira sessão -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="feature">
                        <div class="shack_burger">
                            <div class="chicken">
                                <img src="images/chicken.png" alt="Chicken" />
                            </div>

                            <h2>Shack Burger </h2>
                            <p>Patty Black Angus coberto com queijo americano, tomate, alface e "Shack Sauce", servido em um pão de batata grelhado</p>
                        </div>
                        <p class="caption">* Apenas tempo limitado</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="signature">
                        <div class="shape">
                            <span class="flaticon flaticon-burger"></span>
                            <p>assinatura</p>
                        </div>
                        <div class="signature_content">
                            <p>Costumava ser um Segredo, mas não mais! Nossa homenagem ao rei é um cheddar Beef Patty,</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- final da primeira seção -->

            <!-- Segunda Seção -->
            <div class="row">
                <div class="col-md-6">
                    <div class="classic">
                        <a href="" class="classic_btn">clássico</a>

                        <div class="overlay">
                            <h3>House-ground hamburger</h3>
                            <p>(servido em uma focaccia de alecrim grelhado).</p>

                            <p class="overlay_content">Em vez de picles de pepino tradicionais, a lendária chef-proprietária Judy Rodgers acentua seus hambúrgueres com tiras de abobrinha em vinagre, sementes de mostarda e açafrão.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Carousel -->
                    <div id="small_carousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-caption">
                            <h3>O hamburguer original</h3>
                            <hr />

                            <ul class="list-unstyled nutrition">
                                <li><a href=""><span class="flaticon flaticon-protein"></span>
                                        <p>Proteína - 33g</p>
                                    </a></li>
                                <li><a href=""><span class="flaticon flaticon-carbohydrate"></span>
                                        <p>carboidratos - 46gm</p>
                                    </a></li>
                                <li><a href=""><span class="flaticon flaticon-calories"></span>
                                        <p>Calorias - 750 kcal</p>
                                    </a></li>
                            </ul>
                        </div>

                        <!-- carrossel interno -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/small_slider_bg.jpg" alt="" />
                            </div>
                            <!-- carousel inner end -->
                        </div><!-- Carousel end-->
                    </div>
                </div><!-- fim segunda seção -->

                <!-- terceira seção -->
                <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">

                    <!-- carousel inner -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/large_slider_img.jpg" alt="Burger">

                            <div class="carousel-caption">
                                <h2>Cheddar JUnky</h2>
                                <h3>Hambúrgueres recheados</h3>

                                <p>O chef Wesley Genovart faz este over-the-top, hambúrguer inspirado em Shake Shack, com duas empadas finas e empilhadas, bacon grosso, kimchi e um molho caseiro picante.</p>


                            </div>
                        </div>

                    </div><!-- carousel inner end -->
                </div><!-- Carousel end-->

                <!-- Quarta seção -->
                <div class="row forth_sec">
                    <div class="col-sm-4">
                        <div class="menu">
                            <div class="inner_content">
                                <a href="Menu.php"><span class="flaticon flaticon-burger"></span>
                                    <h3>menu</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="drinks">
                            <div class="inner_content">
                                <a href="Bebidas.php"><span class="flaticon flaticon-drink"></span>
                                    <h3>bebidas</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="sides">
                            <div class="inner_content">
                                <a href="Petiscos.php"><span class="flaticon flaticon-food"></span>
                                    <h3>petiscos</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- final quarta seção -->
    </section>
    <!-- Finalizar conteúdo do bloco-->

    <!-- LBloqueioock -->
    <section id="lock">
        <h2>SERVING MORE THAN JUST BURGERS SINCE 1998</h2>
        <p>Confira nosso horário de abertura e endereço de localização abaixo.</p>
    </section>

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
                        <a href="adm" target=_blank><img class="footer_logo" src="images/footer_logo.png" alt="Burger" /></a>
                        <div class="footer-copyright">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                Feito com
                                <i class="fa fa-heart"></i>
                                por
                                <a target="_blank" href="">William Mateus</a> <br />
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