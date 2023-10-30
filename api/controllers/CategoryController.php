<?php

namespace api\controllers;

use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = 'common\models\category';

    public function actions(){

        $action = parent::actions();

        unset($action['create'], $action['delete']);

        return $action;
}

}
