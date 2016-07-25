<?php
namespace bookin\gitter;


use yii\base\ErrorException;
use yii\bootstrap\Widget;
use yii\helpers\Json;

/**
 * Class Sidecar
 * @package bookin\gitter
 *
 * @property array $clientOptions Options for element https://sidecar.gitter.im/#options
 */
class Sidecar extends Widget
{
    public $clientOptions = [];

    public function init(){
        if(!isset($this->clientOptions['room'])){
            throw new ErrorException('Need set room name to Sidecar::widget()');
        }
        parent::init();
    }

    public function run(){
        SidecarAssets::register($this->getView());
        $this->showScript();
    }

    public function showScript(){
        $config = Json::encode($this->clientOptions);
        $js = '((window.gitter = {}).chat = {}).options = '.$config.';';
        $this->getView()->registerJs($js);
    }

}