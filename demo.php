<?php
//自动加载，一般写到入口文件即可
require __DIR__ . '/vendor/autoload.php';

//普通输出接口调用示例，
//参数1：状态码
//参数2：内容
//参数3：自定义状态码说明
echo \hw\output\Output::result(
    \hw\output\StatusCode::SUCCESS,
    ['a' => 'b'],
    '自定义成功'
);

//成功输出接口调用示例，
//参数1：内容
echo \hw\output\Output::success(
    ['a' => 'b']
);

//失败输出接口调用示例，
//参数1：状态码
//参数2：内容
//参数3：自定义状态码说明
echo \hw\output\Output::error(
    \hw\output\StatusCode::ERROR,
    ['a' => 'b'],
    '自定义失败'
);

//日志调用,方法有：info、debug、error、warning、sql、log
\hw\log\Log::info('info日志');
