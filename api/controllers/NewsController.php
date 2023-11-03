<?php

namespace api\controllers;

use yii\rest\ActiveController;

class NewsController extends ActiveController
{
    public $modelClass = 'common\models\News';

    public function actions(){

        $action = parent::actions();

        unset($action['create'], $action['delete']);

        return $action;
    }
}