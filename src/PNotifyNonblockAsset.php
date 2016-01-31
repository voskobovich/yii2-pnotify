<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyNonblockAsset
 * @package voskobovich\pnotify
 */
class PNotifyNonblockAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.nonblock.js'
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