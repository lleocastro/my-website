<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo getenv('APP_NAME') ?></a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li><a href="#">Sem notificações.</a></li>
                <li class="divider" role="separator"></li>
                <li><a href="#">Ver Todas</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo auth_data()->name ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-fw fa-edit"></i> Editar Perfil</a></li>
                <li><a href="<?php echo route('/register') ?>"><i class="fa fa-fw fa-user"></i> Novo Usuario</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo route('/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Sair</a></li>
            </ul>
        </li>
    </ul>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="<?php echo route('/dashboard') ?>"><i class="fa fa-fw fa-dashboard"></i> Inicio</a></li>
            <li><a href="<?php echo route('/dashboard/emails') ?>"><i class="fa fa-fw fa-envelope"></i> Lista Vip de Emails</a></li>
            <li><a href="<?php echo route('/dashboard/messages') ?>"><i class="fa fa-fw fa-comment"></i> Caixa de Entrada</a></li>
            <li><a href="#"><i class="fa fa-fw fa-area-chart"></i> Relatório de Acessos</a></li>
            <li><a href="#"><i class="fa fa-fw fa-pie-chart"></i> Estatísticas e Clicks</a></li>
            <li><a href="<?php echo route('dashboard/notificacoes') ?>"><i class="fa fa-fw fa-bell"></i> Lista de Notificações</a></li>
            <li><a href="<?php echo route('dashboard/bloqueios') ?>"><i class="fa fa-fw fa-eye-slash"></i> Usuários Bloqueados</a></li>
            <li><a href="<?php echo route('/') ?>"><i class="fa fa-fw fa-refresh"></i> Voltar para o Site</a></li>
        </ul>
    </div>
</div>
