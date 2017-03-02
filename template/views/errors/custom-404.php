<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>">
    <meta name="author" content="Léo B. Castro"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300, 700"/>

    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>

    <link rel="stylesheet" href="<?php echo asset('css/app.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/construction.min.css') ?>"/>
    <link rel="stylesheet" href="<?php echo asset('css/toastr.min.css') ?>"/>

    <?php echo ie_support_field() ?>

    <title>404</title>
</head>
<body>
<main class="container-full backimage backimage-full" style="background-image: url(<?php echo asset('img/page-in-construct.jpeg') ?>)" role="main">
    <section class="lightbox center">
        <div class="message caption">
            <h1>Opaaaaaaa!</h1>
            <p class="tagline">Parece que a pagina que você esta tentando acessar não existe. 😕</p>
            <a title="Voltar para leobcastro.com" href="<?php echo route('/') ?>" class="btn btn-show" role="button">Voltar para o site</a>
        </div>

        <div class="notification caption">
            <h1>Notificações</h1>
            <div class="container container-space">
                <form id="notification-form" method="post" action="<?php echo route('notification/blog') ?>" accept-charset="utf-8">
                    <div class="line">
                        <div class="collist col-space">
                            <input type="text" name="name" class="form" placeholder="Como você se chama?"/>
                        </div>
                        <div class="collist col-space">
                            <input type="email" name="email" class="form" placeholder="Seu principal e-mail"/>
                        </div>
                    </div>
                    <div class="line line-space">
                        <div class="s7col col-space">
                            <?php echo csrf_field('notification_token') ?>
                            <button id="notify-submit" type="submit" class="btn btn-light btn-full">Ativar Notificação</button>
                        </div>
                        <div class="s5col col-space">
                            <a id="rollback" href="#" class="btn btn-dark btn-full" role="button">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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
</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo asset('js/construction.min.js') ?>"></script>
<script src="<?php echo asset('js/toastr.min.js') ?>"></script>
</html>