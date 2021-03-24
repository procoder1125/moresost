<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FotoCours */

$this->title = 'Update Foto Cours: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Foto Cours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foto-cours-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
