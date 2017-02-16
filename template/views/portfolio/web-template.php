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

    <title><?php echo getenv('APP_NAME') ?> - Portfólio - Web Template</title>
</head>
<body>
    <main class="container-full" role="main">
        <?php require_once ('includes/navbar.php') ?>
        <!-- CASE DESCRIPTION -->
        <div class="container-full desc">
            <section class="container container-space margin-top">
                <div class="line line-space">
                    <header class="collist col-space ">
                        <h1 class="no-margin title">Website de uma Agência Web</h1>
                        <div class="heading-line"></div>
                        <p class="tagline"><em class="text-normal">Website fictício</em> de uma <em class="text-normal">agência de desenvolvimento web</em> para um projeto pessoal, antigo.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Home page do Website" src="<?php echo asset('img/prisme-print.png') ?>" alt="Website da Prisme aberto em um mac"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Sobre o Projeto</h2>
                        <p>Este é um <strong>projeto antigo</strong>, meu, onde o objetivo era aplicar meus recentes conhecimentos sobre <em class="text-normal">SEO</em> e <em class="text-normal">marketing digital</em> (como palavras chave, <em class="text-normal">captura de emails</em>, elementos estratégicamente posicionados para <em class="text-normal">gerar mais conversões</em>, etc...). Escolhi o tema "<em class="text-normal">Agência de desenvolvimento web</em>" porque é a minha área e consequentemente ficou mais facil pra mim criar e <em class="text-normal">estruturar o conteúdo no layout</em>.</p>
                        <p>Evolui muito desde esse projeto até hoje em dia, você pode conferir um pouco dessa evolução no meu <a href="#">próprio site (no portfólio)</a>.</p>
                        <a title="Entrar no site" class="btn btn-light" href="https://lleocastro.github.io/developer-agency-template" rel="nofollow" role="button">
                            <i class="material-icons" style="vertical-align: -29%">web</i>
                            Visitar o site
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
                                    <p class="counter" data-from="0" data-to="1087" data-speed="2000" data-refresh-interval="30">1087</p>
                                    <p class="title-counter">Linhas de Código</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="7" data-speed="1100" data-refresh-interval="30">07</p>
                                    <p class="title-counter">Nota de Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="m6col col-space">
                            <div class="line line-space">
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="7200" data-speed="3000" data-refresh-interval="30">7200</p>
                                    <p class="title-counter">Tempo Gasto (min)</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="126" data-speed="1900" data-refresh-interval="30">126</p>
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