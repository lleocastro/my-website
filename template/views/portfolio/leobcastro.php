<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>" itemscope itemtype="https://schema.org/WebSite">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content="Todo o layout do site foi minuciosamente pensado na usabilidade e acessibilidade dos usuários. Leia mais!"/>

    <meta itemprop="name" content="Como o site LEOBCASTRO foi desenvolvido"/>
    <meta itemprop="description" content="Todo o layout do site foi minuciosamente pensado na usabilidade e acessibilidade dos usuários. Leia mais!"/>
    <meta itemprop="image" content="<?php echo asset('img/leobcastro-website.jpg') ?>"/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <meta property="og:title" content="Como o site LEOBCASTRO foi desenvolvido"/>
    <meta property="og:description" content="Todo o layout do site foi minuciosamente pensado na usabilidade e acessibilidade dos usuários. Leia mais!"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="<?php echo asset('img/leobcastro-website.jpg') ?>"/>
    <meta property="og:url" content="<?php echo base_url(uri_string()) ?>"/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>

    <meta name="twitter:title" content="Como o site LEOBCASTRO foi desenvolvido"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Todo o layout do site foi minuciosamente pensado na usabilidade e acessibilidade dos usuários. Leia mais!"/>
    <meta name="twitter:image" content="<?php echo asset('img/leobcastro-website.jpg') ?>"/>
    <meta name="twitter:url" content="<?php echo base_url(uri_string()) ?>"/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Como o site LEOBCASTRO foi desenvolvido</title>
</head>
<body>
    <main class="container-full" role="main">
        <?php require_once ('includes/navbar.php') ?>
        <!-- CASE DESCRIPTION -->
        <div class="container-full desc">
            <section class="container container-space margin-top">
                <div class="line line-space">
                    <header class="collist col-space">
                        <h1 class="no-margin title">Sobre o Site LEOBCASTRO</h1>
                        <div class="heading-line"></div>
                        <p class="tagline">Toda a interface foi minuciosamente pensada na usabilidade e acessibilidade dos usuários.</p>
                    </header>
                </div>
                <article class="line line-space">
                    <div class="m6col col-space center">
                        <img title="Home page do site LEOBCASTRO" src="<?php echo asset('img/leobcastro-print.png') ?>" alt="Website do Léo B. Castro aberto em um mac"/>
                    </div>
                    <div class="m6col col-space">
                        <h2>Detalhes Técnicos</h2>
                        <p>O layout é simples e amigável (<a title="Ir para o portfólio do projeto" href="<?php echo route('portfolio/framework-css') ?>">desenvolvido com meu framework CSS</a>) para que qualquer pessoal possa navegar sem dificuldades, além disso, toda a estrutura é semanticamente correta com uma arquitetura de informações bem estruturadas e organizadas para tornar o site mais pratico de usar.</p>
                        <p><strong>"Levo muito a sério qualidade e performance no desenvolvimento, mas você já deve ter notado isso no meu site, certo?</strong> 😜</p>
                        <p>Mas não basta apenas ser bonito e rapido, também tem que gerar resultados, por isso tem todo um trabalho de <em class="text-normal">SEO</em> e marketing digital em cima dele. A final, foi por esse trabalho que você me encontrou...</p>
                        <a title="Voltar para a home do site" href="<?php echo route('/') ?>" class="btn btn-light" role="button">
                            <i class="material-icons" style="vertical-align: -29%">replay</i>
                            Vamos Lá de Novo?
                        </a>
                    </div>
                </article>
            </section>
            <section class="container">
                <article class="line line-space">
                    <div class="m6col col-space">
                        <h2>Painel de Controle</h2>
                        <p>Com o meu dashboard é possivel <em class="text-normal">gerenciar o site</em> e todo o seu conteúdo, atravéz de qualquer dispositivo com internet.</p>
                        <p>É possivel saber <em class="text-normal">o que os usuários estão fazendo no site</em>, o que estão vendo, de qual dispositivo estão acessando, horário do acesso, etc...</p>
                        <p><strong>Esse dashboard possui uma interface bem simples para que qualquer pessoa sem conhecimento técnico consiga facilmente utiliza-lo</strong>.</p>
                        <p>É possivel ver e manipular os e-mails (captura e disparo de e-mails), mensagens que os visitantes deixam no site, podendo responde-los ou adiciona-los em alguma lista para nutrição de leads (<em class="text-normal">marketing de conversão</em>).</p>
                        <a title="Exemplo da interface do dashboard" href="<?php echo route('/dashboard-template') ?>" class="btn btn-light" role="button">
                            <i class="material-icons" style="vertical-align: -29%">visibility</i>
                            Ver o Template do Dashboard
                        </a>
                    </div>
                    <div class="m6col col-space center">
                        <img title="LEOBCASTRO Dashboard" src="<?php echo asset('img/dashboard-print.png') ?>" alt="Dashboard do website aberto em um ipad"/>
                    </div>
                    <div class="collist col-space">
                        <p class="info-text">*Esse painel de controle (<a title="Ir para o portfólio do projeto" href="https://github.com/lleocastro/site-manager" rel="nofollow">dashboard</a>) é um projeto novo que estou desenvolvendo, para tornar a gestão de sites simples e trivial.</p>
                    </div>
                </article>
            </section>
            <div class="container container-space"></div>
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
                                    <p class="counter" data-from="0" data-to="4037" data-speed="2000" data-refresh-interval="30">4037</p>
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
                                    <p class="counter" data-from="0" data-to="30240" data-speed="3000" data-refresh-interval="30">30240</p>
                                    <p class="title-counter">Tempo Gasto (min)</p>
                                </div>
                                <div class="s6col col-space">
                                    <p class="icon"><i class="material-icons">info_outline</i></p>
                                    <p class="counter" data-from="0" data-to="294" data-speed="1900" data-refresh-interval="30">294</p>
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