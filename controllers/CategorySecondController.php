<?php

namespace app\controllers;

use Yii;
use app\models\CategorySecond;
use app\models\search\CategorySecondSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategorySecondController implements the CRUD actions for CategorySecond model.
 */
class CategorySecondController extends Controller
{
    public $defaultAction = 'view';


    /**
     * Displays a single CategorySecond model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'category_id' => $id
        ]);
    }
    /**
     * Finds the CategorySecond model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CategorySecond the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CategorySecond::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
