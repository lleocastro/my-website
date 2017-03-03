<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content=""/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Notificações</title>
</head>
<body>
<main id="wrapper" role="main">
    <?php require_once ('includes/navbar.php') ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard <small>Lista de Notificações</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a title="Download em JSON" href="<?php echo route('dashboard/download/notificacoes') ?>" class="btn btn-default" role="button">
                                    Download
                                </a>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Tipo</th>
                                    <th>Desde</th>
                                    <th>##</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($notifications !== null): ?>
                                    <?php foreach ($notifications as $notification): ?>
                                        <tr>
                                            <td><?php echo $notification->get_id() ?></td>
                                            <td><?php echo $notification->get_name() ?></td>
                                            <td><?php echo $notification->get_email() ?></td>
                                            <td><?php echo $notification->get_label() ?></td>
                                            <td><?php echo $notification->get_created_at() ?></td>
                                            <td>
                                                <a id="submit" href="<?php echo route('dashboard/notificacao/delete', $notification->get_id()) ?>">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td>-</td>
                                        <td>Sem Notificações...</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer center">
                            <?php echo $pagination_links ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<?php require_once ('includes/scripts.php') ?>
</html>