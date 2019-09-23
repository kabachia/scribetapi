<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\PredictionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="predictions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'league_id') ?>

    <?= $form->field($model, 'home_team') ?>

    <?= $form->field($model, 'away_team') ?>

    <?= $form->field($model, 'match_date') ?>

    <?php // echo $form->field($model, 'current_status') ?>

    <?php // echo $form->field($model, 'home_team_score') ?>

    <?php // echo $form->field($model, 'away_team_score') ?>

    <?php // echo $form->field($model, 'prediction_home_team') ?>

    <?php // echo $form->field($model, 'prediction_draw') ?>

    <?php // echo $form->field($model, 'prediction_away_team') ?>

    <?php // echo $form->field($model, 'crawled_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
