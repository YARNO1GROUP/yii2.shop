<?php

namespace api\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';

    public function actions(){

        $action = parent::actions();

        unset($action['create'], $action['delete']);

        return $action;
    }
}