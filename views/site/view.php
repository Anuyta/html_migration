<?php

/* @var $this yii\web\View */
/* @var $item \app\models\Items */

$this->title = 'View';


\app\assets\CompAsset::register($this);
?>
<div class="foto1">
    <div class="picture">
        <a href="#"><img src="/<?=$item->url?>" alt="#"/></a>
    </div>
    <div class="business">
        <?=$item->title?>
    </div>
    <div class="businesstext">
        <?=$item->full_text?>
    </div>

</div>