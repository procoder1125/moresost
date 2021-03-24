<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\UserProfile;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $group->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Groups', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="container">
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student's id</th>
        <th>User Profile ID</th>
        <th>Full name</th>
        <th>Group name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    
    <?php foreach($students as $student):?>
      <tr>      
         <td><?=$student->id?></td>
         <td><?=$student->user_profile_id?></td> 
         <td><?=UserProfile::findOne(['id' => $student->user_profile_id])->full?></td>  
         <td><?=$group->name?></td> 
         <td><span style="font-size:100%;">
          <a style="padding:6%;" title="view" aria-label="view" href="<?=Url::to(['/student/view', 'id' => $student->id])?>"><i class="glyphicon glyphicon-eye-open"></i></a>
          <a title="update" aria-label="update" style="padding:6%;" href="<?=Url::to(['/student/update', 'id' => $student->id])?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <a title="delete" aria-label="delete" data-method="post" data-confirm = "Are you sure to delete ?" style="padding:6%;" href="<?=Url::to(['/student/delete', 'id' => $student->id])?>"><i class="glyphicon glyphicon-trash"></i></i></a>  </span></td>
      </tr>
    <?php endforeach;?>

    

    </tbody>
  </table>
</div>


</div>
