<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'mailer'    => require(__DIR__.'/mail.php'),
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require(__DIR__.'/routes.php')

        ],
        'log'   => require(__DIR__.'/log.php'),

        'assetManager' => [
//            'linkAssets' => true,
            'hashCallback' => function ($path) {

                if (!function_exists('_myhash_')) {
                    function _myhash_($path) {
                        if (is_dir($path)) {
                            $handle = opendir($path);
                            $hash = '';
                            while (false !== ($entry = readdir($handle))) {
                                if ($entry === '.' || $entry === '..') {
                                    continue;
                                }
                                $entry = $path . '/' . $entry;
                                $hash .= _myhash_($entry);
                            }
                            $result = sprintf('%x', crc32($hash . Yii::getVersion()));
                        } else {
                            $result = sprintf('%x', crc32(filemtime($path) . Yii::getVersion()));
                        }
                        return $result;
                    }
                }

                return _myhash_($path);
            }
        ],

        'db' => require(__DIR__.'/db.php'), //数据库配置文件

    ],

    'params' => $params,

    //启用gii
    'modules' => [
        'gii' => [
//            'class' => 'yii\gii\Module',
//            'allowedIPs' => ['127.0.0.1', '::1', '192.168.11.10'],
//            'password' => '123456'
        ],
    ],


];

