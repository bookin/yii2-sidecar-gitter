Yii2 widget - Sidecar Gitter.im
==========================
This yii2 extension is a wrapper for the [Sidecar Gitter.im](https://sidecar.gitter.im/)

[![Total Downloads](https://poser.pugx.org/bookin/yii2-sidecar-gitter/downloads)](https://packagist.org/packages/bookin/yii2-sidecar-gitter)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 

To install, either run

```
$ php composer.phar require bookin/yii2-sidecar-gitter "@dev"
```

or add

```
"bookin/yii2-sidecar-gitter": "@dev"
```

to the ```require``` section of your `composer.json` file.

## Usage

```php
bookin\gitter\Sidecar::widget([
    'clientOptions'=>[
        'room'=>'yiisoft/yii2/rus',
        ...
    ]
]);
```

