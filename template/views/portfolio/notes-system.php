<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>" itemscope itemtype="https://schema.org/WebSite">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content=""/>

    <meta itemprop="name" content=""/>
    <meta itemprop="description" content=""/>
    <meta itemprop="image" content="<?php echo asset('img/notes.jpg') ?>"/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="<?php echo asset('img/notes.jpg') ?>"/>
    <meta property="og:url" content="<?php echo base_url(uri_string()) ?>"/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>

    <meta name="twitter:title" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content="<?php echo asset('img/notes.jpg') ?>"/>
    <meta name="twitter:url" content="<?php echo base_url(uri_string()) ?>"/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Sistema de notas simples</title>
</head>
<body>
    <main class="container-full" role="main">
        <?php require_once ('includes/navbar.php') ?>

        <!-- CASE DESCRIPTION -->
        <div class="container-full desc">
            <section class="container container-space margin-top">
                <div class="line line-space">
                    <header class="collist col-space ">
                        <h1 class="no-margin title">Aplicativo de Notas Simples</h1>
                        <div class="heading-line"></div>
                        <p class="tagline">Um simples mas eficiente <em class="text-normal">gerenciador de notas online</em> para guardar anotações, listas e lembretes.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Gerenciador de Notas" src="<?php echo asset('img/xnotes-print.png') ?>" alt="Home page do gerenciador de notas 'xnotes'"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Sobre o XNotes</h2>
                        <p>O XNotes é um aplicativo de notas online que permite a criação de notas, listas e lembretes para poder acessa-los de qualquer lugar e de qualquer dispositivo com internet (computator, notebook, tablet, smatphone, smart tv).</p>
                        <p><strong>"Aliás todos os meus sites são compativeís com esses dispositivos. Teste meu site <a href="<?php echo route('/portfolio/leobcastro') ?>">(leobcastro)</a>. 😉</strong></p>
                        <p>Atualmente o XNotes não está online (não está em produção), então não é possivel acessar a aplicação, mas pode ver o projeto no meu github.</p>
                        <a title="Ir para a página do projeto" href="https://github.com/lleocastro/xnotes" rel="nofollow" class="btn btn-light" role="button">
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
                                    <p class="counter" data-from="0" data-to="1380" data-speed="2000" data-refresh-interval="30">1380</p>
                                    <p class="title-counter">Linhas de Código</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="8" data-speed="1100" data-refresh-interval="30">08</p>
                                    <p class="title-counter">Nota de Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="m6col col-space">
                            <div class="line line-space">
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="10080" data-speed="3000" data-refresh-interval="30">10080</p>
                                    <p class="title-counter">Tempo Gasto (min)</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="172" data-speed="1900" data-refresh-interval="30">172</p>
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