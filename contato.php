<?php
    require_once("cabecalho.php");
?>
<?php
    require_once('config.php');
?>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-mobile"></span>
                        <h4>Telefone:</h4>
                        <p><?php echo $whatsapp?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-map-marker"></span>
                        <h4>Endereço</h4>
                        <p><?php echo $endereco?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-clock-o"></span>
                        <h4>Horario de Atendimento</h4>
                        <p>08:00 as 23:00</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="fa fa-envelope"></span>
                        <h4>Email</h4>
                        <p><?php echo $email ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Contate-nos</h2>
                    </div>
                </div>
            </div>
            <form method = "post">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="nome" id="nome" placeholder="Nome">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="telefone" id="telefone" placeholder="Seu Whatsapp">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="mensagem" id="mensagem" placeholder="digite aqui sua mensagem"></textarea>
                        <button name="btn-enviar-email" id="btn-enviar-email" type="button" class="site-btn">Enviar Mensagem</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <?php
    require_once("rodape.php");
?>

</body>

</html>