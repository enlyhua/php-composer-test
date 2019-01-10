<?php
/**
 * Created by PhpStorm.
 * User: WeiDaoDao
 * Date: 2019/1/10
 * Time: 11:15 PM
 */

namespace weidaodao\mailqueue;

use Yii;

class Message extends \yii\swiftmailer\Message
{
    public function queue()
    {
        $redis = Yii::$app->redis;

        if (empty($redis)) {
            throw new \yii\base\InvalidConfigException('redis not found in config');
        }

        
    }
}