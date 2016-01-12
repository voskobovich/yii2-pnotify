<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyCallbacksAsset
 * @package voskobovich\pnotify\widgets
 */
class PNotifyCallbacksAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.callbacks.js'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->depends[] = 'voskobovich\pnotify\widgets\PNotifyAsset';
    }
}