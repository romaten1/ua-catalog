<?php

namespace app\controllers;


use Yii;
use app\models\Email;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * EmailController implements the CRUD actions for Email model.
 */
class EmailController extends Controller
{

    /**
     * Creates a new Email model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Email();
        $model->email = Yii::$app->request->queryParams['email'];
        if ($model->save() ) {

            return $this->goHome();
        } else {
            return $this->goHome();
        }
    }

    /**
     * Finds the Email model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Email the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Email::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
