<?php

namespace backend\controllers;

use Yii;
use common\models\BrandLogotype;
use common\models\BrandLogotypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\BrandCategory;

/**
 * BrandLogotypeController implements the CRUD actions for BrandLogotype model.
 */
class BrandLogotypeController extends Controller
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
     * Lists all BrandLogotype models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BrandLogotypeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BrandLogotype model.
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
     * Creates a new BrandLogotype model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BrandLogotype();

        if ($model->load(Yii::$app->request->post())) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            $model->filename = (microtime(true) * 10000).".".$model->foto->extension;
            $model->created_at = date("Y.m.d  H:i");
            $model->original_name = $model->foto->name;

            if($model->validate()){
                $model->foto->saveAs('../fotobrand/'.$model->filename);
                $model->save(false);
            }
         


            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BrandLogotype model.
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
     * Deletes an existing BrandLogotype model.
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

    public function actionLogoView($id){
        $category = BrandCategory::findOne(['id' => $id]);
        $logotypes = BrandLogotype::find()->where(['category_id' => $id])->all();

        return $this->render('logo-view',[
            'logotypes' => $logotypes,
            'category' => $category,
        ]);
    }

    public function actionAllCategories(){
        $categories = BrandCategory::find()->all();
        $logotypes = BrandLogotype::find()->all();
        return $this->render('all-categories', [
            'categories' => $categories,
            'logotypes' => $logotypes,

        ]);
    }


    /**
     * Finds the BrandLogotype model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BrandLogotype the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BrandLogotype::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
