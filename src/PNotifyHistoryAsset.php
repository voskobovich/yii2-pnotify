<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyHistoryAsset
 * @package voskobovich\pnotify
 */
class PNotifyHistoryAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'pnotify.history.css'
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.history.js'
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