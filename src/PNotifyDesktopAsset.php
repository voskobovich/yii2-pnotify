<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyDesktopAsset
 * @package voskobovich\pnotify
 */
class PNotifyDesktopAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.desktop.js'
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