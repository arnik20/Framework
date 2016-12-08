<?php
$config = Dbconnect::instance();
$config->set(array(
    'host' => 'mysql.hostinger.ru',
    'user' => 'u474621296_root',
    'pass' => '150597',
    'name' => 'u474621296_base'
));
$config->connect();
unset($config);