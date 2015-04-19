<?php

namespace app\controllers;

use Yii;
use app\models\Collection;
use app\models\search\CollectionSearch;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CollectionController implements the CRUD actions for Collection model.
 */
class CollectionController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'create', 'delete'],
                        'roles' => ['@'],
                    ]
                ],
            ],
        ];
    }
    /**
     * Lists all Collection models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Collection::find()->where(['user_id' => Yii::$app->user->id])->all();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Collection model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Collection();
        $model->product_id = Yii::$app->request->queryParams['id'];
        $model->user_id = Yii::$app->user->id;
        $product_is = Collection::find()->where(['user_id' => $model->user_id, 'product_id' => $model->product_id ])->all();
        if($product_is){
            return $this->redirect(Yii::$app->request->referrer);
        }
        if ($model->save()) {
            return $this->redirect(Yii::$app->request->referrer);
        } else {
            return $this->redirect(Yii::$app->request->referrer );
        }
    }


    /**
     * Deletes an existing Collection model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

        $model = $this->findModel($id);
        if($model->user_id == Yii::$app->user->id){
            $model->delete();
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Collection model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Collection the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Collection::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
