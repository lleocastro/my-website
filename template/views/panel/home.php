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
                        <h1 class="page-header">
                            Dashboard <small>Estatísticas de Acesso</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Online
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info" role="alert">
                            <i class="fa fa-info-circle"></i>  Ver mais informações no <a href="#" class="alert-link">Google Analytics.</a> Go!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-inbox fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total_unread_messages ?></div>
                                        <div>Novas MSGs!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo route('/dashboard/messages') ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total_unread_emails ?></div>
                                        <div>Novos Emails!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo route('/dashboard/emails') ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-line-chart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total_views ?></div>
                                        <div>Total de Views!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-globe fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $current_online ?></div>
                                        <div>Usuários Online</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Deletar Rastro:
                                <form method="post" action="<?php echo route('dashboard/trail/delete') ?>" accept-charset="utf-8">
                                    <input type="text" name="addr" placeholder="IP origem..."/>
                                    <?php echo csrf_field() ?>
                                    <button type="submit">Apagar</button>
                                </form>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table id="email-table" class="table table-striped table-responsive table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>Paginas Acessadas</th>
                                    <th>Origem</th>
                                    <th>Acessado em</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($page_views !== null): ?>
                                    <?php foreach ($page_views as $page_view): ?>
                                        <tr>
                                            <td><?php echo $page_view->get_route() ?></td>
                                            <td><?php echo $page_view->get_addr() ?></td>
                                            <td><?php echo $page_view->get_date_time() ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td>-</td>
                                        <td>Sem Informações...</td>
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
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="page-header">
                            <small><strong>Mensagens Recentes</strong></small>
                        </h1>
                        <div class="list-group">
                            <?php if ($recent_messages !== null): ?>
                                <?php foreach ($recent_messages as $recent_message): ?>
                                    <a href="<?php echo route('dashboard/message/show', $recent_message->get_id()) ?>" class="list-group-item">
                                        <h4 class="list-group-item-heading"><?php echo $recent_message->get_subject() ?></h4>
                                        <p class="list-group-item-text"><?php echo $recent_message->get_message() ?></p>
                                    </a>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Sem Mensagens</h4>
                                    <p class="list-group-item-text">...</p>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Dispositivos</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <?php if ($page_views !== null): ?>
                                        <?php foreach ($page_views as $page_view): ?>
                                            <li class="list-group-item"><?php echo $page_view->get_agent() ?></li>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <li class="list-group-item">Sem Dispositivos...</li>
                                    <?php endif; ?>
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