<?php

namespace app\modules\admin\controllers;

use app\helpers\FileHelper;
use Yii;
use app\modules\admin\models\Sliderup;
use app\modules\admin\models\search\SliderupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SliderUpController implements the CRUD actions for Sliderup model.
 */
class SliderUpController extends Controller
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
     * Lists all Sliderup models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SliderupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sliderup model.
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
     * Creates a new Sliderup model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sliderup();

        // Получаем массив данных по загружамых файлах
        if ($model->load( Yii::$app->request->post() )) {
            if (isset( $model->image )) {
                $model->image = UploadedFile::getInstance( $model, 'image' );
            }
            $model = FileHelper::makeImage($model, 'slider-up', null, 1200, 95);
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
     * Updates an existing Sliderup model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_image = $model->image;
        if ($model->load( Yii::$app->request->post() )) {
            if (isset( $model->image )) {
                $model->image = UploadedFile::getInstance( $model, 'image' );
            }
            $model = FileHelper::makeImage($model, 'slider-up', $old_image, 1200, 95);
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
     * Deletes an existing Sliderup model.
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
     * Finds the Sliderup model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sliderup the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sliderup::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
