<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BrandCategory */

$this->title = 'Update Brand Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Brand Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="brand-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
