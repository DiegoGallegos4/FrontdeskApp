<?php

namespace frontend\controllers;

use Yii;
use backend\models\Visita;
use backend\models\EventoVisita;
use backend\models\ResidenteVisita;
use frontend\controllers\VisitaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VisitaController implements the CRUD actions for Visita model.
 */
class VisitaController extends Controller
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
     * Lists all Visita models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VisitaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Visita model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        
        
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Visita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $Visita = new Visita();
        $EventoVisita = new EventoVisita();
        
        $Visita->tipo = 'Evento';

        if ($Visita->load(Yii::$app->request->post())){
            if($Visita->save()){
                $EventoVisita->load(Yii::$app->request->post());
                $EventoVisita->visita_id = $Visita->id;
                $EventoVisita->save();
                echo 1;
            }else{
                echo 0;
            }            
            //return $this->redirect(['view', 'id' => $Visita->id]);
        }else {
            return $this->renderAjax('create', [
                'model' => $Visita,
                'EventoVisita' => $EventoVisita,
            ]);
        }
    }
    
    public function actionCreateVres()
    {
        $Visita = new Visita();
        $ResidenteVisita = new ResidenteVisita();
        
        $Visita->tipo = 'Residente';

        if ($Visita->load(Yii::$app->request->post())) {
            if($Visita->save()){
                $ResidenteVisita->load(Yii::$app->request->post());
                $ResidenteVisita->visita_id = $Visita->id;
                $ResidenteVisita->save(); 
                echo 1;
            }else{
                echo 0;
            }
            //return $this->redirect(['view', 'id' => $Visita->id]);
        } else {
            return $this->renderAjax('create-vres', [
                'model' => $Visita,
                'ResidenteVisita' => $ResidenteVisita,
            ]);
        }
    }

    /**
     * Updates an existing Visita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $EventoVisita = EventoVisita::findOne(['visita_id' => $id]);
        $ResidenteVisita = ResidenteVisita::findOne(['visita_id' => $id]);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->tipo == 'Evento'){
                $EventoVisita->load(Yii::$app->request->post());
                if($EventoVisita->save()){
                    echo 1;
                }else{
                    echo 0;
                }
            }else{
                $ResidenteVisita->load(Yii::$app->request->post());
                if($ResidenteVisita->save()){
                    echo 1;
                }else{
                    echo 0;
                }
            }
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
                'EventoVisita' =>$EventoVisita,
                'ResidenteVisita' => $ResidenteVisita,
            ]);
        }
    }
    
    /**
     * Deletes an existing Visita model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Visita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Visita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Visita::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
