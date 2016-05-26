<?php

namespace common\log;

use Yii;
use yii\log\FileTarget;

/**
 * Custom Application Logger.
 */
class AppTarget extends FileTarget
{
    /**
     * Reformat message
     *
     * @param array $message
     * @return string
     */
    public function formatMessage($message)
    {
        list($text, $level, $category, $timestamp) = $message;

        $userName = Yii::$app->user->identity ? Yii::$app->user->identity->username : '-';

        $timestamp = date('Y-m-d H:i:s', $timestamp);

        return "[$timestamp] $userName $text";
    }
}
