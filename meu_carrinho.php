<?php
            $titulo="Meu Carrinho"; 
    require_once './Includes/head.php';
    
    require_once './Includes/header.php';

    require_once './Includes/nav.php';
?>

    <main>
        <!--  Cabecalho do carrinho -->

        <section class="container cabecalho">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6">
                    <h2>Carrinho de Compras</h2>
                </div>

                <div class="col-md-6 text-center d-flex align-items-right justify-content-end">
                    <div class="total">
                        <a href="./meu_carrinho.php">
                            Carrinho - <span class="cart-amunt">KZs 1000</span>
                            <i class="bi bi-cart3"></i> 
                            <span class="product-count">5</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
         
        <!-- End Cabecalho do Carrinho -->


        <!--Listagem dos produtos-->

        <section class="container list_produto mt-5">
            <div class="row">
                <article class="col-md-12">
                    <form action="" method="post">

                        <table class="table table-striped  align-items-center justify-content-center">

                            <thead>
                                <tr>
                                    <th class="product-thumbnail" scope="col">Imagem</th>
                                    <th class="product-name" scope="col">Produto</th>
                                    <th class="product-price" scope="col">Preço</th>
                                    <th class="product-quantity" scope="col">Quantidade</th>
                                    <th class="product-subtotal" scope="col">Total</th>
                                    <th class="product-remove" scope="col">Remover</th>
                                </tr>
                            </thead>

                            <tbody class="corpo">
                                <tr class="cart_item ">
                                                
                                    <td class="imagem_produt">
                                        <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="./img/phones/samsung-galaxy-s4-lançamento.jpg"></a>
                                    </td>
    
                                    <td class="product-name">
                                        <a href="single-product.html">Ship Your Idea</a> 
                                    </td>
    
                                    <td class="product-price">
                                        <span class="amount">KZs 15 000,00</span> 
                                    </td>
    
                                    <td class="product-quantity">
                                        <div class="quantity buttons_added">
                                            <input type="button" class="minus" value="-">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>
    
                                    <td class="product-subtotal">
                                        <span class="amount">KZs 15 000,00</span> 
                                    </td>
                                    <td class="product-remove">
                                        <a title="Remove this item" class="btn btn-danger" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a> 
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>

                            </tfoot>
                        </table>

                    </form>
                </article>
            </div>
        </section>

         <!-- End Listagem dos produtos-->


         <section class="container mt-5">
             <div class="row d-flex align-items-center justify-content-center">
                <div class=""></div>

                <div class="col-md-12 d-flex align-items-right justify-content-end ">
                    <div class="cart_totals  ">
                        <h2 class="text-info">Resumo da Compra</h2>

                        <table cellspacing="0" class="table table-dark table-borderless">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td><span class="amount">R$15,00</span></td>
                                </tr>

                                <tr class="shipping">
                                    <th>Frete</th>
                                    <td>R$0,00</td>
                                </tr>

                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong><span class="amount">R$15,00</span></strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
             </div>
             <div class="text-right">
                <input type="submit" value="Finalizar Compra" name="proceed" class="checkout-button button alt wc-forward btn-success btn">
            </div>
         </section>

    </main>

    <?php
         
    require_once './Includes/footer.php';
    
?>