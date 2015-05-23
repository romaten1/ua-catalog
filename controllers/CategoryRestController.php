<?php
namespace app\controllers;

use yii\rest\ActiveController;

/**
 * Class UserController
 * @package app\controllers *
 */
class CategoryRestController extends ActiveController
{
    public $modelClass = 'app\models\rest\Category';
}