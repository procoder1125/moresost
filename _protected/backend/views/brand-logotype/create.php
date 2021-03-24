<?php
use common\models\BrandCategory;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$categories = BrandCategory::find()->all();
$data = [];
    
foreach($categories as $category){
    $data[$category->id] = $category->name;
}

/* @var $this yii\web\View */
/* @var $model common\models\BrandLogotype */

$this->title = 'Create Brand Logotype';
$this->params['breadcrumbs'][] = ['label' => 'Brand Logotypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-logotype-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin()?>
     <?=$form->field($model, 'foto')->fileInput();?>
     <?=$form->field($model, 'name')->textInput();?>
     <?=$form->field($model, 'category_id')->dropDownList( $data,
      ['class' => 'browser-default custom-select']);?>

     <button class="btn btn-success">save</button>
    <?php ActiveForm::end()?>
    
</div>
