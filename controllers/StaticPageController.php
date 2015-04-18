<?php

namespace app\controllers;

use app\models\search\StaticPageSearch;
use Yii;
use app\models\StaticPage;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaticPageController implements the CRUD actions for StaticPage model.
 */
class StaticPageController extends Controller
{

    /**
     * Displays a single StaticPage model.
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
     * Finds the StaticPage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StaticPage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StaticPage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
