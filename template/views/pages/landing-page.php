<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>" itemscope itemtype="https://schema.org/WebSite">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>">
    <meta name="description" content=""/>
    <meta name="author" content="Léo B. Castro"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="index, follow"/>

    <link rel="base" href="http://www.leobcastro.com.br"/>
    <link rel="canonical" href="<?php echo base_url() ?>"/>
    <link rel="sitemap" type="application/xml" href="<?php echo $this->config->item('base_url') ?>sitemap.xml"/>
    <link rel="publisher" href="https://plus.google.com/u/0/113635065418336259527"/>

    <meta itemprop="name" content="Desenvolvimento de Soluções Web - SJCampos"/>
    <meta itemprop="description" content=""/>
    <meta itemprop="image" content=""/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <meta property="og:title" content="Desenvolvimento de Soluções Web - SJCampos"/>
    <meta property="og:description" content=""/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:type" content="image/jpg"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="600"/>
    <meta property="og:url" content="<?php echo base_url(uri_string()) ?>"/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>

    <meta name="twitter:title" content="Desenvolvimento de Soluções Web - SJCampos"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content="@leobcastro94"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"/>
    <link rel="stylesheet" href="<?php echo asset('css/animate.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>

    <style>
        html {
            font-family: "Roboto", sans-serif;
        }
        .navbar-dark {
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#4c4c4c+0,595959+12,666666+25,474747+39,2c2c2c+50,000000+51,111111+60,2b2b2b+76,1c1c1c+91,131313+100;Black+Gloss+%231 */
            background: rgb(76,76,76); /* Old browsers */
            background: -moz-linear-gradient(-45deg,  rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg,  rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg,  rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
            box-shadow: 1px 1px 10px rgba(0, 0, 0, .2);
        }
        .margin-top {
            margin-top: 50px;
        }
        .intro h1 {
            font-size: 2.2em;
            font-weight: 400;
        }
        .intro p {
            font-weight: 300;
        }
        .intro .btn {
            width: 50%;
            float: left;
        }
        .img-box {
            width: 100%;
            height: 350px;
            border: 1px solid #777777;
            margin-top: 10px;
        }
        .img-box img {
            width: 100%;
            height: 100%;
        }



        /**
 * TO ACTION STYLES
 */

        .to-action {
            background-color: #00bcd4;
        }
        .to-action h1 {
            font-size: 2em;
            font-weight: 400;
        }
        .to-action h1, .to-action p {
            color: #ffffff;
        }
        .to-action .heading-line {
            background-color: #ffffff;
        }

        /** Contact Form */
        .to-action input {
            border: 1px solid #999 !important;
        }
        .to-action input:focus,
        .to-action input:hover {
            border: 1px solid #ffffff;
        }
        .to-action input {
            background-color: transparent !important;
            color: #ffffff !important;
        }

        .to-action .btn {
            width: 50%;
            margin-top: 7px;
            box-shadow: none;
            margin-left: 0;
        }

        .to-action .mini-text {
            margin-top: 5px;
            font-size: .8em;
        }

        @media screen and (max-width: 768px) {
            .to-action h1 {
                font-size: 1.7em;
            }
            .to-action .btn {
                width: 100%;
            }
        }

        /**
         * END TO ACTION STYLES
         */

        .navbar-btn {
            color: #ffffff !important;
            float: right;
            margin-right: 5px;
            margin-top: 13px;
        }

        .final-footer {
            background-color: #f7f7f7;
        }
        .final-footer p {
            font-size: .8em;
            color: #777;
            font-weight: 300;
        }

    </style>

    <?php echo ie_support_field() ?>

    <title>Desenvolvimento de Soluções Web - São José dos Campos</title>
</head>
<body>
    <main class="container-full" role="main">
        <header>
            <!-- NAVBAR -->
            <div class="navbar navbar-fixed navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a title="Logo" class="scroll" href="<?php echo route('/') ?>">
                            <img title="Logo" src="<?php echo asset('img/logo/logo-small.png') ?>" alt="Logo do site de desenvolvimento web do LEOBCASTRO"/>
                        </a>
                    </div>
                    <a title="Voltar para o site" href="<?php echo route('/#contact-me') ?>" class="btn btn-default navbar-btn" role="button">
                        Contate-me!
                    </a>
                </div>
            </div><!-- END NAVBAR -->
        </header>
        <div class="container container-space margin-top">
            <div class="line line-space intro">
                <div class="m8col col-space center">
                    <div class="img-box">
                        <img src="<?php echo asset('img/laptop-with-colorful-business-documents_1232-821.jpg') ?>"/>
                    </div>
                </div>
                <div class="m4col col-space">
                    <h1>Resultados é o que me motiva</h1>
                    <p>Meu pensamento é simples! Resultados geram resultados, então dou o meu maximo em cada projeto para gerar resultados para meus clientes, e eles geram resultados para mim.</p>
                    <a href="#to-action" class="btn btn-light scroll">Quero Resultados!</a>
                </div>
            </div>
            <div class="line line-space">
                <div class="collist">
                    <div class="fund">
                        Nulla ante dui, luctus tincidunt purus vel, dapibus ullamcorper odio. Nunc hendrerit. Nulla ante dui, luctus tincidunt.
                    </div>
                </div>
            </div>
            <div class="line line-space"></div>
            <div class="line line-space">
                <div class="s4col col-space">
                    <div class="xcard">
                        <h1>Otimizado para o Mercado Web Nacional</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    </div>
                </div>
                <div class="s4col col-space">
                    <div class="xcard">
                        <h1>Facil de Gerenciar com Meu Dashboard</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    </div>
                </div>
                <div class="s4col col-space">
                    <div class="xcard">
                        <h1>Suporte Gratuito 24h para Clientes</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- CALL TO ACTION -->
        <a id="to-action"></a>
        <div class="container-full backimage to-action" style="background-image: url(<?php echo asset('img/pexels-photo-30776.jpg') ?>)">
            <div class="lightbox">
                <section class="container container-space">
                    <div class="line">
                        <header class="collist">
                            <h1 class="no-margin">Orçamento Rápido</h1>
                            <div class="heading-line" role="separator"></div>
                            <p class="tagline">Deixe seu email para conversarmos um pouco sobre o projeto, antes de efetivamente marcarmos algo.</p>
                        </header>
                    </div>
                    <div class="line">
                        <div class="collist">
                            <form id="action-form" method="post" action="<?php echo route('/email/store') ?>" accept-charset="utf-8">
                                <input class="form" type="email" id="email" name="email" placeholder="Coloque seu principal email"/>
                                <?php echo csrf_field('action_token') ?>
                                <button id="action-submit" type="submit" class="btn btn-default">
                                    <i class="material-icons" style="vertical-align: -29%">verified_user</i>
                                    Cadastrar
                                </button>
                            </form>
                            <p class="mini-text">Também odeio spam!</p>
                        </div>
                        <div class="callback"></div>
                    </div>
                </section>
            </div>
        </div><!-- END CALL TO ACTION -->
    </main>
    <footer class="container-full final-footer">
        <p class="center">&copy; 2017 <?php echo getenv('APP_NAME') ?> - todos os direitos reservados.</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo asset('js/animations.min.js') ?>"></script>
    <script src="<?php echo asset('js/app.min.js') ?>"></script>
</body>
</html>