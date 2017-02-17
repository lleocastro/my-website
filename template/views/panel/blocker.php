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
                        <h1 class="page-header">Dashboard <small>Bloqueios</small></h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <form id="blocker-form" method="post" action="<?php echo route('dashboard/bloqueio/store') ?>" accept-charset="utf-8">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mini-text">Protocolo:</p>
                            <input type="text" name="protocol" class="form-control"/>
                        </div>
                        <div class="col-sm-5">
                            <p class="mini-text">Motivo:</p>
                            <input type="text" name="reason" class="form-control"/>
                        </div>
                        <div class="col-sm-1">
                            <p class="mini-text">Nivel:</p>
                            <input type="number" name="level" class="form-control" value="1"/>
                        </div>
                        <div class="col-sm-3">
                            <p class="mini-text">.</p>
                            <?php echo csrf_field('blocker_token') ?>
                            <button id="blocker-submit" type="submit" class="btn btn-danger btn-block">Bloquear!</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container-fluid margin-top">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                            </div>
                            <div class="panel-body">
                                <table id="email-table" class="table table-responsive table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Bloqueado</th>
                                        <th>Motivo</th>
                                        <th>Nivel</th>
                                        <th>##</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ($blockers !== null): ?>
                                        <?php foreach ($blockers as $blocker): ?>
                                            <tr>
                                                <td><?php echo $blocker->get_addr() ?></td>
                                                <td><?php echo $blocker->get_reason() ?></td>
                                                <td><?php echo $blocker->get_level() ?></td>
                                                <td>
                                                    <a id="submit" href="<?php echo route('dashboard/bloqueio/delete', $blocker->get_id()) ?>">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td>Sem Bloqueios...</td>
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