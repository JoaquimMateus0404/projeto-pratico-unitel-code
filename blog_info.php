<?php
            $titulo="Blog-Show"; 
    require_once './Includes/head.php';
    
    require_once './Includes/header.php';

    require_once './Includes/nav.php';
?>

        <Main class=" container ">

            <div id="carouselExampleCaptions" class="carousel slide pointer-event mb-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/como-vender-mais-pela-internet-com-loja-virtual.jpg" alt="" width="100%" height="500px">
                    </div>
                </div>
            </div>
            <section class="container">
                
                <h2 class="blog-post-title">Sample blog post</h2>
                <p class="blog-post-meta">January 1, 2021 by <a href="#">Duarte Gauss</a></p>
                    <hr>
                <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.
                </p>
        
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h2>Blockquotes</h2>
                <p>This is an example blockquote in action:</p>
                <blockquote class="blockquote">
                <p>Quoted text goes here.</p>
                </blockquote>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="./img/markus-spiske-hvSr_CVecVI-unsplash.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <img src="./img/max-duzij-qAjJk-un3BI-unsplash.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="./img/pc.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!--Fim das fotos-->
                <h3>Example lists</h3>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>And this is an ordered list:</p>
                <ol>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ol>
                <p>And this is a definition list:</p>
                <dl>
                    <dt>HyperText Markup Language (HTML)</dt>
                    <dd>The language used to describe and define the content of a Web page</dd>
                    <dt>Cascading Style Sheets (CSS)</dt>
                    <dd>Used to describe the appearance of Web content</dd>
                    <dt>JavaScript (JS)</dt>
                    <dd>The programming language used to build advanced Web sites and applications</dd>
                </dl>
            </section>

            <a href="./blog.php" class="d-flex align-items-center justify-content-center mb-3 mt-3">
                <i class="bi bi-arrow-left-circle mr-2 "></i>
                 Voltar para pagina anterior
            </a>
        </Main>

        <?php
         
    require_once './Includes/footer.php';
    
?>