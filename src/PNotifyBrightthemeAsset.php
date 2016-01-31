<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyBrightthemeAsset
 * @package voskobovich\pnotify
 */
class PNotifyBrightthemeAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'pnotify.brighttheme.css'
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