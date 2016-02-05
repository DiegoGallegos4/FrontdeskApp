<?php

namespace frontend\controllers;

use Yii;
use backend\models\Paquete;
use frontend\controllers\PaqueteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * PaqueteController implements the CRUD actions for Paquete model.
 */
class PaqueteController extends Controller
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
     * Lists all Paquete models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PaqueteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Paquete model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Paquete model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Paquete();
        $model->setScenario('update');
        
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                echo 1;
            }else{
                echo 0;
            }
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Paquete model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if(Yii::$app->request->post('firma') != NULL){
            $model->setScenario('signature');
            $data_pieces = explode(',',Yii::$app->request->post('firma'));
            $model->firma = $data_pieces[1];
            //$decoded_image = \base64_decode($encoded_image);
            if($model->save()){               
                echo 1;
            }else{
                echo 0;
            }
        }else{      
            $model->setScenario('update');
            if ($model->load(Yii::$app->request->post())){
                if($model->save()){               
                    echo 1;
                }else{
                    echo 0;
                }
            } else {
                return $this->renderAjax('update', [
                    'model' => $model,
                    
                ]);
            }
        }
    }
    
    

    /**
     * Deletes an existing Paquete model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
    public function actionSignature($id){
        $model = $this->findModel($id);
        $response = \Yii::$app->getResponse();
        $response->headers->set('Content-Type','image/png');
        
        return $this->renderAjax('signature',['model' => $model]);
    }
    
    /**
     * Finds the Paquete model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Paquete the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Paquete::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
