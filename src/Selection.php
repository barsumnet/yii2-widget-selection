<?php

namespace bee\selection;

use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use kartik\form\ActiveForm;

//use yii\base\Model;

class Selection extends \yii\bootstrap\Widget {

    public function init() {
        \common\widgets\selection\SelectionAsset::register($this->getView());
        //\kartik\select2\Select2Asset::$bsCssMap
        parent::init();
    }

    public function run() {
        parent::run();
        ?>
        <!--        <div class="row">
                    <div class="col-lg-2">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p><span class="glyphicon glyphicon-shopping-cart"></span> <strong>Всего:</strong> 524</p>
                            <p><a>Оформить</a></p>
                        </div>
                    </div>          
                    <div class="col-lg-2">
                        <div class="alert alert-success">
                            <p><span class="glyphicon glyphicon-shopping-cart"></span> <strong>Подобрано:</strong> 24</p>
                            <p><a>Оформить</a></p>
                        </div>
                    </div> 
                </div>-->

        <?php
        echo Html::tag('div', $this->renderItems(), ['class' => 'row']);
        //echo Html::tag('div', $this->renderItems(), ['class' => 'row']);
    }

    protected function renderItems() {

        $session = Yii::$app->session;
        $session->open();

        if (!isset($_SESSION['select'])) {
            false;
        }
        return $session['select.qty'];


//        foreach ($not_saved as $key => $value) {
//            var_dump($key);
//            echo \yii\bootstrap\Alert::widget([
//                'body' => Html::a('Не сохранено', ['@backend/' . $key]),
//                //'closeButton' => $this->closeButton,
//                'closeButton' => $this->closeButton,
//                'options' => array_merge($this->options, [
//                    'id' => $this->getId(),
//                    'action' => $key,
//                    'class' => 'alert-danger col-lg-2 not-saved',
//                        // 'title' => $key,
//                ]),
//            ]);
//        }
    }

}
