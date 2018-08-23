<?php
/**
 * Created by PhpStorm.
 * User: tong
 * Date: 2018/8/23
 * Time: 14:10
 */
include_once "config.php";
include_once "mysql.php";
include_once "redis.php";

$start = time();

$sql = 'SELECT user_id, user_name, avatar_thumb FROM ecs_users';

$uresult = $db->query($sql, MYSQLI_USE_RESULT);

if ($uresult) {
	while ($row = $uresult->fetch_assoc()) {
		$key = sprintf('users:%d', $row['user_id']);	

		$redis->set($key, json_encode($row));
//		echo $redis->get($key);
	}
}

$end = time();

echo "take time is:" . ($end - $start);