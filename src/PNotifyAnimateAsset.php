<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyAnimateAsset
 * @package voskobovich\pnotify\widgets
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

        $this->depends[] = 'voskobovich\pnotify\widgets\PNotifyAsset';
    }
}