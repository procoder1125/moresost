<?php

use yii\helpers\Html;
use common\models\Groups;
use yii\grid\GridView;
use common\models\UserProfile;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="container">
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Student's id</th>
                  <th>User profile ID</th>
                  <th>Full name</th>
                  <th>Group name</th>
                </tr>
              </thead>
              <tbody>
              
              <?php foreach($students as $student):?>
              <?php  $group = Groups::find()->where(['id' => $student->group_id])->one();?>
                <tr>      
                   <td><?=$student->id?></td>
                   <td><?=$student->user_profile_id?></td> 
                   <td><?=UserProfile::findOne(['id' => $student->user_profile_id])->full?></td> 
                   <td><?=$group->name?></td> 
                </tr>
              <?php endforeach;?>
          
              
          
              </tbody>
            </table>
          </div>
          
          
          </div>


</div>
