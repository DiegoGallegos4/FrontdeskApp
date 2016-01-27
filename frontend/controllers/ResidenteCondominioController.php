<?php

namespace frontend\controllers;

use Yii;
use backend\models\ResidenteCondominio;
use frontend\controllers\ResidenteCondominioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResidenteCondominioController implements the CRUD actions for ResidenteCondominio model.
 */
class ResidenteCondominioController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ResidenteCondominio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResidenteCondominioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResidenteCondominio model.
     * @param integer $residente_id
     * @param integer $condominio_id
     * @return mixed
     */
    public function actionView($residente_id, $condominio_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($residente_id, $condominio_id),
        ]);
    }

    /**
     * Creates a new ResidenteCondominio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResidenteCondominio();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'residente_id' => $model->residente_id, 'condominio_id' => $model->condominio_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ResidenteCondominio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $residente_id
     * @param integer $condominio_id
     * @return mixed
     */
    public function actionUpdate($residente_id, $condominio_id)
    {
        $model = $this->findModel($residente_id, $condominio_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'residente_id' => $model->residente_id, 'condominio_id' => $model->condominio_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ResidenteCondominio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $residente_id
     * @param integer $condominio_id
     * @return mixed
     */
    public function actionDelete($residente_id, $condominio_id)
    {
        $this->findModel($residente_id, $condominio_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResidenteCondominio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $residente_id
     * @param integer $condominio_id
     * @return ResidenteCondominio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($residente_id, $condominio_id)
    {
        if (($model = ResidenteCondominio::findOne(['residente_id' => $residente_id, 'condominio_id' => $condominio_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
