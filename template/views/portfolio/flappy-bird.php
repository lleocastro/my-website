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
                        <h1 class="no-margin title">Flappy Bird: Um viciante game</h1>
                        <div class="heading-line"></div>
                        <p class="tagline">Desenvolvi esse jogo baseado no próprio seguindo um mini curso online sobre <em class="text-normal">criação de jogos</em>.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Game home page" src="<?php echo asset('img/flappy-bird-print.png') ?>" alt="Website do jogo flappy bird aberto em um mac"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Sobre o Desenvolvimento</h2>
                        <p>Bom, como já disse antes, esse jogo foi densenvolvido seguindo aulas de um mini curso sobre <em class="text-normal">desenvolvimento de jogos</em> para web. Onde o objetivo era utilizar as <em class="text-normal">tecnologias web</em> para implementar a lógica do jogo. Ele foi desenvolvido basicamente com <em class="text-normal">HTML5</em>, <em class="text-normal">CSS3</em>, <em class="text-normal">Javascript</em> e algumas bibliotecas para reproduzir os sons do game.</p>
                        <p><strong>Infelizmente esse jogo não funciona corretamente em dispositivos moveis (tablets e smartphones) por uma pequena incompatibilidades com algumas bibliotecas e algumas ações próprio do jogo</strong>.</p>
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
                                    <p class="counter" data-from="0" data-to="98" data-speed="1900" data-refresh-interval="30">98</p>
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