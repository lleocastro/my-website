<?php

$config['smtp_host'] = getenv('MAIL_HOST');
$config['smtp_port'] = getenv('MAIL_PORT');
$config['smtp_user'] = getenv('MAIL_USERNAME');
$config['smtp_pass'] = getenv('MAIL_PASSWORD');
$config['protocol'] = 'smtp';
$config['validate'] = TRUE;
$config['mailtype'] = 'html';
$config['charset'] = getenv('APP_CHARSET');
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";
