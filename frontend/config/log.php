<?php
return [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'yii\log\EmailTarget',
            'levels' => ['error','info'],
            'categories' => ['email_log'],
            'message' => [
                'from' => ['zeopean@163.com'],
                'to' => ['1412512785@qq.com'],
                'subject' => 'Database errors at example.com',
            ],
        ],
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
        ],
    ],
];