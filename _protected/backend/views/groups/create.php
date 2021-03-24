<?php

use yii\helpers\Html;
use common\models\Courses;
use yii\db\ActiveRecord;
use yii\bootstrap\ActiveForm;

$courses = Courses::find()->all();
$data = [];

foreach($courses as $cours){
    $data[$cours->id] = $cours->title;
};
/* @var $this yii\web\View */
/* @var $model common\models\Groups */

$this->title = 'Create Groups';
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-create">

    <h1><?= Html::encode($this->title) ?></h1>

   <?php $form = ActiveForm::begin();?>
     <?=$form->field($model, 'name')->textinput();?>
     <?=$form->field($model, 'cours_id')->dropDownList($data,[
         'class' => 'browser-default custom-select'
     ]);?>
     <button class="btn btn-success">save</button>
   <?php ActiveForm::end();?>

</div>
