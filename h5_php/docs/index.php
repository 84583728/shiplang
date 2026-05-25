<?php
header('Content-Type: text/html; charset=UTF-8');
require_once($_SERVER['DOCUMENT_ROOT'] . '/shiplang/db.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/shiplang/lang.php');

class NbHtml {
    public function index() {
        $qx_current_language = Db::input('qx_current_language');
        $qx_route_path = Db::input('qx_route_path');
        $qx_page_filename = Db::input('qx_page_filename');
        $qx_route_without_lang = Db::input('qx_route_without_lang');
        $qx_route_slash_count = Db::input('qx_route_slash_count');
        $qx_lang = Db::input('qx_lang');
        $qx_current_url = Db::input('qx_current_url');
        $qx_execute_code = Db::input('qx_execute_code');
        $la = new lang();
        ob_start();// 开始输出缓冲
        $qx_list = [
            ['id' => 'lie1', 'text' => '列表数据1'],
            ['id' => 'lie2', 'text' => 'Wechat:5833487'],
            ['id' => 'lie3', 'text' => '列表数据2']
        ];
        extract(['web_lang'=>$qx_current_language,'qx_list' => $qx_list]);// 使变量在模板中可用
        
        $lu = str_replace("h5_php","h5_html", __FILE__);//用户输入1.com/a则会被牵引到h5_php/a.php，a.php会牵引到h5_html/a.php该文件直接展示页面给用户
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/h5_html'. $qx_route_without_lang .'.php')) {
            $lu = $_SERVER['DOCUMENT_ROOT'] . '/h5_html'. $qx_route_without_lang .'.php';
        } else if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/h5_html'. $qx_route_without_lang .'/index.php')) {
            $lu = $_SERVER['DOCUMENT_ROOT'] . '/h5_html'. $qx_route_without_lang .'/index.php';
        }
        include $lu;//获取html路径，并渲染到缓存
        $html = ob_get_clean();// 获取生成的HTML
        echo $la->Lang_Html($html,$qx_current_language,$qx_route_path,$qx_lang,$qx_route_without_lang);
    }
  
}
?>