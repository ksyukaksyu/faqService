<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * StopwordsController implements the CRUD actions for Stopword model.
 */
class BaseController extends Controller
{
    protected function log($message) {
        Yii::info($message, 'faq_app');
    }
}
