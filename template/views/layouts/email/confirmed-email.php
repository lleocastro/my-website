<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php echo $this->config->item('charset') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="shortcut icon" href="<?php echo asset('img/logo/logo-icon.ico') ?>"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600"/>

    <style>
        html, body {
            margin: 0;
            height: 100vh;
            color: #636b6f;
            font-size: 16px;
            font-weight: 100;
            font-family: 'Raleway', sans-serif;
            background-color: #FFFFFF;
        }
        .center {
            display: flex;
            display: -webkit-flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            text-align: center;
            height: 100vh;
        }
        .title {
            font-size: 5em;
            margin-bottom: 20px;
        }
        .sub-title {
            font-size: 1.5em;
            margin-bottom: 50px;
        }
        a {
            color: #636b6f;
            padding: 17px 25px;
            font-size: 0.8em;
            font-weight: 600;
            border-radius: 3px;
            letter-spacing: .1rem;
            text-decoration: none;
            border: 1px solid #333333;
            text-transform: uppercase;
        }
        a:hover {
            border: 1px solid #777777;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, .3);
        }

        @media screen and (max-width: 992px) {
            .title {
                font-size: 4em;
            }
        }
        @media screen and (max-width: 768px) {
            .title {
                font-size: 3em;
            }
            .sub-title {
                font-size: 1.3em;
            }
            .center a {
                padding: 13px 20px;
                font-size: 0.7em;
            }
        }
    </style>

    <title>LEOBCASTRO - Email Confirmado</title>
</head>
<body>
    <div class="center">
        <div>
            <div class="title">
                Email Confirmado!
            </div>
            <div class="sub-title">
                Cheque seu email! Acabei de lhe enviar um email
            </div>
            <a title="<?php echo route('/') ?>" href="<?php echo route('/') ?>">Voltar para o site</a>
        </div>
    </div>
</body>
</html>