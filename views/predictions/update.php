<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Predictions */

$this->title = 'Update Predictions: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Predictions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="predictions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
