<?php

namespace sheillendra\hillter\assets;

use yii\web\AssetBundle;

class HillterAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/hillter/assets/template';
    public $css = [
        'css/style.css',
        'css/custom.css',
    ];
    public $js = [
        'js/scripts.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\YiiAsset',
        'sheillendra\hillter\assets\FontAwesomeAsset',
    ];
    //public $publishOptions=['forceCopy'=>YII_DEBUG];
}
