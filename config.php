<?php
/**
 * Created by PhpStorm.
 * User: tong
 * Date: 2018/8/23
 * Time: 14:10
 */
$mysql = [
    'host' => '192.168.10.220',
    'port' => 30000,
    'user' => 'root',
    'password' => 'baobaobooks',
    'dbname' => 'baobaobooks',
    'utf-8' => 'utf8bmp'
];

$redis_conf = [
    'host' => '192.168.10.220',
    'port' => 30001,
    'index' => 0,
    'persistent' => true,
    'auth' => '',
];

$queue_conf = [
    'host' => '192.168.10.220',
    'port' => 30001,
    'index' => 3,
    'persistent' => true,
    'auth' => '',
];

$shell_conf = [
    'path' => '/alidata/www/stage/cron/index.php',
    'task' => 'queue',
    'action' => [
        'basic' => 'updateGoodsBasic',
        'desc' => 'updateGoodsDesc'
    ],
];