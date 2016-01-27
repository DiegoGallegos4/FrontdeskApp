<?php

namespace frontend\controllers;

use Yii;
use backend\models\EventoVisita;
use frontend\controllers\EventoVisitaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EventoVisitaController implements the CRUD actions for EventoVisita model.
 */
class EventoVisitaController extends Controller
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
     * Lists all EventoVisita models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventoVisitaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EventoVisita model.
     * @param integer $evento_id
     * @param integer $visita_id
     * @return mixed
     */
    public function actionView($evento_id, $visita_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($evento_id, $visita_id),
        ]);
    }

    /**
     * Creates a new EventoVisita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EventoVisita();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_id' => $model->evento_id, 'visita_id' => $model->visita_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EventoVisita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $evento_id
     * @param integer $visita_id
     * @return mixed
     */
    public function actionUpdate($evento_id, $visita_id)
    {
        $model = $this->findModel($evento_id, $visita_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_id' => $model->evento_id, 'visita_id' => $model->visita_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EventoVisita model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $evento_id
     * @param integer $visita_id
     * @return mixed
     */
    public function actionDelete($evento_id, $visita_id)
    {
        $this->findModel($evento_id, $visita_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EventoVisita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $evento_id
     * @param integer $visita_id
     * @return EventoVisita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($evento_id, $visita_id)
    {
        if (($model = EventoVisita::findOne(['evento_id' => $evento_id, 'visita_id' => $visita_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
