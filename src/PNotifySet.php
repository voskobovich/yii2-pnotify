<?php

namespace voskobovich\pnotify\widgets;

use InvalidArgumentException;
use yii\base\Widget;


/**
 * Class PNotifySet
 * @package voskobovich\pnotify\widgets
 */
class PNotifySet extends Widget
{
    /**
     * Notification items
     * @var array|callable
     */
    public $items;

    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @var array list of bundle class names that this bundle depends on.
     */
    public $depends = [];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        if (!$this->items) {
            throw new InvalidArgumentException('Param "items" can not be empty.');
        }

        $this->registerClientScript();

        if ($this->items instanceof \Closure) {
            $this->items = call_user_func($this->items, $this);
        }
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        foreach ($this->items as $item) {
            $item['clientOptions'] = $this->clientOptions;
            echo PNotify::widget($item);
        }
    }

    /**
     * Registers the needed JavaScript.
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        foreach ($this->depends as $dep) {
            $view->registerAssetBundle($dep);
        }
    }
}