<?php
/**
 * Created by PhpStorm.
 * User: tong
 * Date: 2018/8/23
 * Time: 14:10
 */
$redis = new Redis();

$redis->connect($redis_conf['host'], $redis_conf['port']);

// 选择db—2
$redis->select(2);