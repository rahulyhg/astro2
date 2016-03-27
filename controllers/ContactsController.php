<?php

namespace app\controllers;
use app\models\Contacts;

class ContactsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Contacts();
        if ($model->load(\Yii::$app->request->post()) && $model->contact(\Yii::$app->params['adminEmail'])) {
            \Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
