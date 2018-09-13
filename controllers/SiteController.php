<?php

namespace app\controllers;


use app\models\Articles;
use app\models\Goods;
use app\models\Images;
use app\models\Items;
use app\models\Paragraphs;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class SiteController extends Controller
{
    public $layout = "creative";

    const POS_PHOTO = 'photo';
    const POS_ICON = 'icon';

    public function actionIndex()
    {
        $images = new Images();
        $photos = $images->getImages(self::POS_PHOTO);
        $icons = $images->getImages(self::POS_ICON);
        $articles = Articles::find()->all();
        return $this->render('index', array(
            'photos' => $photos,
            'icons' => $icons,
            'articles' => $articles,
        ));
    }

//    public function actionView($id)
//    {
//        $item = Items::findOne($id);
//
//        if(!$item){
//            throw new NotFoundHttpException();
//        }
//
//        return $this->render('view',array(
//            'item' => $item
//        ));
//    }

}
