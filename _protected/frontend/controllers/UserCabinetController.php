<?php
  namespace frontend\controllers;

use yii\base\Controller;
use common\models\User;
use common\models\UserProfile;
use Yii;
class UserCabinetController extends Controller{
    public function actionIndex()
    {   
      
   

        return $this->render('index',[
           
        ]);
    }

    public function actionUpdate(){

      $model = UserProfile::findOne(['user_id' => Yii::$app->user->id ]);
      if($model->load(Yii::$app->request->post()) && $model->save()){
        return $this->redirect(['/user-cabinet/index', 'id' => $model->id]);
      }
      
      return $this->render('update',[
         'model' => $model,
      ]);
    }
}     
?>