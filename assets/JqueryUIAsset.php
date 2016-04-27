<?php

namespace sheillendra\hillter\assets;

use Yii;
use yii\web\AssetBundle;

class JqueryUIAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-ui';
    public $css = [
        'themes/base/jquery-ui.min.css'
    ];
    public $js = [
        'jquery-ui.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
