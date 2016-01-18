<?php

namespace voskobovich\pnotify\widgets\helpers;

use voskobovich\pnotify\widgets\PNotify;
use Yii;
use yii\helpers\Json;


/**
 * Class PNotifyHelper
 * @package voskobovich\pnotify\widgets\helpers
 */
class PNotifyHelper
{
    /**
     * @param $text
     * @param null $title
     */
    public static function success($text, $title = null)
    {
        $flash = Json::encode(['title' => $title, 'text' => $text, 'type' => 'success']);
        Yii::$app->session->addFlash('pnotify:success', $flash);
    }

    /**
     * @param $text
     * @param null $title
     */
    public static function error($text, $title = null)
    {
        $flash = Json::encode(['title' => $title, 'text' => $text, 'type' => 'error']);
        Yii::$app->session->addFlash('pnotify:error', $flash);
    }

    /**
     * @param $text
     * @param null $title
     */
    public static function warning($text, $title = null)
    {
        $flash = Json::encode(['title' => $title, 'text' => $text, 'type' => 'warning']);
        Yii::$app->session->addFlash('pnotify:warning', $flash);
    }

    /**
     * @param $text
     * @param null $title
     */
    public static function info($text, $title = null)
    {
        $flash = Json::encode(['title' => $title, 'text' => $text, 'type' => 'info']);
        Yii::$app->session->addFlash('pnotify:info', $flash);
    }

    /**
     * @param array $clientOptions
     * @param array $depends
     */
    public static function showAll($clientOptions = [], $depends = [])
    {
        $items = Yii::$app->session->getAllFlashes();
        foreach ($items as $key => $json) {
            $data = Json::decode($json);
            $data['clientOptions'] = $clientOptions;
            $data['depends'] = $depends;
            PNotify::widget($data);
        }
    }
}