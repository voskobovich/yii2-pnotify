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

        $this->registerClientScript();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->createNotification([
            'title' => $this->title,
            'text' => $this->text,
            'type' => $this->type,
        ]);
    }

    /**
     * Create notification
     * @param array $data
     */
    protected function createNotification($data)
    {
        $options = [];

        $text = ArrayHelper::getValue($data, 'text');
        if (!$text) {
            throw new InvalidArgumentException('Missing text param.');
        }
        $options['text'] = $text;

        $title = ArrayHelper::getValue($data, 'title');
        if ($title) {
            $options['title'] = $title;
        }

        $type = ArrayHelper::getValue($data, 'type');
        if ($type) {
            $options['type'] = $type;
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