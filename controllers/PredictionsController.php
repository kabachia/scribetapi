<?php

namespace app\controllers;

use Yii;
use app\models\Predictions;
use app\models\search\PredictionsSearch;

use yii\rest\ActiveController;
use yii\web\Response;

class PredictionsController extends ActiveController
{
    public $modelClass = 'app\models\Predictions';

    public function beforeAction($action)
    {
     \Yii::$app->response->format = Response::FORMAT_JSON;
     return parent::beforeAction($action);
    }

    public function actions() 
    { 
      $actions = parent::actions();
      $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
      return $actions;
    }

    public function prepareDataProvider() 
    {
      $searchModel = new \app\models\search\PredictionsSearch();    
      return $searchModel->search(\Yii::$app->request->queryParams);
    }
}
