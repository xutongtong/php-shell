<?php
/**
 * Created by PhpStorm.
 * User: tong
 * Date: 2018/9/2
 * Time: 22:14
 */
class GoodsJob
{
    public function perform()
    {
        $goodsId = $this->args['goods_id'];

        $shellConf = $GLOBALS['shell_conf'];
        $action = '';

        // 更新基本信息
        if ($this->queue == GOODS_BASIC_QUEUE) {
            $action = $shellConf['action']['basic'];
        } elseif ($this->queue == GOODS_DESC_QUEUE) {
            $action = $shellConf['action']['basic'];
        }

        if (empty($action)) {
            return false;
        }

        $file = $shellConf['file'];
        $task = $shellConf['task'];

        // 必须保证计划任务服务器与消息队列消费者服务器是同一台
        $result = shell_exec("php {$file} {$task} {$action} {$goodsId}");
        sleep(1);

        return $result;
    }
}