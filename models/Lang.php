<?
namespace app\models;

class Lang
{


    public static function getBrowserLoc()
    {
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
             return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        } else {
             return 'eng';
        }

    }

}