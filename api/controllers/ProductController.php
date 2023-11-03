<?php

namespace api\controllers;

use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $modelClass = 'common\models\Product';

    public function actions(){

        $action = parent::actions();

        unset($action['create'], $action['delete']);

        return $action;
    }
}