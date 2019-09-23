<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Predictions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="predictions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'league_id')->textInput() ?>

    <?= $form->field($model, 'home_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'away_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'match_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_team_score')->textInput() ?>

    <?= $form->field($model, 'away_team_score')->textInput() ?>

    <?= $form->field($model, 'prediction_home_team')->textInput() ?>

    <?= $form->field($model, 'prediction_draw')->textInput() ?>

    <?= $form->field($model, 'prediction_away_team')->textInput() ?>

    <?= $form->field($model, 'crawled_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
