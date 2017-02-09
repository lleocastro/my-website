<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta charset="<?php echo $this->config->item('charset') ?>">
    <meta name="author" content="Léo B. Castro"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300, 700"/>

    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>

    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/construction.min.css') ?>"/>

    <?php echo ie_support_field() ?>

    <title>OPS!</title>
</head>
<body>
<div class="container-full backimage backimage-full" style="background-image: url(<?php echo asset('img/page-in-construct.jpeg') ?>)">
    <section class="lightbox center">
        <header class="caption">
            <h1>Página em Construção</h1>
            <p class="tagline">In vitae fermentum velit. Mauris ullamcorper lorem vel eros luctus facilisis. Etiam suscipit, leo non semper porttitor, sem ligula tincidunt nisi.</p>
            <a title="Voltar para leobcastro.com" href="<?php echo route('/') ?>" class="btn btn-show" role="button">Voltar para o site</a>
            <a title="Notificação por email" href="#" class="btn btn-show btn-light" role="button">Notifique-me!</a>
        </header>

        <div class="social-links">
            <a title="Facebook" href="https://www.facebook.com/leobcastro94" rel="nofollow">
                <img title="Facebook" src="<?php echo asset('img/icons/facebook.png') ?>" alt="Siga-me no facebook"/>
            </a>
            <a title="Intagram" href="https://www.instagram.com/leocastro94" rel="nofollow">
                <img title="Intagram" src="<?php echo asset('img/icons/instagram.png') ?>" alt="Siga-me no Instagram"/>
            </a>
            <a title="Linkedin" href="https://www.linkedin.com/in/leobcastro" rel="nofollow">
                <img title="Linkedin" src="<?php echo asset('img/icons/linkedin.png') ?>" alt="Siga-me no Linkedin"/>
            </a>
            <a title="Github" href="https://github.com/lleocastro" rel="nofollow">
                <img title="Github" src="<?php echo asset('img/icons/github.png') ?>" alt="Siga-me no Github"/>
            </a>
        </div>
    </section>
</div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo asset('js/construction.min.js') ?>"></script>
</html>