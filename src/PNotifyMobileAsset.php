<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyMobileAsset
 * @package voskobovich\pnotify\widgets
 */
class PNotifyMobileAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'pnotify.mobile.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.mobile.js'
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