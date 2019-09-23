<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PredictionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Predictions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="predictions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Predictions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'league_id',
            'home_team',
            'away_team',
            'match_date',
            //'current_status',
            //'home_team_score',
            //'away_team_score',
            //'prediction_home_team',
            //'prediction_draw',
            //'prediction_away_team',
            //'crawled_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
