<?php
/**
 * This is the configuration file for the unit tests.
 * You can override configuration values by creating a `config.local.php` file
 * and manipulate the `$config` variable.
 */

$config = [
    'mongodb' => [
        'dsn' => 'mongodb://travis:test@localhost:27017/yii2test',
        'options' => [],
        'driverOptions' => [],
    ],
    'ssh' => [
        'host' => '127.0.0.1',
        'port' => 22,
        'options' => [],
        'username' => 'travis',
        'password' => '',
    ],
];

if (is_file(__DIR__ . '/config.local.php')) {
    include(__DIR__ . '/config.local.php');
}

return $config;