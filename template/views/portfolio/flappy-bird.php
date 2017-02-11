<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content=""/>

    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>

    <meta name="twitter:title" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Portfólio - Flappy Bird</title>
</head>
<body>
    <main class="container-full" role="main">
        <?php require_once ('includes/navbar.php') ?>
        <!-- CASE DESCRIPTION -->
        <div class="container-full desc">
            <section class="container container-space margin-top">
                <div class="line line-space">
                    <header class="collist col-space ">
                        <h1 class="no-margin title">Donec facilisis tortor quis risus</h1>
                        <div class="heading-line"></div>
                        <p class="tagline">Aliquam erat volutpat. Cras aliquet pharetra turpis, consectetur sagittis quam volutpat sed. </p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Game home page" src="<?php echo asset('img/flappy-bird-print.png') ?>" alt="Website do jogo flappy bird aberto em um mac"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Proin fringilla luctus</h2>
                        <p>Nullam dolor quam, dignissim nec pretium et, cursus sit amet magna. Proin fringilla luctus ipsum, a ornare metus ullamcorper sagittis. Vivamus blandit, nisi quis tempus dignissim, eros mauris blandit elit, rutrum iaculis neque ligula vitae arcu. Nunc placerat nibh ac tellus vehicula ultrices. Pellentesque lectus ante, posuere a lectus at, egestas vulputate ipsum.</p>
                        <p>Suspendisse at dolor velit. Etiam placerat nibh nisl, sit amet consequat orci porta a. Vestibulum vitae nunc euismod.</p>
                        <a title="Entrar no site" href="https://lleocastro.github.io/flappy-bird" rel="nofollow" class="btn btn-light" role="button">
                            <i class="material-icons" style="vertical-align: -29%">play_arrow</i>
                            Bora jogar?
                        </a>
                    </div>
                </article>
            </section>
        </div><!-- END CASE DESCRIPTION -->
        <!-- DEV INFORMATIONS -->
        <div class="container-full backimage informations" style="background-image: url(<?php echo asset('img/portfolio.jpeg') ?>)">
            <div class="lightbox">
                <div class="container container-space">
                    <div class="line line-space">
                        <div class="m6col col-space">
                            <div class="line line-space">
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="869" data-speed="2000" data-refresh-interval="30">869</p>
                                    <p class="title-counter">Linhas de Código</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="9" data-speed="1100" data-refresh-interval="30">09</p>
                                    <p class="title-counter">Nota de Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="m6col col-space">
                            <div class="line line-space">
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="4320" data-speed="3000" data-refresh-interval="30">4320</p>
                                    <p class="title-counter">Tempo Gasto (min)</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="109" data-speed="1900" data-refresh-interval="30">98</p>
                                    <p class="title-counter">Copos de Café</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END DEV INFORMATIONS -->
        <?php require_once (dirname(__DIR__) . '/layouts/includes/final-footer.php') ?>
    </main>
</body>
    <?php require_once ('includes/scripts.php') ?>
</html>