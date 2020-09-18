<?php

namespace hw\output;

/**
 * 状态码与映射
 * Auth: hewei
 * Date:2020-09-16
 */
class StatusCode
{
    const SUCCESS   = 200;//成功状态码
    const ERROR     = 201;//失败状态码

    public static function mapping($code){
        $message = [
            self::SUCCESS   => '成功',
            self::ERROR     => '失败',
        ];
        return $message[$code] ?? $code;
    }
}
