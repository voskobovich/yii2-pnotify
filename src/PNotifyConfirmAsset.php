<?php

namespace voskobovich\pnotify\widgets;

/**
 * Class PNotifyConfirmAsset
 * @package voskobovich\pnotify\widgets
 */
class PNotifyConfirmAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = [
        'pnotify.confirm.js'
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