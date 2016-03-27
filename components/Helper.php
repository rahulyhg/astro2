<?php
namespace app\components;

use Yii;


class Helper
{
    //Тут будут свои функции

    //функция для меню
    public static function classActivePath($path)
    {

        if(stristr(Yii::$app->request->getPathInfo(),$path)) {
            return  ' active ';
        }
    }


}

?>