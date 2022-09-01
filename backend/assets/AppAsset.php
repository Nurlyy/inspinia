<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'font-awesome/css/font-awesome.css',
        'css/plugins/toastr/toastr.min.css',
        'js/plugins/gritter/jquery.gritter.css',
        'css/animate.css',
        'font-awesome/css/font-awesome.css',
        'css/plugins/iCheck/custom.css',
        'css/plugins/summernote/summernote-bs4.css',
        'css/plugins/datapicker/datepicker3.css',
        'css/plugins/footable/footable.core.css',
    ];
    public $js = [
        
        "js/jquery-3.1.1.min.js",
        "js/popper.min.js",
        "js/bootstrap.js",
        "js/plugins/metisMenu/jquery.metisMenu.js",
        "js/plugins/slimscroll/jquery.slimscroll.min.js",
        "js/plugins/flot/jquery.flot.js",
        "js/plugins/flot/jquery.flot.tooltip.min.js",
        "js/plugins/flot/jquery.flot.spline.js",
        "js/plugins/flot/jquery.flot.resize.js",
        "js/plugins/flot/jquery.flot.pie.js",
        "js/plugins/peity/jquery.peity.min.js",
        "js/demo/peity-demo.js",
        "js/inspinia.js",
        "js/plugins/pace/pace.min.js",
        "js/plugins/jquery-ui/jquery-ui.min.js",
        "js/plugins/gritter/jquery.gritter.min.js",
        "js/plugins/sparkline/jquery.sparkline.min.js",
        "js/demo/sparkline-demo.js",
        "js/plugins/chartJs/Chart.min.js",
        "js/plugins/toastr/toastr.min.js",
        "js/plugins/iCheck/icheck.min.js",
        "js/plugins/rickshaw/rickshaw.min.js",
        "js/plugins/summernote/summernote-bs4.js",
        "js/plugins/touchpunch/jquery.ui.touch-punch.min.js",
        "js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js",
        "js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
        "js/plugins/datapicker/bootstrap-datepicker.js",
        "js/plugins/footable/footable.all.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
