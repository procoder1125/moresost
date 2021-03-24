<?php

namespace backend\controllers;

use Yii;
use common\models\Otvet;
use common\models\OtvetSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\UserProfile;
use common\models\Message;
use Faker\Provider\ka_GE\DateTime;

/**
 * OtvetController implements the CRUD actions for Otvet model.
 */
class OtvetController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Otvet models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OtvetSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Otvet model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Otvet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Otvet();

        $user = User::findOne(['id' => $id]);
        $user_profile = UserProfile::findOne(['user_id' => $id]);
        $message = Message::findOne(['user_id' => $id]);

        if ($model->load(Yii::$app->request->post())) {
            $model->user_id = $user->id;
            $model->user_email = $user->email;
            $model->created_at = date("Y.m.d  H:i");
            if($model->validate()){
                $model->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'user' => $user,
            'user_profile' => $user_profile,
            'message' => $message,
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Otvet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Otvet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Otvet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Otvet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Otvet::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSend($id){
        $model = new Otvet;

        $user = User::findOne(['id' => $id]);
        $user_profile = UserProfile::findOne(['user_id' => $id]);
        $message = Message::findOne(['user_id' => $id]);
        return $this->render('send',[
            'user' => $user,
            'user_profile' => $user_profile,
            'message' => $message,
            'model' => $model,
        ]);
    }
}
