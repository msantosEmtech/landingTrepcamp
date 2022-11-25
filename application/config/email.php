<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| E-mail constants
|--------------------------------------------------------------------------
*/
defined('EMAIL_FROM')              OR define('EMAIL_FROM',              'info@trepcamp.net');
defined('EMAIL_FROM_NAME')         OR define('EMAIL_FROM_NAME',         'Trepcamp');
defined('EMAIL_TO')                OR define('EMAIL_TO',                'xxxx@xxx.xx');
defined('EMAIL_SUBJECT')           OR define('EMAIL_SUBJECT',           'Thanks! for sign up, please verified your email');
defined('EMAIL_ENABLED')           OR define('EMAIL_ENABLED',            TRUE);

/*
|--------------------------------------------------------------------------
| E-mail configuration
|--------------------------------------------------------------------------
*/
$config['crlf']         = "\r\n";
$config['newline']      = "\r\n";
$config['charset']      = 'utf-8';
$config['protocol']     = 'smtp';
$config['wordwrap']     = TRUE;
$config['mailtype']     = 'html';
$config['smtp_host']    = 'mail.trepcamp.net';
$config['smtp_user']    = EMAIL_FROM;
$config['smtp_pass']    = 'U.a8Cqv9d-[-';
$config['smtp_port']    = 587;
$config['smtp_crypto']  = '';
$config['smtp_timeout'] = 10;
