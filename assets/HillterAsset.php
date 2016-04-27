<?php

namespace sheillendra\hillter\assets;

use yii\web\AssetBundle;

class HillterAsset extends AssetBundle {
    public $sourcePath = '@sheillendra/hillter/assets/template';
    public $css = [
        'css/lib/bootstrap.min.css',
        'css/lib/font-hilltericon.css',
        'css/lib/owl.carousel.css',
        'css/lib/magnific-popup.css',
        'css/lib/settings.css',
        'css/lib/bootstrap-select.min.css',
        'css/style.css',
        'css/custom.css',
    ];
    public $js = [
        'js/lib/bootstrap.min.js',
        'js/lib/bootstrap-select.js',
        'js/lib/owl.carousel.js',
        'js/lib/jquery.magnific-popup.min.js',
        'js/lib/jquery.validate.min.js',
        'js/lib/jquery.parallax-1.1.3.js',
        'js/lib/isotope.pkgd.min.js',
        'js/scripts.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'sheillendra\hillter\assets\JqueryUIAsset',
        //'sersid\owlcarousel\Asset',
        //'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\YiiAsset',
        'sheillendra\hillter\assets\FontAwesomeAsset',
    ];
    //public $publishOptions=['forceCopy'=>YII_DEBUG];
}
