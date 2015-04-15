<?php

namespace app\modules\admin\controllers;

use app\helpers\TransliterateHelper;
use Yii;
use app\models\Post;
use app\models\Postsearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Imagine\Image\Box;
use Imagine\Image\Point;
use Imagine\Gd\Imagine;
use Imagine\Image\ImageInterface;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
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
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Postsearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
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
     * Create a new post model
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionCreate()
    {
        $model = new Post();
        // Получаем массив данных по загружамых файлах
        if ($model->load( Yii::$app->request->post() )) {
            if (isset( $model->image )) {
                $model->image = UploadedFile::getInstance( $model, 'image' );
            }
            $model->author_id   = Yii::$app->user->id;
            if (isset( $model->image )) {
                $image_name      = Yii::$app->getSecurity()->generateRandomString( 5 )
                                   . '_' . substr( TransliterateHelper::cyrillicToLatin( $model->title ), 0, 7 );
                $image_full_name = $image_name . '.' . $model->image->extension;
                $model->image->saveAs( Yii::getAlias( '@webroot/uploads/post/' . $image_full_name ) );
                $model->image = $image_full_name;
                //Make a thumbnails
                $path_from = Yii::getAlias( '@webroot/uploads/post/' . $image_full_name );
                $path_to   = Yii::getAlias( '@webroot/uploads/post/thumbs/thumb_' ) . $image_full_name;
                $this->makeImage( $path_from, $path_to, $desired_width = 275 );
                //Make an image
                $path_from = Yii::getAlias( '@webroot/uploads/post/' . $image_full_name );
                $path_to   = Yii::getAlias( '@webroot/uploads/post/' ) . $image_full_name;
                $this->makeImage( $path_from, $path_to, $desired_width = 900 );
            } else {
                $model->image = false;
            }
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
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
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
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * @param $path_from
     * @param $path_to
     * @param $desired_width
     */
    protected function makeImage( $path_from, $path_to, $desired_width )
    {
        $imagine       = new Imagine();
        $image         = $imagine->open( $path_from );
        $image_size    = $image->getSize();
        $image_height  = $image_size->getHeight();
        $image_width   = $image_size->getWidth();
        $ratio         = $image_width / $desired_width;
        $resizedHeight = $image_height / $ratio;
        $resizedWidth  = $image_width / $ratio;
        $resized_image = $image->resize( new Box( $resizedWidth, $resizedHeight ) );
        $options       = [
            'resolution-units' => ImageInterface::RESOLUTION_PIXELSPERINCH,
            'resolution-x'     => 275,
            'flatten'          => false
        ];
        $resized_image->save( $path_to, $options );
    }
}
