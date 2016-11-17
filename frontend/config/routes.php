<?php
return [
    'test.json' => 'demo/test',                 //未指定请求方式是，可以为如何方式，类似laravel 中的 any

    'POST api-post' => 'demo/post-test',        //POST 表示用post 方式请求， actionPostTest ==> post-test

    'get-demo/<id:\d+>' => 'demo/get-id',       //<id:\d+>  表示url中传递参数 id=??

    'GET get-flash' => 'demo/flash',

    'GET mail-send' => 'demo/mail-test',        //邮件发送测试

    'GET log-test'  => 'demo/log-test',

    'GET pjax-test' => 'demo/pjax-test',        //pjax 的使用
];