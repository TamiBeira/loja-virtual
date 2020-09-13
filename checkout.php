<?php
    require_once("cabecalho.php");
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Inicio</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Você tem cupom? <a href="#">Clique aqui</a> para inserir seu código
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Detalhe de cobrança:</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Primeiro Nome<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Ultimo Nome<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>País<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Endereço<span>*</span></p>
                                <input type="text" placeholder="Endereço" class="checkout__input__add">
                                <input type="text" placeholder="Complemento">
                            </div>
                            <div class="checkout__input">
                                <p>Cidade<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Estado<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Cep<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telefone<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Criar uma conta?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Crie uma conta inserindo as informações abaixo. Se você é um cliente antigo
                                por favor faça o login no topo da página</p>
                            <div class="checkout__input">
                                <p>Senha<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Envie para um endereço diferente?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Detalhe sobre a entrega<span>*</span></p>
                                <input type="text"
                                    placeholder="detalhe forma de entrega">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Seu pedido</h4>
                                <div class="checkout__order__products">Produtos <span>Total</span></div>
                                <ul>
                                    <li>Caneca Pantera Negra <span>R$55,00</span></li>
                                    <li>Garrafa Super Mario <span>R$69,00</span></li>
                                    <li>Caneca Mickey <span>R$69,00</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>R$193,00</span></div>
                                <div class="checkout__order__total">Total <span>R$193,00</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Crie sua conta aqui.
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Forma de pagamento
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Continue</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
<?php
    require_once("rodape.php");
?>
    <!-- Footer Section End -->
 

</body>

</html>