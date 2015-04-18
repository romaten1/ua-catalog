<?php

namespace app\modules\admin\controllers;

use app\helpers\FileHelper;
use app\modules\admin\models\search\ProductSearch;
use Yii;
use app\models\Product;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * @return array
     */
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        // Получаем массив данных по загружамых файлах
        if ($model->load( Yii::$app->request->post() )) {
            if (isset( $model->image )) {
                $model->image = UploadedFile::getInstance( $model, 'image' );
            }
            $model = FileHelper::makeImage($model, 'product', null, 625, 139);
            if ($model->validate() && $model->save(false)) {
                return $this->redirect( [ 'view', 'id' => $model->id ] );
            } else {
                throw new NotFoundHttpException( 'Не удалось загрузить данные' );
            }
        } else {
            return $this->render( 'create', [
                'model' => $model,
            ] );
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model     = $this->findModel( $id );
        $old_image = $model->image;
        if ($model->load( Yii::$app->request->post() )) {
            if (isset( $model->image )) {
                $model->image = UploadedFile::getInstance( $model, 'image' );
            }
            $model = FileHelper::makeImage($model, 'product', $old_image, 625, 500);
            if ($model->validate() && $model->save()) {
                return $this->redirect( [ 'view', 'id' => $model->id ] );
            } else {
                throw new NotFoundHttpException( 'Не удалось загрузить данные' );
            }
        } else {
            return $this->render( 'update', [
                'model' => $model,
            ] );
        }
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
