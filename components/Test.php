<?php
namespace app\components;

use yii\base\Component;

class Test extends Component {
    public $var;
    public function run(){
        return $this->var;
    }
}