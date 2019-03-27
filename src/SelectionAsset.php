<?php

namespace bee\selection;

use yii\web\AssetBundle;

class SelectionAsset extends AssetBundle {

    // public $basePath = '@webroot/test';
    // public $baseUrl = '@web/assets';
   // public $sourcePath = '@app/assets';
   // public $sourcePath = '@webroot/common/widgets/selection/assets';
    // public $sourcePath = '@webroot/common/widgets/selection/assets';
    // public $sourcePath = '@webroot';
//    public $baseUrl = '@web';
    // public $sourcePath = '@yii/assets';
//    public $basePath = '@yii';
//    public $baseUrl = '@web';
//    public $css = [];
//    public $js = ['main.js'];
//    public $depends = [
//        'kartik\select2\Select2Asset'
//    ];
//    public $basePath = __DIR__ . '/assets';
    //public $baseUrl = '@web';
    public $css = [
            //'css/site.css',
    ];
    public $js = [
        //'js/jquery.cookie.js',
        //'js/js.cookie.js',
        'js/mas.js',
        'js/ma.js',
            //'js/main.js'
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];

    public function init() {
        var_dump($this->sourcePath);
        parent::init();
    }

//    public $depends = [
//            //    'yii\web\YiiAsset',
//            //  'yii\bootstrap\BootstrapAsset',
//    ];
//    public function init() {
//        $this->setSourcePath(__DIR__ . '/assets');
//        $this->setupAssets('js', ['js/main.js']);
//        parent::init();
//    }
//    public $depends = [
//        'yii\web\JqueryAsset',
//    ];
//    public function init() {
//        parent::init();
//        var_dump($this->baseUrl);
//        var_dump($this->basePath);
//    }
}
