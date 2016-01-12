<?php

namespace voskobovich\pnotify\widgets;

use InvalidArgumentException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;


/**
 * Class PNotify
 * @package voskobovich\pnotify\widgets
 */
class PNotify extends Widget
{
    /**
     * Notification title
     * @var string
     */
    public $title;

    /**
     * Notification content
     * @var string
     */
    public $text;

    /**
     * Notification type
     * @var string
     */
    public $type;

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

        if (!$this->text) {
            throw new InvalidArgumentException('Param "text" can not be empty.');
        }
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->registerClientScript();

        $this->createNotification();
    }

    /**
     * Create notification
     */
    protected function createNotification()
    {
        $options = [
            'text' => $this->text
        ];

        if ($this->title) {
            $options['title'] = $this->title;
        }

        if ($this->type) {
            $options['type'] = $this->type;
        }

        $options = ArrayHelper::merge($this->clientOptions, $options);
        $options = Json::encode($options);
        $view = $this->getView();
        $view->registerJs("new PNotify({$options});");
    }

    /**
     * Registers the needed JavaScript.
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        PNotifyAsset::register($view);

        foreach ($this->depends as $dep) {
            $view->registerAssetBundle($dep);
        }
    }
}