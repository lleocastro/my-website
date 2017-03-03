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

    <link rel="base" href="https://www.leobcastro.com"/>
    <link rel="canonical" href="<?php echo base_url() ?>"/>
    <link rel="sitemap" type="application/xml" href="<?php echo $this->config->item('base_url') ?>sitemap.xml"/>
    <link rel="publisher" href="https://plus.google.com/u/0/113635065418336259527"/>

    <meta itemprop="name" content="Léo B. Castro | Desenvolvedor Web - SJCampos"/>
    <meta itemprop="description" content="Como atrair mais clientes? Essa é a principal pergunta que me fazem. Quer saber como ter mais clientes, lucro e tempo? Conheça meu trabalho!"/>
    <meta itemprop="image" content="<?php echo asset('img/social-share.jpg') ?>"/>
    <meta itemprop="url" content="<?php echo base_url(uri_string()) ?>"/>

    <meta property="og:title" content="Léo B. Castro | Desenvolvedor Web - SJCampos"/>
    <meta property="og:description" content="Como atrair mais clientes? Essa é a principal pergunta que me fazem. Quer saber como ter mais clientes, lucro e tempo? Conheça meu trabalho!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="<?php echo asset('img/social-share.jpg') ?>"/>
    <meta property="og:image:type" content="image/jpg"/>
    <meta property="og:image:width" content="800"/>
    <meta property="og:image:height" content="600"/>
    <meta property="og:url" content="<?php echo base_url(uri_string()) ?>"/>
    <meta property="og:site_name" content="<?php echo getenv('APP_NAME') ?>"/>
    <meta property="og:locale" content="<?php echo $this->config->item('language') ?>"/>

    <meta name="twitter:title" content="Léo B. Castro | Desenvolvedor Web - SJCampos"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Como atrair mais clientes? Essa é a principal pergunta que me fazem. Quer saber como ter mais clientes, lucro e tempo? Conheça meu trabalho!"/>
    <meta name="twitter:image" content="<?php echo asset('img/social-share.jpg') ?>"/>
    <meta name="twitter:url" content="@leobcastro94"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"/>
    <link rel="stylesheet" href="<?php echo asset('css/animate.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/home.min.css') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="<?php echo asset('css/toastr.min.css') ?>"/>
    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>

    <?php echo ie_support_field() ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Léo B. Castro",
            "description": "Desenvolvedor de Soluções Web e Empreendedor",
            "jobTitle": "Web Developer",
            "email": "<?php echo getenv('MAIL_USERNAME') ?>",
            "url": "<?php echo base_url(uri_string()) ?>",
            "address": "São José dos Campos, São Paulo - Brasil",
            "image": "<?php echo asset('img/leo-castro.jpg') ?>"
        }
    </script>

    <title>Léo B. Castro | Desenvolvimento de Soluções Web - São José dos Campos</title>
