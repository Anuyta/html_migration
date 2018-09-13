<?php

namespace app\controllers;

use app\models\Paragraphs;
use Yii;
use app\models\Images;
use app\models\ImagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class FilesController extends Controller
{
    public $layout = "creative";
    public $enableCsrfValidation = false;

    public function actionPhoto()
    {
        $imagesModel = new Images();
        $images = $imagesModel->getImages(Yii::$app->request->post('className'));
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $status = 1;
        if(!$images) {
            $status = 0;
        }
        return [
            'data' => $images,
            'status' => $status,
        ];
    }

    public function actionParagraphs($par)
    {
        $paragraphsModel = new Paragraphs();
        $paragraphs = $paragraphsModel->getParagraphs(Yii::$app->request->post('articleName'));
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $status = 1;
        if(!$paragraphs) {
            $status = 0;
        }
        return [
            'data' => $paragraphs,
            'status' => $status,
        ];
    }
}
