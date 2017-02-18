<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content=""/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Show</title>
</head>
<body>
<main id="wrapper" role="main">
    <?php require_once ('includes/navbar.php') ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard <small>Detalhes</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                            <?php if (isset($email)): ?>
                            <form method="post" action="<?php echo route('dashboard/email/delete', $email->get_id()) ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <p class="mini-text">E-mail:</p>
                                            <input type="email" class="form-control" value="<?php echo $email->get_email(); ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <p class="mini-text">Identidade:</p>
                                            <input type="text" class="form-control" value="<?php echo $email->get_addr(); ?>" readonly />
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (isset($message)): ?>
                            <form method="post" action="<?php echo route('dashboard/message/delete', $message->get_id()) ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <p class="mini-text">Nome:</p>
                                            <input type="text" class="form-control" value="<?php echo $message->get_name() ?>" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <p class="mini-text">Identidade:</p>
                                            <input type="text" class="form-control" value="<?php echo $message->get_addr() ?>" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="mini-text">E-mail:</p>
                                    <input type="email" class="form-control" value="<?php echo $message->get_email() ?>" readonly />
                                </div>
                                <div class="form-group">
                                    <p class="mini-text">Mensagem:</p>
                                    <textarea class="form-control" style="max-width: 100% !important; min-width: 100% !important;" readonly>
                                        <?php echo $message->get_message() ?>
                                    </textarea>
                                </div>
                            <?php endif; ?>
                                <div class="form-group">
                                    <?php echo csrf_field() ?>
                                    <?php if (isset($email)): ?>
                                    <a href="<?php echo route('dashboard/emails') ?>" class="btn btn-primary btn-block">VOLTAR</a>
                                    <?php elseif (isset($message)): ?>
                                    <a href="<?php echo route('dashboard/messages') ?>" class="btn btn-primary btn-block">VOLTAR</a>
                                    <?php endif; ?>
                                    <button type="submit" class="btn btn-danger btn-block">DELETAR</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
    <?php require_once ('includes/scripts.php') ?>
</html>