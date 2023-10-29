<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class OlogAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'olog/main.css',
        'css/site.css',
    ];
    public $js = [
        "olog/js/jquery.min.js",
        "olog/js/bootstrap.min.js",
        "olog/scss/vendors/plugin/js/slick.min.js",
        "olog/scss/vendors/plugin/js/jquery.nice-select.min.js",
        "olog/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
