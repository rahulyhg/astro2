<?php
namespace app\components;
use yii\base\BootstrapInterface;
use Yii;
use app\models\Lang;


class LanguageSelector implements BootstrapInterface
{

    public function bootstrap($app)
    {

        if (isset($app->request->cookies['lang'])) {
            $user_lang = $app->request->cookies->getValue('lang');
        }else{
            $user_lang = Lang::getBrowserLoc();
        }
        $language_code = Yii::$app->params['supportLang'][$user_lang];


       $app->language=$language_code;
       $app->formatter->locale = $language_code;
        $app->params['lang']=$user_lang;
    }
}
?>