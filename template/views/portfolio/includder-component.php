<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>" itemscope itemtype="https://schema.org/WebSite">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content=""/>

    <meta itemprop="name" content=""/>
    <meta itemprop="description" content=""/>
    <meta itemprop="image" content="<?php echo asset('img/component.jpg') ?>"/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="<?php echo asset('img/component.jpg') ?>"/>
    <meta property="og:url" content="<?php echo base_url(uri_string()) ?>"/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>

    <meta name="twitter:title" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content="<?php echo asset('img/component.jpg') ?>"/>
    <meta name="twitter:url" content="<?php echo base_url(uri_string()) ?>"/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Carregador de Classes PHP</title>
</head>
<body>
    <main class="container-full" role="main">
        <?php require_once ('includes/navbar.php') ?>

        <!-- CASE DESCRIPTION -->
        <div class="container-full desc">
            <section class="container container-space margin-top">
                <div class="line line-space">
                    <header class="collist col-space ">
                        <h1 class="no-margin title">Componente: Autoloader</h1>
                        <div class="heading-line"></div>
                        <p class="tagline">Autoload desenvolvido para integrar no meu framework <a href="https://github.com/lleocastro/genniuz-framework" rel="nofollow">"Genniuz"</a>. Segue a especificação <a href="http://www.php-fig.org/psr/psr-4/">PSR-4</a>.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Componente Includder" src="<?php echo asset('img/includder-print.png') ?>" alt="Código fonte do component includder"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Para Desenvolvedores</h2>
                        <p>Autoload para fazer o carregamento de classes PHP dinamicamente.</p>
                        <p>Possui facil integração com qualquer projeto web, tendo apenas que configurar algumas variaveis sensiveis ao projeto.</p>
                        <p>Na pagina do projeto no meu github contém a documentação de como utiliza-lo. Acesse!</p>
                        <a title="Ir para a página do projeto" href="https://github.com/lleocastro/includder" rel="nofollow" class="btn btn-light" role="button">
                            <i class="material-icons" style="vertical-align: -29%">visibility</i>
                            Ver no Github
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
                                    <p class="counter" data-from="0" data-to="297" data-speed="2000" data-refresh-interval="30">297</p>
                                    <p class="title-counter">Linhas de Código</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="8" data-speed="1100" data-refresh-interval="30">09</p>
                                    <p class="title-counter">Nota de Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="m6col col-space">
                            <div class="line line-space">
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="2880" data-speed="3000" data-refresh-interval="30">2880</p>
                                    <p class="title-counter">Tempo Gasto (min)</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="48" data-speed="1900" data-refresh-interval="30">48</p>
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