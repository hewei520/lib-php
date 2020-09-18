<?php


namespace xn\output;


/**
 * @file Output
 * @synopsis 输出标准类
 * @author hewei(hewei@xiniaogongkao.com)
 * @version 1.0.0
 * @date 2020/9/18
 */
class Output
{
    /**
     * 输出方法
     * @synopsis result
     * @param int $code 状态码
     * @param string $message 状态信息
     * @param $data
     * @returns string
     */
    protected function result($code = StatusCode::SUCCESS, $data = "", $message = ""){
        if(empty($message)){
            $message = StatusCode::mapping($code);
        }

        $info = [
            'code'      => $code,
            'message'   => $message,
            'data'      => $data
        ];
        return json_encode($info);
    }

    /**
     * 成功输出方法
     * @synopsis success
     * @param $data
     * @returns string
     */
    protected function success($data = ""){
        return $this->result(StatusCode::SUCCESS, StatusCode::mapping(StatusCode::SUCCESS), $data);
    }

    /**
     * 失败输出方法
     * @synopsis error
     * @param int $code 状态码
     * @param string $message 状态信息
     * @param $data
     * @returns string
     */
    protected function error($code = StatusCode::ERROR, $data = "", $message = ""){
        return $this->result($code, $message, $data);
    }
}