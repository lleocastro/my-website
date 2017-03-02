<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- NAVBAR -->
<div class="navbar navbar-fixed navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-brand">
            <a title="Logo" class="scroll" href="<?php echo route('/') ?>">
                <img title="Logo" src="<?php echo asset('img/logo/logo-small.png') ?>" alt="Logo do website"/>
            </a>
        </div>
        <a title="Voltar para o portfólio" href="<?php echo route('/#portfolio') ?>" class="btn btn-dark navbar-btn" role="button" rel="nofollow">
            <i class="material-icons" style="vertical-align: -29%">replay</i>
            Voltar
        </a>
    </div>
</div><!-- END NAVBAR -->
