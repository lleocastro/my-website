<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <?php require_once ('includes/meta.php') ?>
    <meta name="description" content=""/>

    <?php require_once ('includes/links.php') ?>

    <title><?php echo getenv('APP_NAME') ?> - Dashboard</title>
</head>
<body>
<main id="wrapper" role="main">
    <?php require_once ('includes/navbar.php') ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard <small>Lista de Emails</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-responsive table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Desde</th>
                                    <th>##</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($emails as $email): ?>
                                <tr>
                                    <td><?php echo $email->get_id() ?></td>
                                    <td><?php echo $email->get_email() ?></td>
                                    <td><?php echo $email->get_created_at() ?></td>
                                    <td>
                                        <a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
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