<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>" itemscope itemtype="https://schema.org/WebSite">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content="Versão customizada que extende e acrescenta varias outras funcionalidades para aumentar a produtividade no desenvolvimento back-end"/>

    <meta itemprop="name" content="Versão customizada do Codeigniter"/>
    <meta itemprop="description" content="Versão customizada que extende e acrescenta varias outras funcionalidades para aumentar a produtividade no desenvolvimento back-end"/>
    <meta itemprop="image" content="<?php echo asset('img/framewok-php.png') ?>"/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Versão customizada do Codeigniter</title>
</head>
<body>
    <main class="container-full" role="main">
        <?php require_once ('includes/navbar.php') ?>
        <!-- CASE DESCRIPTION -->
        <div class="container-full desc">
            <section class="container container-space margin-top">
                <div class="line line-space">
                    <header class="collist col-space ">
                        <h1 class="no-margin title">Meu Framework Back-End</h1>
                        <div class="heading-line" role="separator"></div>
                        <p class="tagline">Essa é minha versão customizada do <a title="Página do projeto" href="https://codeigniter.com/" rel="nofollow">Codeigniter</a>, um fantástico framework para dev web.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Código do projeto" src="<?php echo asset('img/framework-php.png') ?>" alt="código do projeto aberto em uma IDE"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Sobre a Ferramenta</h2>
                        <p>O CodeIgniter é um framework PHP construído para que desenvolvedores possam <em class="text-normal">criar aplicações web</em> completas.</p>
                        <p>Ainda com toda essa base, minha versão customizada extende e acrescenta varias outras funcionalidades que aumentam a produtividade no desenvolvimento back-end, e melhora o desenvolvimento front-end.</p>
                        <p>O que me possibilita entregar projetos em menos tempo mantendo a qualidade, performance e segurança na aplicação web.</p>
                        <p><strong>E ainda possuo varias outras ferramentas no <a title="Meu perfil" href="https://github.com/lleocastro" rel="nofollow">meu github</a>, uma delas você pode conferir <a title="Ir para o portfólio do projeto" href="<?php echo route('/portfolio/framework-css') ?>">aqui no meu portfólio</a>.</strong></p>
                        <a title="Ir para a página do projeto" href="https://github.com/lleocastro/my-custom-ci" rel="nofollow" class="btn btn-light" role="button">
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
                                    <p class="counter" data-from="0" data-to="10520" data-speed="2000" data-refresh-interval="30">10520</p>
                                    <p class="title-counter">Linhas de Código</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="10" data-speed="1100" data-refresh-interval="30">10</p>
                                    <p class="title-counter">Nota de Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="m6col col-space">
                            <div class="line line-space">
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="28800" data-speed="3000" data-refresh-interval="30">28800</p>
                                    <p class="title-counter">Tempo Gasto (min)</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="387" data-speed="1900" data-refresh-interval="30">387</p>
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