<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyBrightthemeAsset
 * @package voskobovich\pnotify\widgets
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

        $this->depends[] = 'voskobovich\pnotify\widgets\PNotifyAsset';
    }
}