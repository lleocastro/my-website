<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=""/>
    <meta name="author" content="Léo B. Castro"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="index, follow"/>

    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="LEOBCASTRO"/>
    <meta property="og:locale" content="pt_BR"/>

    <meta name="twitter:title" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>

    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/portfolio.min.css') ?>"/>

    <?php echo ie_support_field() ?>

    <title>Léo B. Castro - Portfólio - Web Template</title>
</head>
<body>
<div class="container-full">
    <!-- NAVBAR -->
    <div class="navbar navbar-fixed navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-brand">
                <a title="Logo" class="scroll" href="<?php echo route('/') ?>">
                    <img title="Logo" src="<?php echo asset('img/logo/logo-small.png') ?>" alt="Logo do website"/>
                </a>
            </div>
            <a title="Voltar para o portfólio" href="../../index.html#portfolio" class="btn btn-dark navbar-btn" role="button">
                <i class="material-icons" style="vertical-align: -29%">replay</i>
                Voltar
            </a>
        </div>
    </div><!-- END NAVBAR -->

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
                    <img title="Home page" src="<?php echo asset('img/prisme-print.png') ?>" alt="Website da Prisme aberto em um mac"/>
                </div>
                <div class="m6col col-space">
                    <h2>Proin fringilla luctus</h2>
                    <p>Nullam dolor quam, dignissim nec pretium et, cursus sit amet magna. Proin fringilla luctus ipsum, a ornare metus ullamcorper sagittis. Vivamus blandit, nisi quis tempus dignissim, eros mauris blandit elit, rutrum iaculis neque ligula vitae arcu. Nunc placerat nibh ac tellus vehicula ultrices. Pellentesque lectus ante, posuere a lectus at, egestas vulputate ipsum.</p>
                    <p>Suspendisse at dolor velit. Etiam placerat nibh nisl, sit amet consequat orci porta a. Vestibulum vitae nunc euismod.</p>
                    <a title="Entrar no site" class="btn btn-light" href="https://lleocastro.github.io/developer-agency-template" rel="nofollow" role="button">
                        <i class="material-icons" style="vertical-align: -29%">web</i>
                        Visitar o site
                    </a>
                </div>
            </article>
        </section>
    </div>

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

    <footer class="container-full final-footer">
        <p class="center">&copy; 2017 LEOBCASTRO - todos os direitos reservados.</p>
    </footer>
</div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo asset('js/animations.min.js') ?>"></script>
    <script src="<?php echo asset('js/portfolio.min.js') ?>"></script>
</html>