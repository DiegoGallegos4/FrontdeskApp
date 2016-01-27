<?php

namespace frontend\controllers;

use Yii;
use backend\models\ResidenteBodega;
use frontend\controllers\ResidenteBodegaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResidenteBodegaController implements the CRUD actions for ResidenteBodega model.
 */
class ResidenteBodegaController extends Controller
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
     * Lists all ResidenteBodega models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResidenteBodegaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResidenteBodega model.
     * @param integer $residente_id
     * @param integer $bodega_id
     * @return mixed
     */
    public function actionView($residente_id, $bodega_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($residente_id, $bodega_id),
        ]);
    }

    /**
     * Creates a new ResidenteBodega model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResidenteBodega();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'residente_id' => $model->residente_id, 'bodega_id' => $model->bodega_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ResidenteBodega model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $residente_id
     * @param integer $bodega_id
     * @return mixed
     */
    public function actionUpdate($residente_id, $bodega_id)
    {
        $model = $this->findModel($residente_id, $bodega_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'residente_id' => $model->residente_id, 'bodega_id' => $model->bodega_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ResidenteBodega model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $residente_id
     * @param integer $bodega_id
     * @return mixed
     */
    public function actionDelete($residente_id, $bodega_id)
    {
        $this->findModel($residente_id, $bodega_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResidenteBodega model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $residente_id
     * @param integer $bodega_id
     * @return ResidenteBodega the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($residente_id, $bodega_id)
    {
        if (($model = ResidenteBodega::findOne(['residente_id' => $residente_id, 'bodega_id' => $bodega_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
