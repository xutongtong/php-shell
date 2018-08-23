<?php
/**
 * Created by PhpStorm.
 * User: tong
 * Date: 2018/8/23
 * Time: 14:18
 */
include_once "../config.php";

$redis = new Redis();

$redis->connect($redis_conf['host'], $redis_conf['port']);

echo "redis is ok: " . $redis->ping();