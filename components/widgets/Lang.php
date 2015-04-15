<?php
namespace app\components\widgets;
use app\models\Lang as Langmodel;

/**
 * Class Lang
 * @package app\widgets
 */
class Lang extends \yii\bootstrap\Widget
{
    public function init(){}

    /**
     * @return string
     */
    public function run() {
        return $this->render('lang/view', [
            'current' => Langmodel::getCurrent(),
            'langs' => Langmodel::find()->all(),
        ]);
    }
}