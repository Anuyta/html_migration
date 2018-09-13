<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

//AppAsset::register($this);

\app\assets\CompAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">


<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="container">
    <div class="head">
        <div class="logo">
            <a href="#"></a>
        </div>
        <div class="menuBox">
            <div class="email">
                <a href="#">info@CreativeStudio.com</a>
            </div>
            <div class="menu">
                <ul type="none">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#">ABOUT US</a>
                    </li>
                    <li>
                        <a href="#">PORTFOLIO</a>
                    </li>
                    <li>
                        <a href="#">SERVICES</a>
                    </li>
                    <li>
                        <a href="#">BLOG</a>
                    </li>
                    <li style="margin-right: 0px;">
                        <a href="#">CONTACT US</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <?= $content ?>

    <div class="end">
        <div class="container">
            <div class="menuEnd">
                <div class="menuE">
                    <ul type="none">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="CS">
                    &#169 2010 CreativeStudio. All Rights Reserved
                </div>
            </div>
            <div class="logoEnd">
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
