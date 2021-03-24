<?php

use yii\helpers\Html;
use common\models\UserProfile;
use yii\widgets\ActiveForm;
use common\models\Groups;

$groups = Groups::find()->all();
$data1 = [];
foreach($groups as $group){
    $data1[$group->id] = $group->name;
}

$students = UserProfile::find()->all();
$data = [];
foreach($students as $student){
    $data[$student->id] = $student->full;
};
/* @var $this yii\web\View */
/* @var $model common\models\Student */

$this->title = 'Create Student';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-create">

    <h1><?= Html::encode($this->title) ?></h1>

   <?php $form = ActiveForm::begin([
       'options'=>[
           
       ]
   ])?>
      <?=$form->field($model, 'user_profile_id')->dropDownList($data, ['browser-default custom-select'])?> 
      <?=$form->field($model, 'group_id')->dropDownList($data1, ['browser-default custom-select'])?> 
      <button class="btn btn-success"> save</button>  
      <?php ActiveForm::end()?>
</div>
