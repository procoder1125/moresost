<?php

use yii\helpers\Html;
use common\models\Courses;
use yii\widgets\ActiveForm;

$courses = Courses::find()->all();
$data = [];
foreach($courses as $cours){
    $data[$cours->id] = $cours->title;
}

/* @var $this yii\web\View */
/* @var $model common\models\FotoCours */

$this->title = 'Create Foto Cours';
$this->params['breadcrumbs'][] = ['label' => 'Foto Cours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foto-cours-create">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?php $form = ActiveForm::begin([
        'action'=> yii\helpers\Url::to(['create'])
    ])?>
    
    <?=$form->field($model, 'foto')->fileInput()?>

     <?=$form->field($model, 'cours_id')->dropDownList($data,['class' => 'browser-default custom-select'])?>
     <button class="btn btn-success"> save</button>
    <?php ActiveForm::end()?>  



</div>
