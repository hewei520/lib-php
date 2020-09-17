<?php


namespace log;

use think\facade\Log as thinkLog;

/**
 * @file Log
 * @synopsis 日志类
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/16
 */
class Log
{
    const INFO      = 'info';
    const DEBUG     = 'debug';
    const ERROR     = 'error';
    const WARNING   = 'warning';
    const SQL       = 'sql';

    public static function info($message = "", $context = []){
        thinkLog::info(self::logStructure($message, $context));
    }

    public static function debug($message = "", $context = []){
        thinkLog::debug(self::logStructure($message, $context));
    }

    public static function error($message = "", $context = []){
        thinkLog::error(self::logStructure($message, $context));
    }

    public static function warning($message = "", $context = []){
        thinkLog::warning(self::logStructure($message, $context));
    }

    public static function sql($message = "", $context = []){
        thinkLog::sql(self::logStructure($message, $context));
    }

    public static function log($level, $message = "", $context = []){
        thinkLog::log($level,self::logStructure($message, $context));
    }

    /**
     * 统一日志结构
     * @synopsis messageJson
     * @returns
     */
    protected static function logStructure($message = "", $context = []){
        if(is_array($context)){
            $context = json_encode($context,JSON_UNESCAPED_UNICODE);
        }

        return $message . ' context: ' . $context;
    }
}