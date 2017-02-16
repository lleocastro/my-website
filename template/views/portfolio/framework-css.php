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

    <title><?php echo getenv('APP_NAME') ?> - Portfólio - Framework CSS</title>
</head>
<body>
    <main class="container-full" role="main">
        <?php require_once ('includes/navbar.php') ?>
        <!-- CASE DESCRIPTION -->
        <div class="container-full desc">
            <section class="container container-space margin-top">
                <div class="line line-space">
                    <header class="collist col-space ">
                        <h1 class="no-margin title">Meu Framework Front-End</h1>
                        <div class="heading-line"></div>
                        <p class="tagline">Ele me permite <em class="text-normal">criar websites</em> unicos e exclusivos para cada projeto. <strong>Altamente produtivo</strong>.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Código fonte do projeto" src="<?php echo asset('img/framework-css.png') ?>" alt="Código fonte do bootstylle aberto em um mac"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Sobre a Ferramenta</h2>
                        <p>Estou desenvolvendo esse framework para suprir uma necessidade minha de ter um <em class="text-normal">bootstrap CSS</em> flexivel e facilmente customizavel. Basicamente o "Bootstylle" possui varios componentes pré estilizados possibilitando estilizar efetivamente o componente por projeto, o que me permite <em class="text-normal">desenvolver sites</em> unicos.</p>
                        <p>Toda a interface do meu site "<a href="<?php echo route('/') ?>">leobcastro.com</a>" foi desenvolvida com o Bootstylle. Ele me fornece tudo que preciso para <em class="text-normal">criar site</em> fluido e <em class="text-normal">responsivo</em> (acessivel a dispositivos móveis).</p>
                        <a title="Ir para a página do projeto" href="https://github.com/lleocastro/bootstylle" rel="nofollow" class="btn btn-light" role="button">
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
                                    <p class="counter" data-from="0" data-to="692" data-speed="2000" data-refresh-interval="30">692</p>
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
                                    <p class="counter" data-from="0" data-to="21600" data-speed="3000" data-refresh-interval="30">21600</p>
                                    <p class="title-counter">Tempo Gasto (min)</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="323" data-speed="1500" data-refresh-interval="30">323</p>
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