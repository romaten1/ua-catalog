<?php

namespace app\controllers;

use app\models\search\ProductCategorySearch;
use app\models\search\ProductSearch;
use Yii;
use app\models\CategoryThird;
use app\models\search\CategoryThirdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryThirdController implements the CRUD actions for CategoryThird model.
 */
class CategoryThirdController extends Controller
{
    public $defaultAction = 'view';

    /**
     * Displays a single CategoryThird model.
     *
     * @param $id
     *
     * @internal param array|null $manufacturer
     *
     * @internal param $category_id
     *
     * @internal param int $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'category_id' => $id
        ]);
    }

    /**
     * Finds the CategoryThird model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CategoryThird the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CategoryThird::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
