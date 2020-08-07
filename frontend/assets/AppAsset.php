<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'assets/vendor/bootstrap/css/bootstrap.min.css',
        'assets/vendor/icofont/icofont.min.css',
        'assets/vendor/boxicons/css/boxicons.min.css',
        'assets/vendor/venobox/venobox.css',
        'assets/vendor/animate.css/animate.min.css',
        'assets/vendor/remixicon/remixicon.css',
        'assets/vendor/owl.carousel/assets/owl.carousel.min.css',
        'assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
        'assets/css/style.css',
    ];
    public $js = [
        'assets/vendor/jquery.easing/jquery.easing.min.js',
        'assets/vendor/php-email-form/validate.js',
        'assets/vendor/venobox/venobox.min.js',
        'assets/vendor/waypoints/jquery.waypoints.min.js',
        'assets/vendor/counterup/counterup.min.js',
        'assets/vendor/owl.carousel/owl.carousel.min.js',
        'assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
