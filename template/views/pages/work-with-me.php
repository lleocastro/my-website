<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>">
    <meta name="description" content="Trabalhe comigo!"/>
    <meta name="author" content="Léo B. Castro"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>

    <style>
        p {
            color: #777777;
        }
        ul li {
            padding: 4px;
        }
        .navbar-btn {
            color: #ffffff !important;
            float: right;
            margin-right: 10px;
            margin-top: 9px;
        }
        .margin-top {
            margin-top: 80px;
        }
    </style>

    <title><?php echo getenv('APP_NAME') ?> - Trabalhe comigo!</title>
</head>
<body>
    <main role="main">
        <!-- NAVBAR -->
        <div class="navbar navbar-fixed navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a title="Logo" class="scroll" href="<?php echo route('/') ?>">
                        <img title="Logo" src="<?php echo asset('img/logo/logo-small.png') ?>" alt="Logo do website"/>
                    </a>
                </div>
                <a title="Voltar para o final do site" href="<?php echo route('/#footer') ?>" class="btn btn-dark navbar-btn" role="button" rel="nofollow">
                    <i class="material-icons" style="vertical-align: -29%">replay</i>
                    Voltar
                </a>
            </div>
        </div><!-- END NAVBAR -->

        <!-- JOKE -->
        <div class="container container-space margin-top">
            <p>Nem tudo é renderizado na tela ;)</p>
        </div><!-- END JOKE -->

   <!-- <div class="container">
            <div class="line">
                <div class="collist">
                    <h1>Parabéns! Webmaster</h1>
                    <p>Bom, as vezes pego projetos médios/grandes e preciso de mais um desenvolvedor(a) ou de uma equipe...</p>
                    <p>E é ai que você entra. Como freelancer ou até mesmo fazendo parte da equipe interna.</p>
                    <p><strong>Mas para isso preciso que você saiba algumas coisas</strong></p>
                    <p>Front-End:</p>
                    <ul>
                        <li><strong>HTML5</strong> - Com escrita semanticamente correta, sempre otimizando para SEO.</li>
                        <li><strong>CSS3</strong> - Ser flexivel em relação a bibiotecas CSS. Layouts fluídos e design responsivo.</li>
                        <li><strong>Javascript</strong> - Especificamente JQuery e AJAX, mas seria interessante ter conhecimento em JS puro também.</li>
                        <li><strong>Git/Github</strong> - Indispensavelmente indispensavel, pois todos os projetos são versionados pelo git.</li>
                        <li><strong>Extras</strong> - Conceitos de UX/UI Design, GULP, SASS, OOCSS</li>
                    </ul>
                    <p>Back-End:</p>
                    <ul>
                        <li><strong>PHP 5/7</strong> - Indispensavel o conhecimento em Codeigniter. Essenciais: PHPUnit, MVC, SOLID(diferencial).</li>
                        <li><strong>Banco de Dados</strong> - Principalmente o MySQL/MariaDB. Um pouquinho de PostgreSQL seria legal :p</li>
                        <li><strong>Git/Github</strong> - Indispensavelmente indispensavel, pois todos os projetos são versionados pelo git.</li>
                        <li><strong>Extras</strong> - Clean Code, Laravel, Doctrine, OWASP</li>
                    </ul>
                </div>
                <div class="collist">
                    <p><strong>Não necessariamente você precisa saber os dois (front e back), um dos dois já ta valendo.</strong></p>
                    <p>Ah! E se souber um pouco de marketing digital tú é fodaaa!</p>
                </div>
                <div class="collist col-space">
                    <p><strong>Se interessou?</strong> Entre em contato: 'leobcastroinc@gmail.com'</p>
                    <p>Mande o link do seu perfil no github com o assunto 'curriculo para (e a área que vc quer (front, back ou full-stack))'</p>
                    <p>Até breve!</p>
                    <p>...</p>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div> -->
    </main>
</body>
</html>