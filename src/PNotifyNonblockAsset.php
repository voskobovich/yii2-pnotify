<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyNonblockAsset
 * @package voskobovich\pnotify\widgets
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

        $this->depends[] = 'voskobovich\pnotify\widgets\PNotifyAsset';
    }
}