<?php

namespace app\controllers;

use app\models\Product;

use Codeception\Module\Yii1;
use Codeception\Module\Yii2;
use Yii;
use yii\BaseYii;
use yii\db\Query;
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
           // return Yii::$app->test->run();//
        _end(app()->db->createCommand()->insert('evrnt_user',['username'=>'user', 'name'=>'Lena','surname'=>'Marina', 'password'=>'good','salt'=>'new'])->execute());
        _end(new Query())->select(['id','name'])->from('evrnt_user')->where(['id'=>1])->orderBy(['name'])->count();

     //   $model = new Product();
       // $model->id = 1;
     //   $model->name  = 'First';
      //  $model->category  = 'cat';
     //   $model->price  = '100';
     //   return $this->render('index', ['model'=>$model]);
    }
}
