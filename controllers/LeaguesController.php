<?php

namespace app\controllers;

use Yii;
use app\models\Leagues;
use app\models\search\LeaguesSearch;

use yii\rest\ActiveController;
use yii\web\Response;

class LeaguesController extends ActiveController
{
    public $modelClass = 'app\models\Leagues';

    public function beforeAction($action)
    {
     \Yii::$app->response->format = Response::FORMAT_JSON;
     return parent::beforeAction($action);
    }
}
