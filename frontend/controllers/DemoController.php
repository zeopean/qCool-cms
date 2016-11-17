<?php
namespace frontend\controllers;

use frontend\models\User;
use Yii;
use yii\debug\models\search\Log;
use yii\helpers\Url;
use yii\log\EmailTarget;
use yii\web\Controller;


/**
 * Site controller
 */
class DemoController extends Controller{

    public  $enableCsrfValidation=false;

    //any www.yii2.com/test.json
    public function actionTest()
    {
        echo json_encode(['name'=>'zeopean']);
    }

    //post www.yii2.com/api-post
    public function actionPostTest()
    {
        echo json_encode(['name'=>'zeopean', 'method'=>'post']);

    }

    //any www.yii2.com/get-demo/12
    public function actionGetId()
    {
        $request = Yii::$app->request;
        $id = $request->get('id');
        echo json_encode(['id'=>$id]);
    }

    public function actionFlash()
    {
        $session = Yii::$app->session;

        $session->addFlash('name', 'zeopean , hello world');

        var_dump($session->getFlash('name'));
    }

    /**
     * ======================================================================
     * 测试邮件发送
     */
    public function actionMailTest()
    {
        $mail = Yii::$app->mailer->compose();
        $mail->setTo('1412512785@qq.com');
        $mail->setSubject('hello yii2 mailer');
        $mail->setTextBody('yii2 mailer');
        $mail->setHtmlBody('yii2 test');
        $mail->send();
    }


    /**
     * ======================================================================
     * 测试日志生成 - 发送邮件
     */
    public function actionLogTest()
    {
        Yii::info("logging info", 'email_log');
    }


    /**
     * ======================================================================
     * pjax 的使用
     */
    public function actionPjaxTest()
    {
        $app = Yii::$app;
        $url = Url::toRoute('demo/pjax-test');
        return $this->render('/site/demo/pjax',['url' => $url]);
    }

    /**
     * ======================================================================
     * 插入数据
     */
    public function actionInsertData()
    {
        $user = new User();
        $user->username = 'zeopean';
        'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
        $user
    }
}
