<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyButtonsAsset
 * @package voskobovich\pnotify\widgets
 */
class PNotifyButtonsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'pnotify.buttons.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.buttons.js'
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