<?php

namespace frontend\themes\hillter\assets;

use yii\web\AssetBundle;

class HillterAsset extends AssetBundle {
    public $sourcePath = '@frontend/themes/hillter/assets/template';
    public $css = [
        
    ];
    public $js = [
        
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];
    //public $publishOptions=['forceCopy'=>YII_DEBUG];
}
