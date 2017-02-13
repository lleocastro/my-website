<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->config->item('language') ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css') ?>"/>

    <?php echo ie_support_field() ?>

    <title>Sign in</title>
</head>
<body>
    <header>
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo route('/') ?>">
                        <?php echo getenv('APP_NAME') ?>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="container-fluid" role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Sign in to access the authenticated area</div>
                        <div class="panel-body">
                            <?php require_once (dirname(__DIR__) . '/layouts/includes/show-errors.php'); ?>
                            <form class="form-horizontal" method="post" action="<?php echo route('login/auth') ?>" accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input id="email" name="email" type="email" class="form-control" placeholder="example@email.com" value="<?php echo old('email') ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Your password...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?php echo csrf_field() ?>
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                        <a class="btn btn-link" href="#">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
</html>