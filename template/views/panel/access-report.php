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
                        <h1 class="page-header">Dashboard <small>Relatório de Acessos</small></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge">14</span>
                                        Cras justo odio
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php require_once ('includes/scripts.php') ?>
</html>