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
    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/toastr.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/landing-page.min.css') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>

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
                    <a title="Contate Léo B. Castro" href="<?php echo route('/#contact-me') ?>" class="btn btn-default navbar-btn" role="button">
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
                    <p>Meu pensamento é simples! Resultados geram resultados, então dou o meu máximo em cada projeto para gerar resultados para meus clientes, e eles geram resultados para mim.</p>
                    <a href="#to-action" class="btn btn-light scroll">Quero Resultados!</a>
                </div>
            </div>
            <div class="line line-space">
                <div class="collist">
                    <div class="fund">
                        <strong>Ei</strong>! Ainda está com dúvidas? Não tem certeza se isso resolveria seu problema? Entre em <a title="Contate Léo B. Castro" href="<?php echo route('/#contact-me') ?>"><strong>contato</strong></a>! Vamos conversar. 😄
                    </div>
                </div>
            </div>
            <div class="line line-space"></div>
            <div class="line line-space">
                <div class="m4col col-space">
                    <div class="xcard">
                        <h1>Otimizado para o Mercado Web Nacional</h1>
                        <p>O desenvolvimento é focando em distribuição de conteúdo otimizado, o que levará os usuários a converterem mais, e também é aplicado protocolos das principais redes sociais para definir um conteúdo de compartilhamento personalizado.</p>
                    </div>
                </div>
                <div class="m4col col-space">
                    <div class="xcard">
                        <h1>Facil de Gerenciar com Meu Dashboard</h1>
                        <p>Com o painel de controle que estou criando é muito facil gerenciar o site, é possivel visualizar algumas métricas de acesso ao site, como também é possivel gerenciar emails e mensagens que os visitantes deixam no site. Veja detalhes sobre o projeto <a href="#">aqui</a>.</p>
                    </div>
                </div>
                <div class="m4col col-space">
                    <div class="xcard">
                        <h1>Suporte Gratuito 24h para Clientes</h1>
                        <p>Estou sempre disposto a atender clientes da melhor forma possível, atendendo 24h por dia, 7 dias por semana. Além de correções de problemas que possam surgir o suporte também Inclui atualizações para novas versões e melhorias.</p>
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
    <script src="<?php echo asset('js/toastr.min.js') ?>"></script>
    <script src="<?php echo asset('js/landing-page.min.js') ?>"></script>
</body>
</html>