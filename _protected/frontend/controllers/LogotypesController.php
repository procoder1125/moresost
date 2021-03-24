<?php
 namespace frontend\controllers;

use yii\web\Controller;
use common\models\BrandCategory;
use common\models\BrandLogotype;
use yii\web\UploadedFile;
use Yii;


class LogotypesController extends Controller{

    public function actionIndex(){
        $categories = BrandCategory::find()->all();
        $logotypes = BrandLogotype::find()->all();

        return $this->render('index',[
            'categories' => $categories,
            'logotypes' => $logotypes,
        ]);
    }

    public function actionDownload($id){
        $model = BrandLogotype::findOne($id);
        $path = Yii::getAlias('@webroot') . '/fotobrand';

        $file = $path . "/".$model->filename;
        
        if (file_exists($file)) {
        
           Yii::$app->response->sendFile($file);
        
        }

        
    }
}

?>