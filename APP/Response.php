<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/2
 * Time: 15:47
 */

class ApiResponse
{
    /**
     * @desc json格式输出通信数据
     * @param int $code 状态码
     * @param string $message 提示信息
     * @param array $data 数据
     * return mixed
     */

    public function json($code,$message='',$data=array())
    {
        if(! is_numeric($code)){
            return '';
        }
        $result = array(
            'code'     =>  $code,
            'message'  =>  $message,
            'data'     =>  $data,
        );
        return json_encode($result);
    }











}