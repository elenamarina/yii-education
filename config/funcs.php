<?php

function _log($data) {
    \Yii::getLogger()->log(\yii\helpers\VarDumper::dumpAsString($data,5), \yii\log\Logger::LEVEL_INFO, '_');
}

function _end($data){
    echo \yii\helpers\VarDumper::dumpAsString($data, 5, true);
    exit();
}

/**
 * @return \yii\console\Application|\yii\web\Application*
 */
function app(){
    return \Yii::$app;
}