<?php

namespace frontend\controllers;

use Yii;
use backend\models\ResidenteVisita;
use frontend\controllers\ResidenteVisitaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResidenteVisitaController implements the CRUD actions for ResidenteVisita model.
 */
class ResidenteVisitaController extends Controller
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
     * Lists all ResidenteVisita models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResidenteVisitaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResidenteVisita model.
     * @param integer $residente_id
     * @param integer $visita_id
     * @return mixed
     */
    public function actionView($residente_id, $visita_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($residente_id, $visita_id),
        ]);
    }

    /**
     * Creates a new ResidenteVisita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResidenteVisita();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'residente_id' => $model->residente_id, 'visita_id' => $model->visita_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ResidenteVisita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $residente_id
     * @param integer $visita_id
     * @return mixed
     */
    public function actionUpdate($residente_id, $visita_id)
    {
        $model = $this->findModel($residente_id, $visita_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'residente_id' => $model->residente_id, 'visita_id' => $model->visita_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ResidenteVisita model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $residente_id
     * @param integer $visita_id
     * @return mixed
     */
    public function actionDelete($residente_id, $visita_id)
    {
        $this->findModel($residente_id, $visita_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ResidenteVisita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $residente_id
     * @param integer $visita_id
     * @return ResidenteVisita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($residente_id, $visita_id)
    {
        if (($model = ResidenteVisita::findOne(['residente_id' => $residente_id, 'visita_id' => $visita_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
