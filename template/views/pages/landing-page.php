<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>" itemscope itemtype="https://schema.org/WebSite">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>">
    <meta name="description" content="Como atrair mais clientes? Essa é a principal pergunta que me fazem. Quer saber como ter mais clientes, lucro e tempo? Conheça meu trabalho!"/>
    <meta name="author" content="Léo B. Castro"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="index, follow"/>

    <link rel="sitemap" type="application/xml" href="<?php echo $this->config->item('base_url') ?>sitemap.xml"/>
    <link rel="publisher" href="https://plus.google.com/u/0/113635065418336259527"/>

    <meta itemprop="name" content="Desenvolvimento de Soluções Web - SJCampos"/>
    <meta itemprop="description" content="Como atrair mais clientes? Essa é a principal pergunta que me fazem. Quer saber como ter mais clientes, lucro e tempo? Conheça meu trabalho!"/>
    <meta itemprop="image" content="<?php echo asset('img/social-share.jpg') ?>"/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <meta property="og:title" content="Desenvolvimento de Soluções Web - SJCampos"/>
    <meta property="og:description" content="Como atrair mais clientes? Essa é a principal pergunta que me fazem. Quer saber como ter mais clientes, lucro e tempo? Conheça meu trabalho!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="<?php echo asset('img/social-share.jpg') ?>"/>
    <meta property="og:image:type" content="image/jpg"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="600"/>
    <meta property="og:url" content="<?php echo base_url(uri_string()) ?>"/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>

    <meta name="twitter:title" content="Desenvolvimento de Soluções Web - SJCampos"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Como atrair mais clientes? Essa é a principal pergunta que me fazem. Quer saber como ter mais clientes, lucro e tempo? Conheça meu trabalho!"/>
    <meta name="twitter:image" content="<?php echo asset('img/social-share.jpg') ?>"/>
    <meta name="twitter:url" content="@leobcastro94"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"/>
    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/landing-page.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/animate.min.css') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="<?php echo asset('css/toastr.min.css') ?>"/>
    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>

    <?php echo ie_support_field() ?>

    <title>Desenvolvimento de Soluções Web - São José dos Campos</title>
</head>
<body>
    <?php require_once (dirname(__DIR__) . '/layouts/includes/google-analytics.php') ?>
    <main class="container-full">
        <header>
            <!-- NAVBAR -->
            <div class="navbar navbar-fixed navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a title="Logo" class="scroll" href="<?php echo route('/') ?>">
                            <img title="Logo" src="<?php echo asset('img/logo/logo-small.png') ?>" alt="Logo do site de desenvolvimento web do LEOBCASTRO"/>
                        </a>
                    </div>
                    <a title="Contate Léo B. Castro" href="<?php echo route('/#contact-me') ?>" class="btn btn-default navbar-btn wow pulse infinite" data-wow-delay="2800ms" role="button">
                        Contate-me!
                    </a>
                </div>
            </div><!-- END NAVBAR -->
        </header>
        <section class="container container-space margin-top">
            <div class="line line-space intro">
                <div class="m8col col-space center">
                    <div class="img-box">
                        <img title="Resultados" src="<?php echo asset('img/laptop-with-colorful-business-documents.jpg') ?>" alt="Geramos resultodos para seu negócio"/>
                    </div>
                </div>
                <header class="m4col col-space">
                    <h1>Resultados é o que me motiva</h1>
                    <p class="tagline">Meu pensamento é simples! Resultados geram resultados, então dou o meu máximo em cada projeto para gerar resultados para meus clientes, e eles geram resultados para mim.</p>
                    <a title="Orçamento" href="#to-action" class="btn btn-light scroll" role="button">Quero Resultados!</a>
                </header>
            </div>
            <div class="line line-space">
                <div class="collist">
                    <div class="fund">
                        Ainda está com dúvidas? <strong>Não tem certeza se uma solução web resolveria seu problema?</strong> Entre em <a title="Contate Léo B. Castro" href="<?php echo route('/#contact-me') ?>"><strong>CONTATO</strong></a>! Vamos conversar. 😄
                    </div>
                </div>
            </div>
            <div class="line line-space"></div>
            <div class="line line-space">
                <div class="m4col col-space">
                    <div class="xcard">
                        <h2>Otimizado para o Mercado Web Nacional</h2>
                        <p>O desenvolvimento é focando em distribuição de conteúdo otimizado, o que levará os usuários a converterem mais, e também é aplicado protocolos das principais redes sociais para definir um conteúdo de compartilhamento personalizado.</p>
                    </div>
                </div>
                <div class="m4col col-space">
                    <div class="xcard">
                        <h2>Facil de Gerenciar com Meu Dashboard</h2>
                        <p>Com o painel de controle que estou criando é muito facil gerenciar o site, é possivel visualizar algumas métricas de acesso ao site, como também é possivel gerenciar emails e mensagens que os visitantes deixam no site. Veja detalhes sobre o projeto <a title="Portfólio do projeto" href="<?php echo route('/portfolio/leobcastro') ?>">aqui</a>.</p>
                    </div>
                </div>
                <div class="m4col col-space">
                    <div class="xcard">
                        <h2>Suporte 24h para Meus Clientes</h2>
                        <p>Atendo clientes da melhor forma possível, atendendo 24 horas por dia, 7 dias por semana. Fornecendo suporte rapido e eficiente para solucionar quaisquer problemas que possam surgir nos serviços e/ou produtos, como, sites, sistemas, aplicações, etc...</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- CALL TO ACTION -->
        <a id="to-action"></a>
        <div id="oBdy" class="container-full backimage to-action" style="background-image: url(<?php echo asset('img/pexels-photo-30776.jpg') ?>)" onload="oBdy.style.backgroundAttachment = 'fixed'">
            <div class="lightbox">
                <section class="container container-space">
                    <div class="line">
                        <header class="collist">
                            <h1 class="no-margin">Orçamento</h1>
                            <div class="heading-line" role="separator"></div>
                            <p class="tagline">Se interessou por tudo que viu? Ok! Então, agora deixe seu email para conversarmos sobre a solução que irar alavancar seu negócio...</p>
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
    <?php require_once (dirname(__DIR__) . '/layouts/includes/final-footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo asset('js/animations.min.js') ?>"></script>
    <script src="<?php echo asset('js/landing-page.min.js') ?>"></script>
    <script src="<?php echo asset('js/toastr.min.js') ?>"></script>
</body>
</html>