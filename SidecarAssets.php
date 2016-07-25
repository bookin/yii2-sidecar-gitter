<?php
namespace bookin\gitter;

use yii\web\AssetBundle;

class SidecarAssets extends AssetBundle
{
    public $jsOptions = [
        'async'=>'',
        'defer'=>'',
    ];
    public $js = [
        'https://sidecar.gitter.im/dist/sidecar.v1.js',
    ];

}