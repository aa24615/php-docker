<?php
/**
 * 配置文件 注释掉则不会构建
 *
 * @author 读心印 <aa24615@qq.com>
 */
return [
    //仓库 可配置多个,多个仓库时将会同时推送
    'docker' =>[
       [
           //地址
           'registry' => '',
           //用户名
           'username' => '',
           //密码
           'password' => '',
       ]
    ],
    //版本号 基于2024-12-26最新版本
    'version' => [

        //5.x 5.3之前版本没有官方镜像
        '5.3.29',
        '5.4.45',
        '5.5.38',
        '5.6.40',

        //7.x
        '7.0.33',
        '7.1.33',
        '7.2.34',
        '7.3.33',
        '7.4.33',

        //8.x
        '8.0.30',
        '8.1.30',
        '8.2.26',
        '8.3.14',
        '8.4.2',
    ],
    //cli版本
    'cli' => [
        'cli', //cli基础版本
        'cli-cron', //cli+crontab版本
        'cli-supervisord', //cli+supervisord版本
    ],
    //fpm版本
    'fpm' => [
        'fpm', //fpm基础版本
        'fpm-nginx', //fpm+nginx版本
    ]
];