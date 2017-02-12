
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu message-dropdown">
                <?php foreach ($unread_messages as $unread_message): ?>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                <span class="pull-left">
                                    <img class="media-object" src="http://placehold.it/50x50" alt="">
                                </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong><?php echo $unread_message->get_name() ?></strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> <?php echo $unread_message->get_created_at() ?></p>
                                    <p><?php echo substr($unread_message->get_subject(), 0, 27) ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="message-footer">
                    <a href="<?php echo route('/lbc/dashboard/messages_list') ?>">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <?php foreach ($unread_emails as $unread_email): ?>
                    <li><a href="#"><?php echo substr($unread_email->get_email(), 0, 20) . '...' ?> <span class="badge"><?php echo $unread_email->get_created_at() ?></span></a></li>
                <?php endforeach; ?>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo route('/lbc/dashboard/emails_list') ?>">View All</a>
                </li>
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
            <li class="active"><a href="#"><i class="fa fa-fw fa-dashboard"></i> Inicio</a></li>
            <li><a href="#"><i class="fa fa-fw fa-edit"></i> Lista de Emails</a></li>
            <li><a href="#"><i class="fa fa-fw fa-edit"></i> Lista de Mensagens</a></li>
            <li><a href="<?php echo route('/') ?>"><i class="fa fa-fw fa-refresh"></i> Voltar para o Site</a></li>
        </ul>
    </div>
</div>
