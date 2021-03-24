<?php
 namespace frontend\controllers;

use yii\web\Controller;
use common\models\User;
use common\models\UserProfile;
use Yii;
use common\models\Message;

class MessageController extends Controller{
    public function actionIndex()
    {
        $users = User::findOne(['id' => Yii::$app->user->id]);
        $user_profile = UserProfile::findOne(['user_id' => Yii::$app->user->id]);

        $model = new Message;
        if($model->load(Yii::$app->request->post())){
           
                $model->user_id = Yii::$app->user->id;
                $model->email = User::findOne(['id' => Yii::$app->user->id])->email;
                $model->created_at = date('Y-m-d H:i');
           
            if($model->validate()){
                $model->save();
            }
            
            return $this->redirect(Yii::$app->request->referrer);
        }
        

        return $this->render('index',[
            'users' => $users,
            'user_profile' => $user_profile,
            'model' => $model,
        ]);
    }

    public function actionSendMessage(){
        $model = new Message;
        if($model->load(Yii::$app->request->post()) ){
            
            $model->user_id = Yii::$app->user->id;
            $model->email = User::findOne(['id' => Yii::$app->user->id])->email;
            if($model->validate()){
                $model->save();
            }
            
            return $this->redirect(Yii::$app->request->referrer);
        }
    }
}
?>