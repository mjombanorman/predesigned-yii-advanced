<?php

/*
 *  This code is written by mjomban des&dev
 * Restrictions are limited to the license specified in the License.txt file
 * The deveper in the making.
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class ThemeAssets extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/chartist.min.css',
        'css/chartist-plugin-tooltip.css',
        'css/animate.css',
        'css/style.css',
        'css/colors/black-dark.css',
        'css/font-awesome.min.css',
        'css/spinner.css',
        'css/simple-line-icons.css'];
    public $js = [
        'js/jquery_005.js ',
        'js/bootstrap.js ',
        'js/jquery_006.js ',
        'js/waves.js ',
        'js/sidebarmenu.js ',
        'js/custom.js ',
        'js/chartist.js ',
        'js/chartist-plugin-tooltip.js ',
        'jsjquery_004.js ',
        'js/jquery_002.js ',
        'js/jquery_003.js ',
        'js/jquery.js ',
        'js/db1.js ',
        'js/jQuery.js',
        'js/jquery.knob.js',
        'js/jquery.sparkline.min.js',
        'js/jQuery.style.switcher.js',
        'js/jquery.slimscroll.js',];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];

}
