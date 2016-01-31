<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyAnimateAsset
 * @package voskobovich\pnotify
 */
class PNotifyAnimateAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.animate.js'
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