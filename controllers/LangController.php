<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

use app\models\Lang;

class LangController extends Controller
{


    public function actionSet($lang = 'eng')
    {


        if (!array_key_exists($lang, Yii::$app->params['supportLang'])) {
            throw new NotFoundHttpException;
        }

        if (isset(Yii::$app->request->cookies['lang'])) {
            Yii::$app->response->cookies->remove('lang');
        }

        Yii::$app->response->cookies->add(new \yii\web\Cookie([
            'name' => 'lang',
            'value' => $lang
        ]));

        Yii::$app->language = Yii::$app->params['supportLang'][$lang];
        Yii::$app->formatter->locale = Yii::$app->params['supportLang'][$lang];

        return $this->redirect(Yii::$app->request->referrer);

    }

}