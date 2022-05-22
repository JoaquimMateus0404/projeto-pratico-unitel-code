<?php
            $titulo="Blog"; 
    require_once './Includes/head.php';
    
    require_once './Includes/header.php';

    require_once './Includes/nav.php';
?>

        <Main>
            <!-- Artigos do Blogger-->
            <section class="container mt-5">
                <div class="row g-5">
                    <div class="col-md-8 ">

                        <h3 class="pb-4 mb-4 fst-italic border-bottom">
                            Artigos Publicados
                        </h3>

                        <!-- Conteudos do Blogger-->
                        <article class="blog-post mb-3 bg-light">
                            <h2 class="blog-post-title">Post 1</h2>
                            <p class="blog-post-meta">Maio 20, 2021 by <a href="#">Duarte Gauss</a></p>
                    
                            <p class="ellipsis">This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                            <a href="./blog_info.php">
                                <strong class="text-primary">Continue lendo</strong>
                            </a>
                        </article>

                        <article class="blog-post mb-3 bg-light">
                            <h2 class="blog-post-title">Post 2</h2>
                            <p class="blog-post-meta">Maio 20, 2021 by <a href="#">Duarte Gauss</a></p>
                    
                            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                            <a href="./blog_info.php">
                                <strong class="text-primary">Continue lendo</strong>
                            </a>
                        </article>

                        <article class="blog-post mb-3 bg-light">
                            <h2 class="blog-post-title">Post 3</h2>
                            <p class="blog-post-meta">Maio 20, 2021 by <a href="#">Duarte Gauss</a></p>
                    
                            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                            <a href="./blog_info.php">
                                <strong class="text-primary">Continue lendo</strong>
                            </a>
                        </article>

                        <article class="blog-post mb-3 bg-light">
                            <h2 class="blog-post-title">Post 4</h2>
                            <p class="blog-post-meta">Maio 20, 2021 by <a href="#">Duarte Gauss</a></p>
                    
                            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                            <a href="./blog_info.php">
                                <strong class="text-primary">Continue lendo</strong>
                            </a>
                        </article>

                        <article class="blog-post mb-3 bg-light">
                            <h2 class="blog-post-title">Post 5</h2>
                            <p class="blog-post-meta">Maio 20, 2021 by <a href="#">Duarte Gauss</a></p>
                    
                            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                            <a href="./blog_info.php">
                                <strong class="text-primary">Continue lendo</strong>
                            </a>
                        </article>

                        <article class="blog-post mb-3 bg-light">
                            <h2 class="blog-post-title">Post 6</h2>
                            <p class="blog-post-meta">Maio 20, 2021 by <a href="#">Duarte Gauss</a></p>
                    
                            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                            <a href="./blog_info.php">
                                <strong class="text-primary">Continue lendo</strong>
                            </a>
                        </article>

                        <article class="blog-post mb-3 bg-light">
                            <h2 class="blog-post-title">Post 7</h2>
                            <p class="blog-post-meta">Maio 20, 2021 by <a href="#">Duarte Gauss</a></p>
                    
                            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                            <a href="./blog_info.php">
                                <strong class="text-primary">Continue lendo</strong>
                            </a>
                        </article>
                        <!-- End Conteudos do Blogger-->

                        <!--Paginacao-->
                        <nav class="d-flex justify-content-center" aria-label="Another pagination ">
                            <ul class="pagination pagination-lg flex-wrap">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                         <!--End Paginacao-->
                    </div>

                    <!-- Conteudos da Lateral direita-->
                    <div class="col-md-4">
                        <div class="position-sticky" style="top: 2rem;">
                            <div class="p-4 mb-3 bg-light rounded">
                                <h4 class="fst-italic">Sobre</h4>
                                <p class="mb-0">Aqui encontraras artigos de diferentes...</p>
                            </div>

                            <div class="p-4">
                                <h4 class="fst-italic">Categorias</h4>
                                <ol class="list-unstyled mb-0">
                                    <li><a href="#">Programacao</a></li>
                                    <li><a href="#">Matematica</a></li>
                                    <li><a href="#">Cantores</a></li>
                                </ol>
                            </div>

                            <div class="p-4">
                                <h4 class="fst-italic">Autores</h4>
                                <ol class="list-unstyled">
                                    <li><a href="#">Duarte</a></li>
                                    <li><a href="#">Joaquim</a></li>
                                    <li><a href="#">Mateus</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!--End Conteudos da Lateral direita-->
                </div>
            </section>
            <!--End Artigos do Blogger-->
        </Main>

        <?php
         
        require_once './Includes/footer.php';
        
    ?>