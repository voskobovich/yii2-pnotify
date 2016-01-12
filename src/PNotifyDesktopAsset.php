<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyDesktopAsset
 * @package voskobovich\pnotify\widgets
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

        $this->depends[] = 'voskobovich\pnotify\widgets\PNotifyAsset';
    }
}