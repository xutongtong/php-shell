<?php
/**
 * Created by PhpStorm.
 * User: tong
 * Date: 2018/9/2
 * Time: 22:13
 */
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . 'config.php';
require_once __DIR__ . 'constant.php';

if (!class_exists('Composer\Autoload\ClassLoader', false)) {
    die('Composer Error!');
}

