<?php

namespace app\controllers;

use app\models\Product;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class TestController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $model = new Product();
        $model->id = 1;
        $model->name  = 'First';
        $model->category  = 'cat';
        $model->price  = '100';
        return $this->render('index', ['model'=>$model]);
    }
}
