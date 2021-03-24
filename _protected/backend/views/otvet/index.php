<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OtvetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Otvets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otvet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Otvet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'user_email:email',
            'message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
