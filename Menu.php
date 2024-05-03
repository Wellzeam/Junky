<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Menu</title>
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
    <link rel="stylesheet" href="css/customMenu.css" />
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
                    <li><a href="Bebidas.php">Bebidas</a></li>
                    <li><a href="Petiscos.php">Petiscos</a></li>
            </div>
        </div>
        <!-- Menu do lado final -->
    </nav>

    <!-- Cabeçalho -->
    <header>
        <!-- Container-->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="banner">
                        <h3>-Introdução-</h3>
                        <h1>MENU</h1>
                        <div class="inner_banner">
                            <div class="banner_content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br>
        <!-- Container end-->
        <p class="caption">*Apenas tempo limitado</p>
    </header>
    <!-- Final do cabeçalho -->
    <!-- Bloquear Conteúdo -->
    <section id="block">
        <div class="container">

            <!-- Primeira sessão -->
            <center>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature1">
                            <div class="shack_burger">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <font color=#6d6e70>
                                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triplo Chesseburger<font face=arial size=5><button id="myBtn">Comprar</button></font>
                                </h2>
                            </font>
                        </div>
                        <!-- Modal 1 -->
                        <style>
                            body {
                                font-family: Arial, Helvetica, sans-serif;
                            }

                            /* O Modal (background) */
                            .modal {
                                display: none;
                                /* Hidden by default */
                                position: fixed;
                                /* Stay in place */
                                z-index: 1;
                                /* Sit on top */
                                padding-top: 100px;
                                /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%;
                                /* Full width */
                                height: 100%;
                                /* Full height */
                                overflow: auto;
                                /* Enable scroll if needed */
                                background-color: rgb(0, 0, 0);
                                /* Fallback color */
                                background-color: rgba(0, 0, 0, 0.4);
                                /* Black w/ opacity */
                            }

                            /* Conteúdo do Modal */
                            .modal-content {
                                background-color: #fefefe;
                                margin: auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            /* O Botão Fechar */
                            .close {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close:hover,
                            .close:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                        </style>

                        <!-- O Modal -->
                        <div id="myModal" class="modal">
                            <!-- Conteúdo do Modal -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <center>
                                    <h2>
                                        <font color=black>Minha Refeição
                                    </h2>
                                </center><br><br>
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Itens</h3>
                                        </td>
                                        <td>
                                            <h3>Preço</h3>
                                        </td>
                                    </tr>
                                    </font>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70><span id=triploc>Triplo Chesseburger</span></font>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70>R$ <span id=precoTC>20,00</span></font>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=black>Quantidade:</font>
                                            </h4>
                                        </td>
                                        <td><input type=number min=1 id=quantidadeTC></td>
                                    </tr>
                                    <tr>
                                        <td><br><img src="images/AdicionarCarrinho.png" width="320" height="50" onclick="adicionarCarrinhoTC();"></td>
                                </table>
                            </div>
                            <script>
                                function adicionarCarrinhoTC() {
                                    produto = document.getElementById("triploc").innerHTML;
                                    preco = parseFloat(document.getElementById("precoTC").innerHTML);
                                    qtd = document.getElementById("quantidadeTC").value;
                                    window.open("Carrinho.php?produto=" + produto + "&preco=" + preco + "&qtd=" + qtd + "&ver=sim", '_self');
                                }
                            </script>
                        </div>
                        <script>
                            // Pegar o Modal
                            var modal = document.getElementById('myModal');

                            // Pegue o botão que abre o modal
                            var btn = document.getElementById("myBtn");

                            // Obtenha o elemento <span> que fecha o modal
                            var span = document.getElementsByClassName("close")[0];

                            // Quando o usuário clica no botão, abra o modal 
                            btn.onclick = function() {
                                modal.style.display = "block";
                            }

                            // Quando o usuário clica em <span> (x), feche o modal
                            span.onclick = function() {
                                modal.style.display = "none";
                            }

                            // Quando o usuário clica em qualquer lugar fora do modal, fechá-lo
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                        </script>
                        <!-- Fim Modal 1 -->
                    </div>
                    <div class="col-sm-6">
                        <div class="feature2">
                            <div class="shack_burger">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <font color=#6d6e70>
                                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triplo Burger<font face=arial size=5><button id="myBtn2">Comprar</button></font>
                                </h2>
                            </font>
                        </div>
                        <!-- Modal 2 -->
                        <style>
                            body {
                                font-family: Arial, Helvetica, sans-serif;
                            }

                            /* O Modal (background) */
                            .modal2 {
                                display: none;
                                /* Hidden by default */
                                position: fixed;
                                /* Stay in place */
                                z-index: 1;
                                /* Sit on top */
                                padding-top: 100px;
                                /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%;
                                /* Full width */
                                height: 100%;
                                /* Full height */
                                overflow: auto;
                                /* Enable scroll if needed */
                                background-color: rgb(0, 0, 0);
                                /* Fallback color */
                                background-color: rgba(0, 0, 0, 0.4);
                                /* Black w/ opacity */
                            }

                            /* Conteúdo do Modal */
                            .modal-content2 {
                                background-color: #fefefe;
                                margin: auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            /* O Botão Fechar */
                            .close2 {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close2:hover,
                            .close2:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                        </style>
                        <!-- O Modal -->
                        <div id="myModal2" class="modal2">

                            <!-- Conteúdo do Modal -->
                            <div class="modal-content2">
                                <span class="close2">&times;</span>
                                <center>
                                    <h2>
                                        <font color=black>Minha Refeição
                                    </h2>
                                </center><br><br>
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Itens</h3>
                                        </td>
                                        <td>
                                            <h3>Preço</h3>
                                        </td>
                                    </tr>
                                    </font>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70><span id=triplob>Triplo Burguer</span></font>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70>R$ <span id=precoTB>15,00</span></font>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=black>Quantidade:</font>
                                            </h4>
                                        </td>
                                        <td><input type=number min=1 id=quantidadeTB></td>
                                    </tr>
                                    <tr>
                                        <td><br><img src="images/AdicionarCarrinho.png" width="320" height="50" onclick="adicionarCarrinhoTB();"></td>
                                </table>
                            </div>
                            <script>
                                function adicionarCarrinhoTB() {
                                    produto = document.getElementById("triplob").innerHTML;
                                    preco = parseFloat(document.getElementById("precoTB").innerHTML);
                                    qtd = document.getElementById("quantidadeTB").value;
                                    window.open("Carrinho.php?produto=" + produto + "&preco=" + preco + "&qtd=" + qtd + "&ver=sim", '_self');
                                }
                            </script>
                        </div>

                        <script>
                            // Pegar o Modal
                            var modal2 = document.getElementById('myModal2');

                            // Pegue o botão que abre o modal
                            var btn2 = document.getElementById("myBtn2");

                            // Obtenha o elemento <span> que fecha o modal
                            var span2 = document.getElementsByClassName("close2")[0];

                            // Quando o usuário clica no botão, abra o modal
                            btn2.onclick = function() {
                                modal2.style.display = "block";
                            }

                            // Quando o usuário clica em <span> (x), feche o modal
                            span2.onclick = function() {
                                modal2.style.display = "none";
                            }

                            // Quando o usuário clica em qualquer lugar fora do modal, fechá-lo
                            window.onclick = function(event) {
                                if (event.target == modal2) {
                                    modal2.style.display = "none";
                                }
                            }
                        </script>
                        <!-- Fim Modal 2 -->
                    </div>
                </div>
                <!-- Final Primeira sessão -->

                <!-- Segunda sessão -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature4">
                            <div class="shack_burger">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <font color=#6d6e70>
                                <h2>Triplo Quarterão<font face=arial size=5><button id="myBtn3">Comprar</button></font>
                                </h2>
                            </font>
                        </div>
                        <!-- Modal 3 -->
                        <style>
                            body {
                                font-family: Arial, Helvetica, sans-serif;
                            }

                            /* O Modal (background) */
                            .modal3 {
                                display: none;
                                /* Hidden by default */
                                position: fixed;
                                /* Stay in place */
                                z-index: 1;
                                /* Sit on top */
                                padding-top: 100px;
                                /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%;
                                /* Full width */
                                height: 100%;
                                /* Full height */
                                overflow: auto;
                                /* Enable scroll if needed */
                                background-color: rgb(0, 0, 0);
                                /* Fallback color */
                                background-color: rgba(0, 0, 0, 0.4);
                                /* Black w/ opacity */
                            }

                            /* Conteúdo do Modal */
                            .modal-content3 {
                                background-color: #fefefe;
                                margin: auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            /* O Botão Fechar */
                            .close3 {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close3:hover,
                            .close3:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                        </style>
                        <!-- O Modal -->
                        <div id="myModal3" class="modal3">

                            <!-- Conteúdo do Modal -->
                            <div class="modal-content3">
                                <span class="close3">&times;</span>
                                <center>
                                    <h2>
                                        <font color=black>Minha Refeição
                                    </h2>
                                </center><br><br>
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Itens</h3>
                                        </td>
                                        <td>
                                            <h3>Preço</h3>
                                        </td>
                                    </tr>
                                    </font>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70><span id=triploq>Triplo Quarterão</span></font>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70>R$ <span id=precoTQ>25,00</span></font>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=black>Quantidade:</font>
                                            </h4>
                                        </td>
                                        <td><input type=number min=1 id=quantidadeTQ></td>
                                    </tr>
                                    <tr>
                                        <td><br><img src="images/AdicionarCarrinho.png" width="320" height="50" onclick="adicionarCarrinhoTQ();"></td>
                                    </tr>
                                </table>
                            </div>
                            <script>
                                function adicionarCarrinhoTQ() {
                                    produto = document.getElementById("triploq").innerHTML;
                                    preco = parseFloat(document.getElementById("precoTQ").innerHTML);
                                    qtd = document.getElementById("quantidadeTQ").value;
                                    window.open("Carrinho.php?produto=" + produto + "&preco=" + preco + "&qtd=" + qtd + "&ver=sim", '_self');
                                }
                            </script>
                        </div>

                        <script>
                            // Pegar o Modal
                            var modal3 = document.getElementById('myModal3');

                            // Pegue o botão que abre o modal
                            var btn3 = document.getElementById("myBtn3");

                            // Obtenha o elemento <span> que fecha o modal
                            var span3 = document.getElementsByClassName("close3")[0];

                            // Quando o usuário clica no botão, abra o modal
                            btn3.onclick = function() {
                                modal3.style.display = "block";
                            }

                            // Quando o usuário clica em <span> (x), feche o modal
                            span3.onclick = function() {
                                modal3.style.display = "none";
                            }

                            // Quando o usuário clica em qualquer lugar fora do modal, fechá-lo
                            window.onclick = function(event) {
                                if (event.target == modal3) {
                                    modal3.style.display = "none";
                                }
                            }
                        </script>
                        <!-- Fim Modal 3 -->
                    </div>
                    <div class="col-sm-6">
                        <div class="feature5">
                            <div class="shack_burger">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <font color=#6d6e70>
                                <h2>Duplo Quarterão<font face=arial size=5><button id="myBtn4">Comprar</button></font>
                                </h2>
                            </font>
                        </div>
                        <!-- Modal 4 -->
                        <style>
                            body {
                                font-family: Arial, Helvetica, sans-serif;
                            }

                            /* O Modal (background) */
                            .modal4 {
                                display: none;
                                /* Hidden by default */
                                position: fixed;
                                /* Stay in place */
                                z-index: 1;
                                /* Sit on top */
                                padding-top: 100px;
                                /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%;
                                /* Full width */
                                height: 100%;
                                /* Full height */
                                overflow: auto;
                                /* Enable scroll if needed */
                                background-color: rgb(0, 0, 0);
                                /* Fallback color */
                                background-color: rgba(0, 0, 0, 0.4);
                                /* Black w/ opacity */
                            }

                            /* Conteúdo do Modal */
                            .modal-content4 {
                                background-color: #fefefe;
                                margin: auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            /* O Botão Fechar */
                            .close4 {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close4:hover,
                            .close4:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                        </style>
                        <!-- O Modal -->
                        <div id="myModal4" class="modal4">

                            <!-- Conteúdo do Modal -->
                            <div class="modal-content4">
                                <span class="close4">&times;</span>
                                <center>
                                    <h2>
                                        <font color=black>Minha Refeição
                                    </h2>
                                </center><br><br>
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Itens</h3>
                                        </td>
                                        <td>
                                            <h3>Preço</h3>
                                        </td>
                                    </tr>
                                    </font>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70><span id=duploq>Duplo Quarterão</span></font>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70>R$ <span id=precoDQ>19,90</span></font>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=black>Quantidade:</font>
                                            </h4>
                                        </td>
                                        <td><input type=number min=1 id=quantidadeDQ></td>
                                    </tr>
                                    <tr>
                                        <td><br><img src="images/AdicionarCarrinho.png" width="320" height="50" onclick="adicionarCarrinhoDQ();"></td>
                                    </tr>
                                </table>
                            </div>
                            <script>
                                function adicionarCarrinhoDQ() {
                                    produto = document.getElementById("duploq").innerHTML;
                                    preco = parseFloat(document.getElementById("precoDQ").innerHTML);
                                    qtd = document.getElementById("quantidadeDQ").value;
                                    window.open("Carrinho.php?produto=" + produto + "&preco=" + preco + "&qtd=" + qtd + "&ver=sim", '_self');
                                }
                            </script>
                        </div>

                        <script>
                            // Pegar o Modal
                            var modal4 = document.getElementById('myModal4');

                            // Pegue o botão que abre o modal
                            var btn4 = document.getElementById("myBtn4");

                            // Obtenha o elemento <span> que fecha o modal
                            var span4 = document.getElementsByClassName("close4")[0];

                            // Quando o usuário clica no botão, abra o modal
                            btn4.onclick = function() {
                                modal4.style.display = "block";
                            }

                            // Quando o usuário clica em <span> (x), feche o modal
                            span4.onclick = function() {
                                modal4.style.display = "none";
                            }

                            // Quando o usuário clica em qualquer lugar fora do modal, fechá-lo
                            window.onclick = function(event) {
                                if (event.target == modal4) {
                                    modal4.style.display = "none";
                                }
                            }
                        </script>
                        <!-- Fim Modal 4 -->
                    </div>
                </div>
                <!-- Final Segunda sessão -->

                <!-- Terceira sessão -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature3">
                            <div class="shack_burger">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <font color=#6d6e70>
                                <h2>Big Tasty<br>
                                    <font face=arial size=5><button id="myBtn5">Comprar</button></font>
                                </h2>
                            </font>
                        </div>
                        <!-- Modal 5 -->
                        <style>
                            body {
                                font-family: Arial, Helvetica, sans-serif;
                            }

                            /* O Modal (background) */
                            .modal5 {
                                display: none;
                                /* Hidden by default */
                                position: fixed;
                                /* Stay in place */
                                z-index: 1;
                                /* Sit on top */
                                padding-top: 100px;
                                /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%;
                                /* Full width */
                                height: 100%;
                                /* Full height */
                                overflow: auto;
                                /* Enable scroll if needed */
                                background-color: rgb(0, 0, 0);
                                /* Fallback color */
                                background-color: rgba(0, 0, 0, 0.4);
                                /* Black w/ opacity */
                            }

                            /* Conteúdo do Modal */
                            .modal-content5 {
                                background-color: #fefefe;
                                margin: auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            /* O Botão Fechar */
                            .close5 {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close5:hover,
                            .close5:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                        </style>
                        <!-- O Modal -->
                        <div id="myModal5" class="modal5">

                            <!-- Conteúdo do Modal -->
                            <div class="modal-content5">
                                <span class="close5">&times;</span>
                                <center>
                                    <h2>
                                        <font color=black>Minha Refeição
                                    </h2>
                                </center><br><br>
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Itens</h3>
                                        </td>
                                        <td>
                                            <h3>Preço</h3>
                                        </td>
                                    </tr>
                                    </font>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70><span id=bigt>Big Tasty</span></font>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70>R$ <span id=precoBT>23,00</span></font>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=black>Quantidade:</font>
                                            </h4>
                                        </td>
                                        <td><input type=number min=1 id=quantidadeBT></td>
                                    </tr>
                                    <tr>
                                        <td><br><img src="images/AdicionarCarrinho.png" width="320" height="50" onclick="adicionarCarrinhoBT();"></td>
                                    </tr>
                                </table>
                            </div>
                            <script>
                                function adicionarCarrinhoBT() {
                                    produto = document.getElementById("bigt").innerHTML;
                                    preco = parseFloat(document.getElementById("precoBT").innerHTML);
                                    qtd = document.getElementById("quantidadeBT").value;
                                    window.open("Carrinho.php?produto=" + produto + "&preco=" + preco + "&qtd=" + qtd + "&ver=sim", '_self');
                                }
                            </script>
                        </div>

                        <script>
                            // Pegar o Modal
                            var modal5 = document.getElementById('myModal5');

                            // Pegue o botão que abre o modal
                            var btn5 = document.getElementById("myBtn5");

                            // Obtenha o elemento <span> que fecha o modal
                            var span5 = document.getElementsByClassName("close5")[0];

                            // Quando o usuário clica no botão, abra o modal
                            btn5.onclick = function() {
                                modal5.style.display = "block";
                            }

                            // Quando o usuário clica em <span> (x), feche o modal
                            span5.onclick = function() {
                                modal5.style.display = "none";
                            }

                            // Quando o usuário clica em qualquer lugar fora do modal, fechá-lo
                            window.onclick = function(event) {
                                if (event.target == modal5) {
                                    modal5.style.display = "none";
                                }
                            }
                        </script>
                        <!-- Fim Modal 5 -->
                    </div>
                    <div class="col-sm-6">
                        <div class="feature6">
                            <div class="shack_burger">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <font color=#6d6e70>
                                <h2>Big Mac<br>
                                    <font face=arial size=5><button id="myBtn6">Comprar</button></font>
                                </h2>
                            </font>
                        </div>
                        <!-- Modal 6 -->
                        <style>
                            body {
                                font-family: Arial, Helvetica, sans-serif;
                            }

                            /* O Modal (background) */
                            .modal6 {
                                display: none;
                                /* Hidden by default */
                                position: fixed;
                                /* Stay in place */
                                z-index: 1;
                                /* Sit on top */
                                padding-top: 100px;
                                /* Location of the box */
                                left: 0;
                                top: 0;
                                width: 100%;
                                /* Full width */
                                height: 100%;
                                /* Full height */
                                overflow: auto;
                                /* Enable scroll if needed */
                                background-color: rgb(0, 0, 0);
                                /* Fallback color */
                                background-color: rgba(0, 0, 0, 0.4);
                                /* Black w/ opacity */
                            }

                            /* Conteúdo do Modal */
                            .modal-content6 {
                                background-color: #fefefe;
                                margin: auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 80%;
                            }

                            /* O Botão Fechar */
                            .close6 {
                                color: #aaaaaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close6:hover,
                            .close6:focus {
                                color: #000;
                                text-decoration: none;
                                cursor: pointer;
                            }
                        </style>
                        <!-- O Modal -->
                        <div id="myModal6" class="modal6">

                            <!-- Conteúdo do Modal -->
                            <div class="modal-content6">
                                <span class="close6">&times;</span>
                                <center>
                                    <h2>
                                        <font color=black>Minha Refeição
                                    </h2>
                                </center><br><br>
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Itens</h3>
                                        </td>
                                        <td>
                                            <h3>Preço</h3>
                                        </td>
                                    </tr>
                                    </font>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70><span id=BigM>Big Mac</span></font>
                                            </h4>
                                        </td>
                                        <td>
                                            <h4>
                                                <font color=#6d6e70>R$ <span id=precoBM>28,00</span></font>
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <font color=black>Quantidade:</font>
                                            </h4>
                                        </td>
                                        <td><input type=number min=1 id=quantidadeBM></td>
                                    </tr>
                                    <tr>
                                        <td><br><img src="images/AdicionarCarrinho.png" width="320" height="50" onclick="adicionarCarrinhoBM();"></td>
                                    </tr>
                                </table>
                            </div>
                            <script>
                                function adicionarCarrinhoBM() {
                                    produto = document.getElementById("BigM").innerHTML;
                                    preco = parseFloat(document.getElementById("precoBM").innerHTML);
                                    qtd = document.getElementById("quantidadeBM").value;
                                    window.open("Carrinho.php?produto=" + produto + "&preco=" + preco + "&qtd=" + qtd + "&ver=sim", '_self');
                                }
                            </script>
                            </font>
                            </font>
                            </font>
                        </div>

                        <script>
                            // Pegar o Modal
                            var modal6 = document.getElementById('myModal6');

                            // Pegue o botão que abre o modal
                            var btn6 = document.getElementById("myBtn6");

                            // Obtenha o elemento <span> que fecha o modal
                            var span6 = document.getElementsByClassName("close6")[0];

                            // Quando o usuário clica no botão, abra o modal
                            btn6.onclick = function() {
                                modal6.style.display = "block";
                            }

                            // Quando o usuário clica em <span> (x), feche o modal
                            span6.onclick = function() {
                                modal6.style.display = "none";
                            }

                            // Quando o usuário clica em qualquer lugar fora do modal, fechá-lo
                            window.onclick = function(event) {
                                if (event.target == modal6) {
                                    modal6.style.display = "none";
                                }
                            }
                        </script>
                        <!-- Fim Modal 6 -->
                    </div>
                </div>
            </center>
            <!-- Final Terceira sessão -->
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
                        Refeição
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