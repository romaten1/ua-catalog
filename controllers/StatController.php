<?php
namespace app\controllers;

use yii\rest\ActiveController;

/**
 * Class UserController
 * @package app\controllers *
 */
class StatController extends ActiveController
{
    public $modelClass = 'app\models\StaticPage';
}