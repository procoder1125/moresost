<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FotoCoursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foto Cours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foto-cours-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Foto Cours', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cours_id',
            'filename',
            'original_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
