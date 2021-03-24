<?php
 namespace frontend\controllers;
 use common\models\Courses;
 use yii\web\Controller;

class ViewCoursController extends Controller{
    public function actionIndex($id){
        $cours_name = Courses::find()->where(['id' => $id])->one();

        return $this->render('index',[
            'cours_name' => $cours_name,    
        ]);
    }

} 
?>