<?php
header('Content-Type: text/html; charset=UTF-8');
require_once($_SERVER['DOCUMENT_ROOT'] . '/shiplang/db.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/shiplang/lang.php');
class NbHtml {
    public function api_test(){
        $a = Db::input('mail', 'aa');//可接收post get 等
        if(empty($a)) {
            Db::return_json_exit(['code' => -400, 'msg' => '缺少a参数']);
        }
        
        $a = $a . '你好：ShipLang.com，这条信息是由后端api返回';
        Db::return_json_exit(['code' => 200, 'msg' => $a],['msg']);//测试返回，[msg]代表这个需要被翻译
        //https://langany.com/zh/docs/test 打开返回：9723331@gmail.com你好：ShipLang.com，这条信息是由后端api返回
        //https://langany.com/en/docs/test 打开返回：Hello 9723331@gmail.com: ShipLang.com, this message was returned by the backend API.
        
        
        /***
         * 数据库操作：
         * try {
            $exist = Db::query("SELECT id FROM `user` WHERE a = ? LIMIT 1", [$a]);
            if(!empty($exist)) {
                Db::execute("UPDATE `user` SET last_time = ?, count = count + 1 WHERE a = ?", [time(), $a]);
            } else {
                Db::execute("INSERT INTO `user` (a, create_time, last_time, count) VALUES (?, ?, ?, 1)", [$a, time(), time()]);
            }
            Db::return_json_exit(['code' => 200, 'msg' => 'ok']);
        } catch(Exception $e) {
            Db::return_json_exit(['code' => $e->getCode() ?: -500, 'msg' => '记录失败: ' . $e->getMessage()]);
        }**/
        
        
        
        
    }
}