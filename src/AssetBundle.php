<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyAnimateAsset
 * @package voskobovich\pnotify\widgets
 */
abstract class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/pnotify/dist';
}