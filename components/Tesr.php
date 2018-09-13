<?php
namespace app\components;

use yii\base\Exception;

class Tesr
{
    public static function test()
    {
        $h = fopen('sdbvgrf');
        if (!$h)
        {
            throw new Exception();
            throw new \yii\db\Exception();
        }
    }
}