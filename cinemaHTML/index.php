<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vísio Play</title>

    <!-- CSS -->
    <?php include_once('inc/css.php'); ?>
    <!-- /CSS -->
</head>

<body>
    <div>


        <!-- CONTAINER -->
        <div class="container">
            <!-- CABEÇALHO -->
            <?php include_once('inc/topo.php'); ?>
            <!-- /CABEÇALHO -->
            <!-- CONTEÚDO -->
            <div class="row">
                <!-- BANNER -->
                <br><br><br>
                <h2> LANÇAMENTOS </h2>
                <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                <!-- /BANNER -->
            </div>
            <!-- /CONTEÚDO -->
            <br><br><br>
            <!-- PROPAGANDA -->
            <img src="https://tpc.googlesyndication.com/simgad/13054031593377249008" width="1290" height="250" alt="" class="img_ad">
            <!-- /PROPAGANDA -->
            <!-- FILMES EM BREVE -->
            <br><br><br>
            <h2 class="text-white">FILMES EM BREVE</h2>
            <div class="row">
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Foto1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Foto2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a short card.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Foto3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Foto4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Foto5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Foto6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <!-- /FILMES EM BREVE -->
                <p></p>
                <p></p>
                <!-- NOTICIAS -->
                <div class="row">
                    <div class="col-md-6">
                        <h1>NOTÍCIAS EM DESTAQUE</h1>
                        <div class="card-bg-black" style="width: 40rem;">
                            <img src="img/noticia1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-bg-black">
                                    <img src="img/Noticias2.jpg" class="card-img-top" href="https://www.adorocinema.com/noticias/filmes/noticia-163939/" alt="...">
                                    <div class="card-body">
                                        <p class="text-white">News</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-bg-black">
                                    <img src="img/foto7.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="text-white">News</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-bg-black">
                                    <img src="img/Noticias3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="text-white">News</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-bg-black">
                                    <img src="img/Noticias4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="text-white">News</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="cold-md-12">
                    < </div>
                        <!-- /NOTICIAS -->
                        <!-- RODAPÉ -->
                        <?php include_once('inc/rodape.php'); ?>
                        <!-- RODAPÉ -->
                </div>
                <!-- /CONTAINER -->

</body>
<!-- JS -->
<?php include_once('inc/js.php'); ?>
<!-- /JS -->

</html>