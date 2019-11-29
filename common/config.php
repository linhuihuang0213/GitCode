<?php
return [
    // 数据库连接配置
    'DB_CONNECT' => [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'dbname' => 'lhh_data',
        'port' => '3306'
    ],
    // 数据库字符集
    'DB_CHARSET' => 'utf8',
    // 项目的数据库表前缀
    'DB_PREFIX' => 'lhh_',
    // 自动登录 加密Cookie的密钥
    'AUTOLOGIN_SERCET' => 'df9jEn3HdpSoe',
    // 自动登录 默认保存时间（30天）
    'AUTOLOGIN_EXPIRES' => 3600 * 24 * 30,
    // 允许的图片扩展名（小写）
    'PICTURE_EXT' => ['jpg', 'jpeg', 'png', 'gif', 'bmp'],
    // 网页标题
    'APP_TITLE' => '程序员之家-做最专业IT论坛',
    // 顶部导航
    'APP_NAV' => ['hot' => '推荐文章', 'new' => '最新发表', 'pic' => '图片浏览', 'text' => '经验文章', 'video' => '教学视频'],
    // 每页显示内容数
    'APP_PAGESIZE' => 5,
    // 每页显示评论数
    'APP_REPLY_PAGESIZE' => 5,
    // 每个内容允许的附件最大数量
    'APP_ATTACHMENT_MAX' => 10,
    // Flash视频域名白名单
    'APP_VIDEO_ALLOW' => [
        'player.youku.com',         // 优酷
        'www.tudou.com',            // 土豆
        'imgcache.qq.com',          // 腾讯
        'player.video.qiyi.com',    // 爱奇艺
        'share.vrs.sohu.com',       // 搜狐
        'cdn.aixifan.com',          // AcFun
        'static.hdslb.com',         // bilibili
    ]
];