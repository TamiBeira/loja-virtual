<?php
    require_once("cabecalho.php");
?>

<body>
<!--<div class="bannerPrincipal">
    <div class="banner" style="display: grid;justify-items: center; margin-bottom: 80px; padding-top: 50px;">
        <a href="promocoes.php"><img src="./img/produtos/bannerPrincipal/promocao.png"></a>
</div> -->

    <!--Banner carrousel Principal 2 -->
 <div class="section-title">
    <a href="./promocoes.php"><h2>Promoções</h2></a>
</div>
    <div class="bannerSecundario">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="./promocoes.php"><img src="./img/produtos/bannerPrincipal/banner1.png" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
        <a href="./promocoes.php"><img src="./img/produtos/bannerPrincipal/banner2.png" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="./promocoes.php"><img src="./img/produtos/bannerPrincipal/banner3.png" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="./promocoes.php"><img src="./img/produtos/bannerPrincipal/banner4.png" class="d-block w-100" alt="..."></a>
    </div>
  </div>
</div>

 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



    <!--Banner carrousel Principal 2 end -->

    <!-- Categories Section Begin -->
<div class="section-title">
    <h2>Lançamentos do mês</h2>
</div>
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/canena_pantera_negra.png">
                            <h5><a href="#">Caneca Pantera Negra</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/almofada_vingadores.png">
                            <h5><a href="#">Almofada Vingadores</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/canena_dragon.png">
                            <h5><a href="#">Caneca Dragon Ball Z</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/caneca_os_simpsons.png">
                            <h5><a href="#">Caneca Os Simpsons</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/almofada_duff.png">
                            <h5><a href="#">Almofada Duff</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Categories Section End -->


<!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Produtos em destaque</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Todos</li>
                            <li data-filter=".canecas">Canecas</li>
                            <li data-filter=".almofadas">Almofadas</li>
                            <li data-filter=".copos">Copos</li>
                            <li data-filter=".garrafas">Garrafas</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix canecas Simpsons">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/canecaMickey.png">
                            <ul class="featured__item__pic__hover"> 
                                <li><a href="detalhe.php"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="detalhe.php">Caneca Mickey</a></h6>
                            <h5>R$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix copos Dragon Ball">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/copo_dragon_ball.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Copo Dragon Ball</a></h6>
                            <h5>R$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix almofadas Duff">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/02almofada_duff.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Almofada Duff</a></h6>
                            <h5>R$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix canecas Dragon">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/01canena_dragon.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Caneca Dragon Ball</a></h6>
                            <h5>R$35.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix almofadas Vingadores">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/02almofada_vingadores.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Almofada Vingadores</a></h6>
                            <h5>R$33.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix canecas Pantera">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/01canena_pantera_negra.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Caneca Pantera Negra</a></h6>
                            <h5>R$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix copos Alice">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/copo_Alice.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Copo Alice com Gliter</a></h6>
                            <h5>R$50.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix canecas Hulk">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/destaque/caneca_hulk.png">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Caneca Hulk</a></h6>
                            <h5>R$30.00</h5>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mix garrafas Super Mario" style="padding-bottom:50px;">
                    <div class="banner__pic">
                        <img src="img/produtos/destaque//banner1.png" alt="">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Garrafa Super Mário</a></h6>
                        <h5>R$60.00</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mix garrafas Avengers" style="padding-bottom:50px;">
                    <div class="banner__pic">
                        <img src="img/produtos/destaque/banner2.png" alt="">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Garrafa Avengers</a></h6>
                        <h5>R$60.00</h5>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mix garrafas Super Mario" style="padding-bottom:50px;">
                    <div class="banner__pic">
                        <img src="img/produtos/destaque//banner1.png" alt="">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Garrafa Super Mário</a></h6>
                        <h5>R$60.00</h5>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mix garrafas Avengers" style="padding-bottom:50px;">
                    <div class="banner__pic">
                        <img src="img/produtos/destaque/banner2.png" alt="">
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Garrafa Avengers</a></h6>
                        <h5>R$60.00</h5>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    
    <!-- Banner End -->


    <div class="section-title">
    <h2>Produtos Mais Vendidos</h2>
</div>
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel" style="padding-bottom: 50px;">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/canena_pantera_negra.png">
                            <h5><a href="">Caneca Pantera Negra</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/almofada_vingadores.png">
                            <h5><a href="#">Almofada Vingadores</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/canena_dragon.png">
                            <h5><a href="#">Caneca Dragon Ball Z</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/caneca_os_simpsons.png">
                            <h5><a href="#">Caneca Os Simpsons</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/produtos/carrousel/almofada_duff.png">
                            <h5><a href="#">Almofada Duff</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    




</body>
<?php
    require_once("rodape.php");
?>

</html>