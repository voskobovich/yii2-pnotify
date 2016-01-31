<?php

namespace voskobovich\pnotify;

/**
 * Class PNotifyConfirmAsset
 * @package voskobovich\pnotify
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

        $this->depends[] = 'voskobovich\pnotify\PNotifyAsset';
    }
}