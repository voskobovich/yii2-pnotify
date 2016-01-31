<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyAnimateAsset
 * @package voskobovich\pnotify
 */
abstract class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/pnotify/dist';

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}