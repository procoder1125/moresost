<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Otvet */

$this->title = 'Update Otvet: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Otvets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="otvet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
