<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta charset="<?php echo $this->config->item('charset') ?>">
    <meta name="description" content=""/>
    <meta name="author" content="Léo B. Castro"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="index, follow"/>
    <meta property="og:title" content="Full-Stack Web Developer"/>
    <meta property="og:description" content="Desenvolvimento inteligente de soluções web para seu negócio."/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="img/intro.jpg"/>
    <meta property="og:url" content="https://lleocastro.github.io/hello-world-html/"/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>
    <meta name="twitter:title" content="Full-Stack Web Developer"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>

    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"/>
    <link rel="stylesheet" href="<?php echo asset('css/animate.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/home.min.css') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <?php echo ie_support_field() ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Léo B. Castro",
            "description": "Full-Stack Web Developer, UX/UI Designer, Creative",
            "jobTitle": "Web Developer",
            "email": "leonardo_carvalho@outlook.com",
            "url": "leobcastro.com",
            "address": "São José dos Campos, São Paulo - Brasil",
            "image": "img/eu.jpg"
        }
        </script>

    <title><?php echo getenv('APP_NAME') ?> - Full-Stack Web Developer - SJCampos</title>
</head>
<body>
    <main class="container-full" role="main">
        <header>
            <!-- NAVBAR -->
            <div class="navbar navbar-fixed navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a title="Logo" class="scroll" href="#intro">
                            <img title="Logo" src="<?php echo asset('img/logo/logo-small.png') ?>" alt="Logo do site de desenvolvimento web do LEOBCASTRO"/>
                        </a>
                    </div>
                    <!-- TOGGLE NAVBAR BUTTON -->
                    <input type="checkbox" class="none" id="control-nav" role="button"/>
                    <label for="control-nav" class="control-nav"></label>
                    <label for="control-nav" class="control-nav-close"></label>
                    <!-- COLLAPSE NAVBAR -->
                    <div class="navbar-collapse">
                        <ul class="navbar-nav" role="menu">
                            <li class="active"><a class="scroll" href="#intro">Inicio</a></li>
                            <li><a class="scroll" href="#about-me">Sobre Mim</a></li>
                            <li><a class="scroll" href="#portfolio">Portfólio</a></li>
                            <li><a class="scroll" href="#contact-me">Contato</a></li>
                            <li><a style="text-decoration: line-through" href="<?php echo route('/blog') ?>">Meu Blog</a></li>
                            <li><a style="text-decoration: line-through" href="<?php echo route('/curriculo') ?>">Curriculo</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- END NAVBAR -->
        </header>
        <!-- FULL IMAGE -->
        <a name="intro"></a>
        <div id="backimage-full" class="container-full backimage backimage-full animated fadeIn" style="background-image: url(<?php echo asset('img/intro.jpg') ?>)">
            <div class="lightbox center">
                <div class="caption">
                    <h2>Léo B. <span>Castro</span></h2>
                    <p class="tagline">Web Developer, UX/UI Designer, Creative</p>
                    <a title="Contate-me" class="btn btn-default wow pulse infinite scroll" href="#contact-me" data-wow-delay="2100ms" role="button">
                        <i class="large material-icons" style="vertical-align: -29%">phone</i>
                        Contate-me
                    </a>
                </div>
            </div>
            <a title="Resumo sobre Léo" href="#about-me" class="btn btn-circle btn-arrow wow bounceInRight center scroll" data-wow-duration="2000ms" data-wow-delay="300ms" role="button">
                <img title="Seta" src="<?php echo asset('img/icons/arrow-down.svg') ?>" alt="Seta apontando para baixo"/>
            </a>
        </div><!-- END FULL IMAGE -->
        <!-- ABOUT ME -->
        <a name="about-me"></a>
        <div class="container marg-top wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
            <div class="line line-space">
                <div class="m4col col-space center">
                    <div class="my-pic center">
                        <img title="Léo B. Castro" src="<?php echo asset('img/eu.jpg') ?>" alt="Foto de perfil do Léo B. Castro">
                    </div>
                </div>
                <div class="m8col col-space">
                    <div class="line">
                        <div class="collist col-space">
                            <section class="introduction">
                                <h4 class="no-margin">Resumo</h4>
                                <div class="heading-line"></div>
                                <p class="introduce">Full-Stack Web Developer / Creative</p>
                                <p class="tagline intro">Olá, sou webmaster full-stack em São José dos Campos, São Paulo. Atualmente desenvolvo sistemas, sites e aplicações para a web com o intuito de sempre gerar resultados. Bom, também sou um eterno estudante, curso análise e desenvolvimento de sistemas, UX/UI design e um pouco de marketing digital nas horas vagas.</p>
                            </section>
                        </div>
                        <div class="collist col-space social-links">
                            <ul>
                                <li>
                                    <a title="Me siga no Google Plus" rel="nofollow" href="https://plus.google.com/u/0/113635065418336259527">
                                        <img title="Google Plus" src="<?php echo asset('img/icons/google-plus.svg') ?>" alt="Google plus pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no LinkedIn" rel="nofollow" href="https://www.linkedin.com/in/leobcastro">
                                        <img title="LinkedIn" src="<?php echo asset('img/icons/linkedin.svg') ?>" alt="LinkedIn pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no Instagram" rel="nofollow" href="https://www.instagram.com/leocastro94">
                                        <img title="Instagram" src="<?php echo asset('img/icons/instagram.svg') ?>" alt="Instagram pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no Facebook" rel="nofollow" href="https://www.facebook.com/leobcastro94">
                                        <img title="Facebook" src="<?php echo asset('img/icons/facebook.svg') ?>" alt="Facebook pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no Github" rel="nofollow" href="https://github.com/lleocastro">
                                        <img title="Github" src="<?php echo asset('img/icons/github.svg') ?>" alt="Github pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END ABOUT ME -->
        <!-- SERVICES -->
        <section class="container profile">
            <div class="line line-space">
                <header class="collist col-space profile-header wow fadeIn" data-wow-delay="300ms">
                    <h3 class="no-margin">O que faço de melhor</h3>
                    <div class="heading-line"></div>
                    <p class="tagline"><strong>"</strong><em>Criar um site é apenas o começo. Um planejamento estratégico é essencial para que o projeto se destaque e gere o resultado esperado.</em></p>
                </header>
            </div>
            <div class="line">
                <div class="m6col">
                    <div class="line">
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="500ms">
                                <img title="Web design" src="<?php echo asset('img/icons/design.svg') ?>" alt="Icone ilustrando a criação de um site"/>
                                <h1>Website</h1>
                                <p>Todo o layout é projetado pensando no usuário, levando em consideração a praticidade e a <em class="text-normal">usabilidade</em>.</p>
                            </article>
                        </div>
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="700ms">
                                <img title="Desenvolvimento" src="<?php echo asset('img/icons/development.svg') ?>" alt="Icone ilustrando a abertura e fechamento de tags, representando o desenvolvimento web"/>
                                <h1>Aplicativo</h1>
                                <p>O <em class="text-normal">desenvolvimento</em> é 100% otimizado para obter o máximo de performance e desempenho nos <em class="text-normal">sistemas</em>.</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="m6col">
                    <div class="line">
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="900ms">
                                <img title="Search Engine Optimization" src="<?php echo asset('img/icons/responsive.svg') ?>" alt="Icone ilustrando a otimização de site para rankear melhor em motores de busca"/>
                                <h1>SEO/SMO</h1>
                                <p>Toda a estrutura é semanticamente correta para um melhor <em class="text-normal">rankeamento em motores de busca</em> (<a href="https://www.google.com.br" rel="nofollow">google</a>).</p>
                            </article>
                        </div>
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="1100ms">
                                <img title="Suporte" src="<?php echo asset('img/icons/support.svg') ?>" alt="Icone ilustrando um atendente ao telefone fornecendo suporte"/>
                                <h1>Suporte</h1>
                                <p>Precaução é crucial para resolver qualquer problema que possa surgir no ciclo de vida da aplicação.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END SERVICES -->
        <!-- SKILLS -->
        <section class="container-full backimage skills marg-top" style="background-image: url(<?php echo asset('img/my-skills.jpeg') ?>)">
            <div class="lightbox">
                <div class="container container-space">
                    <div class="line line-space">
                        <div class="collist col-space">
                            <h3 class="no-margin">Minhas Habilidades</h3>
                            <div class="heading-line"></div>
                        </div>
                    </div>
                    <div class="line">
                        <div class="s6col">
                            <div class="skills-left">
                                <p>Sou <em class="text-normal">desenvolvedor web</em>, tenho 23 anos, cursando <em class="text-normal">análise e desenvolvimento de sistemas</em>, porém atuando na área desde 2014. Possuo experiência na área de <em class="text-normal">desenvolvimento web</em>, mas também já programei para desktop e android.</p>
                                <p>Atualmente programo em <em class="text-normal">PHP</em> com foco em <em class="text-normal">desenvolver soluções</em> e ferramentas para automatizar processos, com o objetivo de aumentar a <em class="text-normal">produtividade</em> e diminuir o tempo "humano" gasto em <em class="text-normal">tarefas rotineiras que poderiam ser administradas por um sistema</em>.</p>
                            </div>
                        </div>
                        <div class="s6col">
                            <div class="line">
                                <div class="collist">
                                    <p class="mini-text">HTML5 / CSS3</p>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeftBig" role="progressbar" style="width: 73%" data-wow-duration="3500ms" data-wow-delay="500ms">
                                            <span class="progress-label" data-from="0" data-to="73" data-speed="3500" data-refresh-interval="30">73%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="collist">
                                    <p class="mini-text">Javascript</p>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeftBig" role="progressbar" style="width: 61%" data-wow-duration="3800ms" data-wow-delay="900ms">
                                            <span class="progress-label" data-from="0" data-to="61" data-speed="3800" data-refresh-interval="30">61%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="collist">
                                    <p class="mini-text">PHP 5/7</p>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeftBig" role="progressbar" style="width: 89%" data-wow-duration="4100ms" data-wow-delay="700ms">
                                            <span class="progress-label" data-from="0" data-to="89" data-speed="4100" data-refresh-interval="30">89%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END SKILLS -->
        <!-- PORTFÓLIO -->
        <a name="portfolio"></a>
        <div class="container-full back-portfolio">
            <section class="container container-space portfolio">
                <div class="line line-space">
                    <header class="collist">
                        <h3 class="no-margin">Meu Portfólio</h3>
                        <div class="heading-line"></div>
                        <p class="tagline">Veja alguns dos meus principais projetos, que vai desde desenvolver sites, sistemas web a games. Clique para mais informações!</p>
                    </header>
                </div>
                <div class="line line-space">
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/web-template') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Web template" src="<?php echo asset('img/escape-preview.png') ?>" alt="Imagem em PSD de um site de uma agencia web"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h1>Web Template</h1>
                                        <p>Website ficticio para uma agencia de desenvolvimento web.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/flappy-bird') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1100ms" data-wow-delay="700ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Game flappy bird" src="<?php echo asset('img/flappy-bird.jpg') ?>" alt="Imagem de introdução para o jogo desenvolvido baseado no flappy bird"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h1>Flappy Bird</h1>
                                        <p>Um divertido e viciante game para se jogar no browser desktop.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/leobcastro') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1200ms" data-wow-delay="1100ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="LEOBCASTRO" src="<?php echo asset('img/44839-O4FYT8.jpg') ?>" alt="Imagem ilustrativa representando o desenvolvimento do site leobcastro"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h1>LEOBCASTRO</h1>
                                        <p>Sim! Meu site também entra nessa lista, porque ele não é só um site :p</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="#">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1300ms" data-wow-delay="900ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="CSS Stylle" src="<?php echo asset('img/OJ91BD0.jpg') ?>" alt="Imagem ilustrativa representando o layout de um site"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h1>CSS Stylle</h1>
                                        <p>In lacinia euismod molestie. Phasellus consectetur nulla id erat porttitor viverra.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/framework') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1400ms" data-wow-delay="900ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Framework" src="<?php echo asset('img/startup-framework-preview.png') ?>" alt="Imagem ilustrando o funcionamento de um framework em dispositivos moveis"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h1>Framework</h1>
                                        <p>Minha versão customizada do CodeIgniter (um fantástico framework web).</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="#contact-me" class="scroll">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1500ms" data-wow-delay="1100ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Premium" src="<?php echo asset('img/icons/marketing.svg') ?>" alt="Icone ilustrando um premio de melhor posição"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h1>Seu Projeto</h1>
                                        <p>Talvez seu projeto seja o proximo nesta lista.. Vamos conversar?</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                </div>
            </section>
        </div><!-- END PORTFÓLIO -->
        <!-- CALL TO ACTION -->
        <a name="to-action"></a>
        <div class="container-full to-action">
            <section class="container container-space wow fadeIn" data-wow-duration="1000ms" data-wow-delay="500ms">
                <div class="line line-space">
                    <div class="collist">
                        <h5 class="no-margin">Deixe seu E-mail!</h5>
                        <div class="heading-line"></div>
                        <p class="tagline">Deixe seu email para que eu possa lhe enviar um pequeno questionário para ajudá-lo a descobrir do que você precisa.</p>
                    </div>
                </div>
                <div class="line">
                    <div class="collist">
                        <form id="action-form" method="post" action="<?php echo route('store/email') ?>" accept-charset="utf-8">
                            <input class="form" type="email" id="email" name="email" placeholder="Coloque seu principal email"/>
                            <?php echo csrf_field() ?>
                            <button id="action-submit" type="submit" class="btn btn-default wow fadeInRightBig" data-wow-duration="2000ms" data-wow-delay="800ms">
                                <i class="material-icons" style="vertical-align: -29%">verified_user</i>
                                Cadastrar
                            </button>
                        </form>
                        <p class="mini-text wow fadeInLeftBig" data-wow-duration="2000ms" data-wow-delay="900ms">Também odeio spam!</p>
                    </div>
                </div>
                <div class="line line-space">
                    <div class="callback"></div>
                </div>
            </section>
        </div><!-- END CALL TO ACTION -->
        <!-- GOOGLE MAPS -->
        <div class="container-full">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1834.4985550220156!2d-45.911423442053184!3d-23.133780896224213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc37da6f20a1a3%3A0xde4d472955df01b2!2sR.+Jo%C3%A3o+Vila%C3%A7a+de+Oliveira%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1486245011238" width="1200" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div><!-- END GOOGLE MAPS -->
        <!-- FOOTER -->
        <a name="contact-me"></a>
        <footer class="container-full footer">
            <div class="container-full backimage" style="background-image: url(<?php echo asset('img/contact-me.jpeg') ?>)">
                <div class="lightbox">
                    <div class="container container-space">
                        <div class="line line-space">
                            <div class="m6col s6col mobile-text-center">
                                <div class="line line-space">
                                    <div class="collist">
                                        <h3 class="no-margin">Contate-me</h3>
                                        <div class="heading-line"></div>
                                    </div>
                                </div>
                                <div class="line">
                                    <div class="collist">
                                        <p><i class="material-icons" style="vertical-align: -29%">email</i>
                                            E-mail
                                        </p>
                                        <p class="no-paragraph">leonardo_carvalho@outlook.com</p>
                                        <p class="no-paragraph">lleocarvalho0@gmail.com</p>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <p><i class="material-icons" style="vertical-align: -29%">phone</i>
                                            Telefone
                                        </p>
                                        <p class="no-paragraph">+55 (012) 992739408</p>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <p><i class="material-icons" style="vertical-align: -29%">language</i>
                                            Endereço
                                        </p>
                                        <p class="no-paragraph">Rua João Vilaça de Oliveira - Jardim Boa Vista,</p>
                                        <p class="no-paragraph">São José dos Campos, SP</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m6col s6col col-space contact-form">
                                <form id="message-form" method="post" action="<?php echo route('store/message') ?>" accept-charset="utf-8">
                                    <div class="line line-space">
                                        <div class="collist mobile-text-center">
                                            <h4>Mande-me uma mensagem</h4>
                                            <p>Alguma sugestão ou feedback? Projeto? Dica? Mande-me uma mensagem</p>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="m6col col-space">
                                            <label for="name">Nome:</label>
                                            <input id="name" name="name" class="form" type="text" placeholder="Seu nome"/>
                                        </div>
                                        <div class="m6col col-space">
                                            <label for="email">E-mail:</label>
                                            <input id="email" name="email" class="form" type="email" placeholder="Seu principal email"/>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="collist col-space">
                                            <label for="subject">Assunto:</label>
                                            <input id="subject" name="subject" class="form" type="text" placeholder="Assunto"/>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="collist col-space">
                                            <label for="message">Mensagem:</label>
                                            <textarea id="message" name="message" class="form" placeholder="Sua mensagem"></textarea>
                                        </div>
                                    </div>
                                    <div class="line line-space">
                                        <div class="g-recaptcha center" data-sitekey="6Le5HxUUAAAAALPKPPPxNNqIXJn_cUDtjZlsNf1P"></div>
                                    </div>
                                    <div class="line">
                                        <div class="collist col-space">
                                            <button id="message-submit" type="submit" class="btn btn-default">
                                                <i class="material-icons" style="vertical-align: -29%">verified_user</i>
                                                Enviar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="line line-space">
                                        <div class="callback"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator-light"></div>
            <a name="footer"></a>
            <div class="container-full sub-footer">
                <div class="container container-space">
                    <div class="line line-space">
                        <div class="s4col col-space">
                            <p class="nav-link-title"><strong>Navegue mais</strong></p>
                            <nav>
                                <ul>
                                    <li><a class="scroll" href="#contact-me">De um feedback</a></li>
                                    <li><a class="scroll" href="#intro">Volte para o topo (inicio)</a></li>
                                    <li><a style="text-decoration: line-through" href="<?php echo route('/curriculo') ?>">De uma olhada no meu curriculo</a></li>
                                    <li><a style="text-decoration: line-through" href="<?php echo route('/blog') ?>">Descubra meu blog</a></li>
                                    <li><a style="text-decoration: line-through" class="scroll" href="<?php echo route('/questionario') ?>">Esse questionário é pra você!</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="s3col col-space">
                            <p class="nav-link-title"><strong>Informações</strong></p>
                            <ul>
                                <li><a href="<?php echo route('/') ?>">Sobre o site</a></li>
                                <li><a style="text-decoration: line-through" href="<?php echo route('/hahaha') ?>" rel="nofollow">Não entre aqui!</a></li>
                                <li><a href="<?php echo route('/creditos') ?>" rel="nofollow">Creditos</a></li>
                            </ul>
                        </div>
                        <div class="s5col mobile-text-center">
                            <h6>Já que chegou até aqui..</h6>
                            <p>Uau! Se você chegou até aqui e não deixou seu email ou não vai entrar em contato, talvez possa me dizer o porquê? Me de um feedback para que eu possa melhorar ou esclarecer algum mal entendido. :)</p>
                        </div>
                    </div>
                    <div class="line line-space mobile-text-center">
                        <div class="s6col">
                            <p class="no-paragraph"><strong>Siga-me</strong>:</p>
                            <p>
                                <a href="https://www.linkedin.com/in/leobcastro">LinkedIn</a> |
                                <a href="https://www.instagram.com/leocastro94">Instagram</a> |
                                <a href="https://www.facebook.com/leobcastro94">Facebook</a>  |
                                <a href="https://github.com/lleocastro">Github</a>
                            </p>
                        </div>
                        <div class="s6col"></div>
                    </div>
                </div>
            </div>
            <?php require_once ('layouts/includes/final-footer.php') ?>
        </footer><!-- END FOOTER -->
    </main>
</body>
    <script>
        var visibleHeight = window.innerHeight
            || document.documentElement.clientHeight
            || document.body.clientHeight;
        // Resize full intro image
        backImg = document.getElementById("backimage-full");
        backImg.style.height = (visibleHeight - 50) + "px";
        // Window object resize
        var addEvent = function(object, type, callback) {
            if (object == null || typeof(object) == 'undefined') return;
            if (object.addEventListener) {
                object.addEventListener(type, callback, false);
            } else if (object.attachEvent) {
                object.attachEvent("on" + type, callback);
            } else {
                object["on" + type] = callback;
            }
        };
        addEvent(window, "resize", function(event) {
            backImg.style.height = (visibleHeight - 50) + "px";
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo asset('js/animations.min.js') ?>"></script>
    <script src="<?php echo asset('js/app.min.js') ?>"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</html>