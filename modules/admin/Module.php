<?php

namespace app\modules\admin;

use Yii;
use yii\filters\AccessControl;

/**
 * Class Module
 * @package app\modules\admin
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public $layout = 'main.php';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'send-email'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->getUser()->getIdentity()->username === 'admin';
                        }
                    ],
                ],

            ],
        ];
    }

}
