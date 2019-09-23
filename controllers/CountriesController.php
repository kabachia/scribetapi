<?php

namespace app\controllers;

use Yii;
use app\models\Countries;
use app\models\search\CountriesSearch;

use yii\rest\ActiveController;
use yii\web\Response;

class CountriesController extends ActiveController
{
    public $modelClass = 'app\models\Countries';

    public function beforeAction($action)
    {
     \Yii::$app->response->format = Response::FORMAT_JSON;
     return parent::beforeAction($action);
    }
}
