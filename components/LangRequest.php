<?
namespace app\components;
// �� ��������� �������  app ������ frontend
// �� ��������� �������  app ������ frontend

use Yii;
use yii\web\Request;

class LangRequest extends Request {

    private $lang_arr = ['eng', 'ru', 'ua'];
    /*������� ������ ������, ��� �������� ���� �� ��,
     ��� �� ����� �� ���� �� ��������� �� ������������ ��������*/

    public function init() {
        parent::init();
//������� ����� ������ �����������

        if (isset(Yii::$app->request->cookies['lang'])) {
//���� ���� ����������
            $user_lang = Yii::$app->request->cookies->getValue('lang');
//�������� ���� ������������
            if (!in_array($user_lang, $this->lang_arr)) {
                /*���� � ������������ ��������
                 ��������� ���� - ���������� 404*/
                throw new NotFoundHttpException;
            }

            $code = $this->getCode($user_lang);
//�������� ��� �����,����� ���������� ���� ����
            Yii::$app->language = $user_lang;
//������������� ����
            Yii::$app->formatter->locale = $user_lang;
//������������� ������(��� ����������� ��� � �.�)
        } else {
//���� ���� �� ����������
            $language = $this->getBrowserLoc();
            // �������� ���� �� �������� ������������
            $language_code = $this->getCode($language);
            /* �������� ��� �����*/

            Yii::$app->language = $language_code;
//������������ ���� yii
            Yii::$app->formatter->locale = $language_code;
//������������� ������
        }
    }

    public function getCode($lang) {
        switch ($lang) {
            case 'ru':
                return "ru-RU";

            case 'eng':
                return "en-US";

            case 'ua':
                return "uk-UA";

            default :
                return "en-US";
        }
    }

    private function getBrowserLoc() {
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }
        else {
// ���� ����� �� ����������� ���������� ���� �� ���������
            return 'eng';
        }

    }

}