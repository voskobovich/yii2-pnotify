<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyCallbacksAsset
 * @package voskobovich\pnotify
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

        $this->depends[] = 'voskobovich\pnotify\PNotifyAsset';
    }
}