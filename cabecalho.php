<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sua loja nerd com todos os produtos 100% originais">
    <meta name="keywords" content="canecas, luminarias, camisetas, artigos de decoração">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nome_loja?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    
    <!-- Icone -->
    <link rel="sortcut icon" href="./img/icon/icon.png" type="image/png"/>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/styleProdutos.css" type="text/css">
</head>

<body>
    <!-- Page Preloder 
<header>
    <div id="preloder">
        <div class="loader"></div>
    </div> -->
<header>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="./img/logotipo/logo.png" width="350" alt="logotipo"></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span style="
                    background-color: blueviolet;">3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>R$193,00</span></div>
            <div class= "header__top__right__auth ml-2"><a href="sistema"><i class="fa fa-user"> Login</i></a></div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.php" style="display: grid; justify-items: center;"><img src="./img/menu/home.png" width="35px" alt="inicio"> Início</a></li>
            <li><a href="./temas.php" style="display: grid; justify-items: center;"><img src="./img/menu/capitao.png" width="40px" alt="temas"> Temas</a>
            <li><a href="./decoracao.php" style="display: grid; justify-items: center;"><img src="./img/menu/superHomem.png" width="40px" alt="decoração">Decoração</a>
            <li><a href="./caneca.php"style="display: grid; justify-items: center;"><img src="./img/menu/caneca.png" width="45px" alt="canecas"> Canecas</a>
            <li><a href="./camiseta.php"style="display: grid; justify-items: center;"><img src="./img/menu/camiseta.png" width="35px" alt="camisetas">Camisetas</a></li>
            <li><a href="./blog.php"style="display: grid; justify-items: center;"><img src="./img/menu/blog.png" width="35px" alt="blog">Blog</a></li>
            <li><a href="./contato.php"style="display: grid; justify-items: center;"><img src="./img/menu/contato.png" width="30px" alt="contato"> Contato</a></li>
        </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a target="_blank" href="https://www.facebook.com/thewonderlandpresentes/" title="facebook"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/thewonderland_oficial/" title="instagram"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="#" title="youtube"><i class="fa fa-youtube"></i></a>
            <a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=<?php echo $whatsapp_link?>" title="<?php echo $whatsapp?>"><i class="fa fa-whatsapp"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i><?php echo $email ?></li>
            </ul>
        </div>

    </div>
</header>
    <!-- Humberger End -->

<div class="menu">
            <!-- Header Section Begin -->
            <div class="row" style="margin-right: 0px;">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logotipo/logo.png" width="250" alt="logotipo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul class="menu1">
                            <li class="active"><a href="./index.php" style="display: grid; justify-items: center;"><img src="./img/menu/home.png" width="30px" alt="inicio"> Início</a></li>
                            <li><a href="./temas.php" style="display: grid; justify-items: center;"><img src="./img/menu/capitao.png" width="40px" alt="temas"> Temas</a>
                                <!--<ul class="header__menu__dropdown">
                                    <li><a href="./produto.php"style="display: grid; justify-items: center;">Lista de Produtos</a></li>
                                    <li><a href="./shoping-cart.html"style="display: grid; justify-items: center;">Shoping Cart</a></li>
                                    <li><a href="./checkout.html"style="display: grid; justify-items: center;">Check Out</a></li>
                                    <li><a href="./blog-details.html"style="display: grid; justify-items: center;">Blog Details</a></li>
                                    <li><a href="./categorias.php"style="display: grid; justify-items: center;">Categorias</a></li>
                                </ul>-->
                            <li><a href="./decoracao.php" style="display: grid; justify-items: center;"><img src="./img/menu/superHomem.png" width="40px" alt="decoração">Decoração</a>
                            <li><a href="./caneca.php"style="display: grid; justify-items: center;"><img src="./img/menu/caneca.png" width="50px" alt="canecas"> Canecas</a>
                            <li><a href="./camiseta.php"style="display: grid; justify-items: center;"><img src="./img/menu/camiseta.png" width="32px" alt="camisetas">Camisetas</a></li>
                            <li><a href="./blog.php"style="display: grid; justify-items: center;"><img src="./img/menu/blog.png" width="30px" alt="blog">Blog</a></li>
                            <li><a href="./contato.php"style="display: grid; justify-items: center;"><img src="./img/menu/contato.png" width="30px" alt="contato"> Contato</a></li>
                        </ul>
                    </nav>
                </div> 
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="carrinho-de-compras.php"><i class="fa fa-shopping-bag" style="color:blueviolet;"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>R$193.00</span></div>
                        <div class= "header__top__right__auth ml-2"><a href="sistema"><i class="fa fa-user"> Login</i></a></div>
                    </div>
                </div>
            </div>
<!-- Hero Section Begin -->
<section>
    <div class="busca">
        <form action="#">
            <input class="input" type="text" placeholder="O que você procura?">
            <button type="submit" class="site-btn">Buscar</button>
        </form>
    </div>
</section>
<!-- Hero Section End -->


</div>  
        <div class="container" >
            <div class="humberger__open" style="color:blueviolet;">
                <i class="fa fa-bars" style="color:blueviolet;"></i>
            </div>


        </div>
    </header>
    <!-- Header Section End -->

