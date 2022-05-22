<?php
            $titulo="Produto-Show"; 
    require_once './Includes/head.php';
    
    require_once './Includes/header.php';

    require_once './Includes/nav.php';
?>

    <main class="mt-5 mb-5">

        <section class="container">
            <article class="row produtos-compra">
                <figure class="col-md-7">
                    <img src="./img/phone.jpg" alt="" class="img-fluid">
                </figure>

                <section class="col-md-5 d-flex flex-column justify-content-around">
                    <article class="produto-title">
                        <h1>Samsung Galax S8</h1>
                    </article>
                    
                    <article class="produto-preco">
                        <!-- stars -->
                        <div class="produtos-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <!--End stars -->
                        <p class="card-text"><strong>Lançamento:</strong> 04/04/2020 <br> <strong>Vendidos:</strong> 15</p>
                        <!-- preco -->
                        <p>
                            <strong class="preco">
                                KZs 95.000,00
                            </strong>
                        </p>

                        <a href="" class="btn btn-primary" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit();">Add Car</a>
                        <a href="#" class="btn btn-success" id="event-submit">Comprar Agora</a>
                    </article>
                </section>
            </article>
        </section>

        <a href="./produto.php" class="d-flex align-items-center justify-content-center mb-3 mt-3">
                <i class="bi bi-arrow-left-circle mr-2 "></i>
                 Voltar para pagina anterior
            </a>
    </main>

    <?php
         
    require_once './Includes/footer.php';
    
?>