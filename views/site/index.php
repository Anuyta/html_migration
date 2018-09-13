<?php

/* @var $this yii\web\View */
/* @var $photos \app\models\Images[] */
/* @var $icons \app\models\Images[] */
/* @var $articles \app\models\Articles[] */

$this->title = 'My Yii Application';

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="baner">
    <div class="readMore">
        <a href="#"></a>
        <div class="nice">
            HERE'S SOME NICE WORK
        </div>
        <div class="viewProject">
            VIEW PORTFOLIO
        </div>

    </div>
</div>
<div class="info">
    <?foreach ($articles as $article)
    {?>
        <div class="info1">
                <div class="strelaBlack">
                </div>
                <div class="aboutus">
                    <?=$article->title?>
                </div>
                <div class="Text2a">
                    <?=$article->text?>
                </div>
                <div class="strelaBlack2">
                </div>
                <div class="read">
                    READ
                </div>
        </div>
    <?}?>
</div>

<div class="portfolio">
    <div class="ourportfolio">
        <div class="strelaBlack5">
        </div>
        <div class="textportfo">
            OUR PORTFOLIO
        </div>
    </div>
    <div id="photo">
        <?foreach ($photos as $photo)
        {?>
            <div class="foto1">
                <div class="viewblok">
                    <div class="view">
                        VIEW
                    </div>
                </div>
                <a href="#"><img src="/<?=$photo->url?>" alt="<?=$photo->alt?>"/></a>
            </div>
        <?}?>
    </div>
</div>
<div class="blog">
    <div class="blogtext">
        <div class="strelaBlack6">
        </div>
        <div class="blogup">
            BLOG UPDATES
        </div>
        <div class="btext">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa.
            Nunc vitae purus non augue scelerisque ultricies vitae et velit. Sed vitae lectus id sem lobortis scelerisque. Praesent eget consequat libero.
        </div>
    </div>
    <div class="conect">
        <div class="conectus">
            CONECT WITH US
        </div>
        <div id="icon">
            <?foreach ($icons as $icon)
            {?>
                <div class="icon1">
                    <a href="#"><img src="/<?=$icon->url?>" alt="<?=$icon->alt?>"/></a>
                </div>
            <?}?>
        </div>
    </div>
</div>
</div>
