<?php

namespace frontend\controllers;

use Yii;
use backend\models\Residente;
use frontend\controllers\ResidenteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * ResidenteController implements the CRUD actions for Residente model.
 */
class ResidenteController extends Controller
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
     * Lists all Residente models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ResidenteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Residente model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model=$this->findModel($id);
        $telefonos= new TelefonoSearch();
        $emails = new EmailSearch();
        $parqueos = new ParqueoSearch();
        $bodegas = new BodegaSearch();
        $condominios = new CondominioSearch();
        $empleadosResidente = new EmpleadoResidenteSearch();
        $familiares = new FamiliarSearch();
        $paquetes = new PaqueteSearch();
        $eventos = new EventoSearch();
        $llamadas = new LlamadaSearch();
        
        $allPaquetes = $paquetes->search(null);
        $allPaquetes->query->andWhere(['residente_id' => $model->id]);
        
        $allEventos = $eventos->search(null);
        $allEventos->query->andWhere(['residente_id' => $model->id]);
        
        $allLlamadas = $llamadas->search(null);
        $allLlamadas->query->andWhere(['residente_id' => $model->id]);
        
        $allFamiliares = $familiares->search(null);
        $allFamiliares->query->andWhere(['residente_id' => $model->id]);
        
        $allEsR = $empleadosResidente->search(null);
        $allEsR->query->andWhere(['residente_id' => $model->id]);
        
        $allCondominios = $condominios->search(null);
        $allCondominios->query->andWhere(['residente_id' => $model->id]);
        
        $allBodegas = $bodegas->search(null);
        $allBodegas->query->andWhere(['residente_id' => $model->id]);
        
        $allParqueos = $parqueos->search(null);
        $allParqueos->query->andWhere(['residente_id' => $model->id]);
        
        
        $allEmails = $emails->search(null);
        $allEmails->query->andWhere(['residente_id' => $model->id]);
        
        $allTelefonos=$telefonos->search(null);
        $allTelefonos->query->andWhere(['residente_id'=>$model->id]);
        
        return $this->render('view', [
            'model' => $model,
            'telefonos'=>$allTelefonos,
            'emails' => $allEmails,
            'parqueos' => $allParqueos,
            'bodegas' => $allBodegas,
            'condominios' => $allCondominios,
            'empleadosResidentes' => $allEsR,
            'familiares' => $allFamiliares,
            'paquetes' => $allPaquetes,
            'eventos' => $allEventos,
            'llamadas' => $allLlamadas,
        ]);
    }

    /**
     * Creates a new Residente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Residente();
        
        if ($model->load(Yii::$app->request->post())){
            $model->nombre_completo = $model->nombre.' '.$model->apellido;
            //return $this->redirect(['view', 'id' => $model->id]);
            if($model->save()){
                echo 1;
            }else{
                echo 2;
            }
            
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Residente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->nombre_completo = $model->nombre.' '.$model->apellido;
            if($model->save()){
                echo 1;
            }else{
                echo 0;
            }
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Residente model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    
    public function actionCalendar(){
        return $this->render('calendar');
    }
    
    public function actionJsonBirthday(){
        $birthdays = Residente::find()->all();
        $bdays = array();
        foreach ($birthdays as $bday) {
            $birthday = new \yii2fullcalendar\models\Event();
            $birthday->id = $bday->id;
            $birthday->title = $bday->nombre_completo;
            $birthday->start = date('Y-m-d\TH:i:s\Z',strtotime($bday->fecha_nacimiento));
            $birthday->end = date('Y-m-d\TH:m:i\Z',strtotime($bday->fecha_nacimiento));
            $bdays[] = $birthday;
        }
        
        header('Content-type: application/json');
        echo Json::encode($bdays);
    }   
    
    /**
     * Finds the Residente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Residente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Residente::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