</head>
<body>
    <?php require_once ('layouts/includes/google-analytics.php') ?>
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
                            <li class="active"><a title="Pagina inicial" class="scroll" href="#intro">Inicio</a></li>
                            <li><a title="Um breve resumo" class="scroll" href="#about-me">Sobre Mim</a></li>
                            <li><a title="Portfólio de projetos" class="scroll" href="#portfolio">Portfólio</a></li>
                            <li><a title="Informações para contato" class="scroll" href="#contact-me">Contato</a></li>
                            <li><a title="Blog pessoal" style="text-decoration: line-through" href="<?php echo route('/blog') ?>">Meu Blog</a></li>
                            <li><a title="Curriculo de Léo B. Castro" href="<?php echo route('/curriculo') ?>">Currículo</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- END NAVBAR -->
        </header>
        <!-- FULL IMAGE -->
        <a id="intro"></a>
        <div id="backimage_full" class="container-full backimage animated fadeIn" style="background-image: url(<?php echo asset('img/intro.jpg') ?>)" onload="backimage_full.style.backgroundAttachment = 'fixed'">
            <div class="lightbox center">
                <header class="caption">
                    <h1>Léo B. <span>Castro</span></h1>
                    <p class="tagline">Web Developer, UX/UI Designer, Criativo</p>
                    <a title="Contate-me" class="btn btn-default wow pulse infinite scroll" href="#contact-me" data-wow-delay="2100ms" role="button">
                        <i class="material-icons" style="vertical-align: -29%">phone</i>
                        Contate-me
                    </a>
                </header>
            </div>
            <a title="Resumo sobre Léo" href="#about-me" class="btn btn-circle btn-arrow wow bounceInRight center scroll" data-wow-duration="2000ms" data-wow-delay="300ms" role="button">
                <img title="Seta" src="<?php echo asset('img/icons/arrow-down.svg') ?>" alt="Seta apontando para baixo"/>
            </a>
        </div><!-- END FULL IMAGE -->
        <!-- ABOUT ME -->
        <a id="about-me"></a>
        <div class="container marg-top wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInUp;">
            <div class="line line-space">
                <div class="m4col col-space center">
                    <div class="my-pic center">
                        <img title="Léo B. Castro" src="<?php echo asset('img/leo-castro.jpg') ?>" alt="Foto de perfil do Léo B. Castro">
                    </div>
                </div>
                <div class="m8col col-space">
                    <section class="line">
                        <div class="collist col-space">
                            <header class="introduction">
                                <h4 class="no-margin">Resumo</h4>
                                <div class="heading-line" role="separator"></div>
                                <p class="introduce">Desenvolvedor Web Freelancer / Empreendedor</p>
                                <p class="tagline intro">Olá, sou <em class="text-normal">webmaster</em> full-stack de <em class="text-normal">São José dos Campos</em> - SP. Atualmente trabalho principalmente com a criação de soluções web e com o desenvolvimento de ferramentas open source para o auxílio 'interno". Cursei brevemente uma faculdade de análise e desenvolvimento de sistemas e fiz/faço varios outros cursos como <em class="text-normal">UX/UI design</em>, <em class="text-normal">marketing digital</em>, <em class="text-normal">performance web</em>, etc...</p>
                            </header>
                        </div>
                        <div class="collist col-space social-links">
                            <ul>
                                <li>
                                    <a title="Me siga no Google Plus" rel="nofollow" href="https://plus.google.com/u/0/113635065418336259527">
                                        <img title="Google Plus" src="<?php echo asset('img/icons/google-plus2.svg') ?>" alt="Google plus pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no LinkedIn" rel="nofollow" href="https://www.linkedin.com/in/leobcastro">
                                        <img title="LinkedIn" src="<?php echo asset('img/icons/linkedin2.svg') ?>" alt="LinkedIn pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no Instagram" rel="nofollow" href="https://www.instagram.com/leocastro94">
                                        <img title="Instagram" src="<?php echo asset('img/icons/instagram2.svg') ?>" alt="Instagram pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no Facebook" rel="nofollow" href="https://www.facebook.com/leobcastro94">
                                        <img title="Facebook" src="<?php echo asset('img/icons/facebook2.svg') ?>" alt="Facebook pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                                <li>
                                    <a title="Me siga no Github" rel="nofollow" href="https://github.com/lleocastro">
                                        <img title="Github" src="<?php echo asset('img/icons/github2.svg') ?>" alt="Github pessoal de Léo B. Castro"/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a title="Baixar currículo de Léo B. Castro" href="<?php echo route('/download/curriculo') ?>" class="btn btn-transparent" role="button" download>
                            <i class="material-icons" style="vertical-align: -29%">offline_pin</i>
                            Baixar Currículo
                        </a>
                        <small style="margin-top: 5px">Seguro! Sem vírus.</small>
                    </section>
                </div>
            </div>
        </div><!-- END ABOUT ME -->
        <!-- SERVICES -->
        <section class="container profile">
            <div class="line line-space">
                <header class="collist col-space profile-header wow fadeIn" data-wow-delay="300ms">
                    <h1 class="no-margin">O que faço de melhor</h1>
                    <div class="heading-line" role="separator"></div>
                    <p class="tagline"><strong>"</strong><em>Criar um site é apenas o começo. Um planejamento estratégico é essencial para que o projeto se destaque e gere o resultado esperado.</em></p>
                </header>
            </div>
            <div class="line">
                <div class="m6col">
                    <div class="line">
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="500ms">
                                <img title="Web design" src="<?php echo asset('img/icons/design.svg') ?>" alt="Criação de site e web design"/>
                                <h2>Website</h2>
                                <p>Cada layout é projetado pensando no usuário, levando em consideração a praticidade e a usabilidade.</p>
                            </article>
                        </div>
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="900ms">
                                <img title="Search Engine Optimization" src="<?php echo asset('img/icons/bar-chart.svg') ?>" alt="Otimização de site para rankear melhor em motores de busca"/>
                                <h2>SEO/SMO</h2>
                                <p>Toda a estrutura é otimizada para buscadores e redes sociais. Atraindo mais visitantes para o website.</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="m6col">
                    <div class="line">
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="700ms">
                                <img title="Desenvolvimento" src="<?php echo asset('img/icons/laptop.svg') ?>" alt="Desenvolvimento de aplicações web"/>
                                <h2>Aplicações</h2>
                                <p>O desenvolvimento é 100% otimizado para obter o máximo de performance e desempenho nos sistemas.</p>
                            </article>
                        </div>
                        <div class="s6col">
                            <article class="service wow fadeInUp" data-wow-delay="1100ms">
                                <img title="Suporte" src="<?php echo asset('img/icons/support2.svg') ?>" alt="Icone ilustrando suporte 24 horas"/>
                                <h2>Suporte</h2>
                                <p>Precaução é crucial para resolver qualquer problema que possa surgir no ciclo de vida da aplicação.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- END SERVICES -->
        <!-- SKILLS -->
        <section id="oBdy" class="container-full backimage skills marg-top" style="background-image: url(<?php echo asset('img/my-skills.jpeg') ?>)" onload="oBdy.style.backgroundAttachment = 'fixed'">
            <div class="lightbox">
                <div class="container container-space">
                    <div class="line line-space">
                        <div class="collist col-space">
                            <h3 class="no-margin">Minhas Habilidades</h3>
                            <div class="heading-line" role="separator"></div>
                        </div>
                    </div>
                    <div class="line">
                        <div class="s6col">
                            <div class="skills-left">
                                <p>Sou <em class="text-normal">programador web</em>, tenho <?php echo date('Y') - 1994 ?> anos, cursei uma faculdade de análise e desenvolvimento de sistemas de 2015 a 2016, porém atuando na área desde 2014.</p>
                                <p>Possuo experiência na área de <em class="text-normal">desenvolvimento web</em>, mas já desenvolvi para desktop (computadores) e android (smartphones e tablets).</p>
                                <p>Atualmente programo em <em class="text-normal">PHP</em> com foco em <em class="text-normal">desenvolver soluções</em> e ferramentas para automatizar processos, objetivando aumentar a produtividade e gerar mais resultados.</p>
                            </div>
                        </div>
                        <div class="s6col">
                            <div class="line">
                                <div class="collist">
                                    <p class="mini-text">HTML5 / CSS3</p>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeftBig" role="progressbar" style="width: 73%" data-wow-duration="4000ms" data-wow-delay="500ms">
                                            <span class="progress-label" data-from="0" data-to="73" data-speed="4000" data-refresh-interval="30">73%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="collist">
                                    <p class="mini-text">Javascript</p>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeftBig" role="progressbar" style="width: 59%" data-wow-duration="4000ms" data-wow-delay="900ms">
                                            <span class="progress-label" data-from="0" data-to="59" data-speed="4000" data-refresh-interval="30">59%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line">
                                <div class="collist">
                                    <p class="mini-text">PHP 5/7</p>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeftBig" role="progressbar" style="width: 91%" data-wow-duration="4100ms" data-wow-delay="700ms">
                                            <span class="progress-label" data-from="0" data-to="91" data-speed="4400" data-refresh-interval="30">91%</span>
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
        <a id="portfolio"></a>
        <div class="container-full back-portfolio">
            <section class="container container-space portfolio">
                <div class="line line-space">
                    <header class="collist">
                        <h1 class="no-margin">Meu Portfólio</h1>
                        <div class="heading-line" role="separator"></div>
                        <p class="tagline">Veja alguns dos meus projetos <strong>mais recentes</strong>, que vai desde criar sites, <em class="text-normal">desenvolver sistemas web</em> a fazer alguns simples games.</p>
                        <p class="mini-text">*Clique no projeto para mais informações!</p>
                    </header>
                </div>
                <div class="line line-space">
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/agencia-web') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Agência Web" src="<?php echo asset('img/website-web-agency.png') ?>" alt="Website de uma agência web."/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Agência Web</h2>
                                        <p>Desenvolvimento de um website ficticio para uma agência de desenvolvimento web. Leia!</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/sistema-de-notas') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1300ms" data-wow-delay="1000ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Sistema de Notas" src="<?php echo asset('img/notes.jpg') ?>" alt="Sistema de notas online"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Sistema de Notas</h2>
                                        <p>Aplicativo para o <em class="text-normal">gerenciamento de notas</em> com uma separação por marcadores e painel ADM.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/leobcastro') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1500ms" data-wow-delay="1300ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Site LEOBCASTRO" src="<?php echo asset('img/intro.jpg') ?>" alt="Desenvolvimento do site LEOBCASTRO"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>LEOBCASTRO</h2>
                                        <p>Ele entra nessa lista porque é um projeto recente e engloba várias tecnologias. Veja detalhes!</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/framework-css') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1600ms" data-wow-delay="1100ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Framework CSS" src="<?php echo asset('img/website-planning.jpg') ?>" alt="Um simples mas eficiente criador de site"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Web Design</h2>
                                        <p>Meu "<em class="text-normal">criador de site</em>". Uma biblioteca CSS que me permite criar sites unicos para cada projeto.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/carregador-de-classes') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="1900ms" data-wow-delay="1300ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Componente Autoloader" src="<?php echo asset('img/component-architecture.jpg') ?>" alt="Autoload PHP para o carregamento de classes"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Carregador de Classes</h2>
                                        <p>Algoritmo para carregar classes com namespaces, facilitando a importação e instanciação.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/framework-php') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="2300ms" data-wow-delay="1500ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Framework PHP" src="<?php echo asset('img/framework-php.jpg') ?>" alt="Uma versão customizada do Codeigniter"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Framework PHP</h2>
                                        <p>Esse framework me possibilita entregar projetos em menos tempo e ainda sim manter a qualidade.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/flappy-bird') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="2500ms" data-wow-delay="1800ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Game flappy bird" src="<?php echo asset('img/game-flappy-bird.jpg') ?>" alt="Jogo desenvolvido baseado no flappy bird"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Flappy Bird</h2>
                                        <p>Esse jogo foi densenvolvido seguindo aulas de um curso de desenvolvimento de jogos. Jogue!</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="<?php echo route('/portfolio/ecommerce-template') ?>">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="2800ms" data-wow-delay="1900ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Loja e-commerce" src="<?php echo asset('img/e-commerce.jpg') ?>" alt="Desenvolvimento de uma loja e-commerce"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Loja E-Commerce</h2>
                                        <p>Um template de uma loja de venda de computadores para implementar em e-commerce systems.</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="s6col m4col col-space">
                        <a href="#contact-me" class="scroll">
                            <article class="portfolio-card wow fadeIn" data-wow-duration="3000ms" data-wow-delay="2000ms">
                                <div class="line">
                                    <div class="collist">
                                        <img title="Posição premium" src="<?php echo asset('img/your-project.jpg') ?>" alt="Premio de melhor posição"/>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <h2>Seu Projeto</h2>
                                        <p>Quem sabe seu projeto seja o proximo nesta lista... Vamos conversar? Consultoria? Café? 😜</p>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                </div>
            </section>
        </div><!-- END PORTFÓLIO -->
        <!-- CALL TO ACTION -->
        <a id="to-action"></a>
        <div class="container-full to-action">
            <section class="container container-space wow fadeIn" data-wow-duration="1000ms" data-wow-delay="500ms">
                <div class="line line-space">
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
                            <button id="action-submit" type="submit" class="btn btn-default wow fadeInRightBig" data-wow-duration="2000ms" data-wow-delay="800ms">
                                <i class="material-icons" style="vertical-align: -29%">verified_user</i>
                                Cadastrar
                            </button>
                        </form>
                        <p class="mini-text wow fadeInLeftBig" data-wow-duration="2000ms" data-wow-delay="900ms">Também odeio spam!</p>
                    </div>
                    <div class="callback"></div>
                </div>
            </section>
        </div><!-- END CALL TO ACTION -->
        <!-- GOOGLE MAPS -->
        <div class="container-full">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1834.4985550220156!2d-45.911423442053184!3d-23.133780896224213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc37da6f20a1a3%3A0xde4d472955df01b2!2sR.+Jo%C3%A3o+Vila%C3%A7a+de+Oliveira%2C+S%C3%A3o+Jos%C3%A9+dos+Campos+-+SP!5e0!3m2!1spt-BR!2sbr!4v1486245011238" width="1200" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div><!-- END GOOGLE MAPS -->
        <!-- FOOTER -->
        <a id="contact-me"></a>
        <footer class="container-full footer">
            <div id="oBdy" class="container-full backimage" style="background-image: url(<?php echo asset('img/contact-me.jpg') ?>)" onload="oBdy.style.backgroundAttachment = 'fixed'">
                <div class="lightbox">
                    <div class="container container-space">
                        <div class="line line-space">
                            <div class="m6col s6col mobile-text-center">
                                <div class="line line-space">
                                    <div class="collist">
                                        <h3 class="no-margin">Contate-me</h3>
                                        <div class="heading-line" role="separator"></div>
                                    </div>
                                </div>
                                <div class="line">
                                    <div class="collist">
                                        <p><i class="material-icons" style="vertical-align: -29%">email</i>
                                            E-mail
                                        </p>
                                        <p class="no-paragraph">leobcastroinc@gmail.com</p>
                                    </div>
                                </div>
                                <div class="line line-space">
                                    <div class="collist">
                                        <p><i class="material-icons" style="vertical-align: -29%">phone</i>
                                            Telefone
                                        </p>
                                        <p class="no-paragraph">+55 (012) 991729408</p>
                                        <p class="mini-text no-paragraph">(preferencial: email)</p>
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
                                <div class="line line-space">
                                    <div class="collist">
                                        <p><i class="material-icons" style="vertical-align: -29%">today</i>
                                            Atendimento
                                        </p>
                                        <p class="no-paragraph">De segunda-feira à sexta-feira</p>
                                        <p class="no-paragraph">Das 08:00 as 17:00 horas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m6col s6col col-space contact-form">
                                <form id="message-form" method="post" action="<?php echo route('/message/store') ?>" accept-charset="utf-8">
                                    <div class="line line-space">
                                        <div class="collist mobile-text-center">
                                            <h4>Mande-me uma mensagem</h4>
                                            <p>Alguma sugestão ou feedback? Projeto? Dica? Mande uma mensagem.</p>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="m6col col-space">
                                            <label for="name">Nome:</label>
                                            <input id="name" name="name" class="form" type="text" placeholder="Seu nome"/>
                                        </div>
                                        <div class="m6col col-space">
                                            <label for="email">E-mail:</label>
                                            <input id="email" name="email" class="form" type="email" placeholder="Principal email"/>
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
                                    <div class="line">
                                        <div class="collist col-space">
                                            <?php echo csrf_field('message_token') ?>
                                            <button id="message-submit" type="submit" class="btn btn-default">
                                                <i class="material-icons" style="vertical-align: -29%">verified_user</i>
                                                Enviar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="line line-space callback"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator-light"></div>
            <a id="footer"></a>
            <div class="container-full sub-footer">
                <div class="container container-space">
                    <div class="line line-space">
                        <div class="s4col col-space">
                            <p class="nav-link-title"><strong>Navegue mais</strong></p>
                            <nav>
                                <ul>
                                    <li><a title="Me de um feedback" class="scroll" href="#contact-me">De um feedback</a></li>
                                    <li><a title="Volte para o topo" class="scroll" href="#intro">Volte para o topo (inicio)</a></li>
                                    <li><a title="Meu currículo" href="<?php echo route('/curriculo') ?>">De uma olhada no meu currículo</a></li>
                                    <li><a title="Blog pessoal" style="text-decoration: line-through" href="<?php echo route('/blog') ?>">Descubra meu blog</a></li>
                                    <li><a title="Questionario para orçamento" class="scroll" href="https://goo.gl/forms/rC5ZZDEAtxaJ1GEI2">Esse questionário é pra você!</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="s3col col-space">
                            <p class="nav-link-title"><strong>Informações</strong></p>
                            <ul>
                                <li><a title="LEOBCASTRO" href="<?php echo route('portfolio/leobcastro') ?>">Sobre o site</a></li>
                                <li><a title="Trabalhar no LEOBCASTRO Inc" href="<?php echo route('/trabalhe-comigo') ?>" rel="nofollow">Trabalhe comigo</a></li>
                                <li><a title="Para autores" href="<?php echo route('/creditos') ?>" rel="nofollow">Creditos</a></li>
                            </ul>
                        </div>
                        <div class="s5col mobile-text-center">
                            <h6>Já que chegou até aqui..</h6>
                            <p>Uau! Se você chegou até aqui e não deixou seu email ou não vai entrar em contato, talvez possa me dizer o porquê? Me de um <a title="Feedback" href="#contact-me" class="scroll">feedback</a> para que eu possa melhorar ou esclarecer algum mal entendido. :)</p>
                        </div>
                    </div>
                    <div class="line line-space mobile-text-center">
                        <div class="s6col">
                            <p class="no-paragraph"><strong>Siga-me</strong>:</p>
                            <p>
                                <a title="Me adicione no LinkedIn" href="https://www.linkedin.com/in/leobcastro">LinkedIn</a> |
                                <a title="Siga-me no Instagram" href="https://www.instagram.com/leocastro94">Instagram</a> |
                                <a title="Me adicione também no Facebook" href="https://www.facebook.com/leobcastro94">Facebook</a> |
                                <a title="Veja meus projetos no Github" href="https://github.com/lleocastro">Github</a>
                            </p>
                        </div>
                        <div class="s6col"></div>
                    </div>
                </div>
            </div>
            <?php require_once ('layouts/includes/final-footer.php') ?>
        </footer><!-- END FOOTER -->
    </main>
    <script>
        var visibleHeight = window.innerHeight
            || document.documentElement.clientHeight
            || document.body.clientHeight;
        // Resize full intro image
        backImg = document.getElementById("backimage_full");
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
    <script src="<?php echo asset('js/toastr.min.js') ?>"></script>
    <script src="<?php echo asset('js/app.min.js') ?>"></script>
</body>
</html>