<?php
/**
 * Created by PhpStorm.
 * User: tong
 * Date: 2018/8/23
 * Time: 14:09
 */
$db = mysqli_connect($mysql['host'], $mysql['user'], $mysql['password'], $mysql['dbname'], $mysql['port']);

if (!$db) {
    die('can\'t connect to mysql' . mysqli_error());
}