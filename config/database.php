<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 数据库配置请在根目录下.env文件里修改，不要在这里修改，格式请参考官网文档。
$env_type = Env::get('env_type');
switch ($env_type) {
    case 'dev': // 开发模式
        $_db_conf_env = [
            'hostname' => Env::get('dev.database.hostname'),
            'database' => Env::get('dev.database.database'),
            'username' => Env::get('dev.database.username'),
            'password' => Env::get('dev.database.password'),
            'hostport' => Env::get('dev.database.hostport'),
        ];
        break;
    case 'prod': // 生产模式
        $_db_conf_env = [
            'hostname' => Env::get('prod.database.hostname'),
            'database' => Env::get('prod.database.database'),
            'username' => Env::get('prod.database.username'),
            'password' => Env::get('prod.database.password'),
            'hostport' => Env::get('prod.database.hostport'),
        ];
        break;
}

$_db_config_base = [
    // 数据库类型
    'type'            => 'mysql',
    // 服务器地址
    'hostname'        => '127.0.0.1',
    // 数据库名
    'database'        => 'tpvue',
    // 用户名
    'username'        => 'root',
    // 密码
    'password'        => 'root',
    // 端口
    'hostport'        => '3306',
    // 连接dsn
    'dsn'             => '',
    // 数据库连接参数
    'params'          => [],
    // 数据库编码默认采用utf8
    'charset'         => 'utf8',
    // 数据库表前缀
    'prefix'          => 'tpvue_',
    // 数据库调试模式
    'debug'           => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy'          => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate'     => false,
    // 读写分离后 主服务器数量
    'master_num'      => 1,
    // 指定从服务器序号
    'slave_no'        => '',
    // 自动读取主库数据
    'read_master'     => false,
    // 是否严格检查字段是否存在
    'fields_strict'   => true,
    // 数据集返回类型
    'resultset_type'  => 'array',
    // 自动写入时间戳字段
    'auto_timestamp'  => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain'     => false,
    // Builder类
    'builder'         => '',
    // Query类
    'query'           => '\\think\\db\\Query',
    // 是否需要断线重连
    'break_reconnect' => false,
    // 断线标识字符串
    'break_match_str' => [],
];

// 返回合并的配置
return array_merge(
    $_db_config_base,
    $_db_conf_env
);