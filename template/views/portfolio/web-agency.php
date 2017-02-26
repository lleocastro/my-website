<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>" itemscope itemtype="https://schema.org/WebSite">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content="Template de uma agência de desenvolvimento web ficticia focada em resultados através de SEO"/>

    <meta itemprop="name" content="Template de uma agência web"/>
    <meta itemprop="description" content="Template de uma agência de desenvolvimento web ficticia"/>
    <meta itemprop="image" content="<?php echo asset('img/website-web-agency.png') ?>"/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Template de Agência Web</title>
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
                        <div class="heading-line" role="separator"></div>
                        <p class="tagline">Website fictício de uma <em class="text-normal">agência de desenvolvimento web</em> para um projeto pessoal, antigo.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Home page do Website" src="<?php echo asset('img/prisme-print.png') ?>" alt="Website da Prisme aberto em um mac"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Sobre o Projeto</h2>
                        <p>Este é um projeto antigo, meu, onde o objetivo era aplicar técnicas de <em class="text-normal">SEO</em> e <em class="text-normal">marketing digital</em> (como palavras chave, <em class="text-normal">captura de emails</em>, elementos estratégicamente posicionados para gerar mais conversões, etc...) para fins de testes.</p>
                        <p>Sucesso! Veja meu site (<a title="Ir para o portfólio do projeto" href="<?php echo route('/portfolio/leobcastro') ?>">leobastro.com</a>) :p</p>
                        <a title="Entrar no site da Prisme" class="btn btn-light" href="https://lleocastro.github.io/developer-agency-template" rel="nofollow" role="button">
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