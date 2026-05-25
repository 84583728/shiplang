<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 数据库与接口使用指南</title>
    <!-- 买ai会员账号联系：xlh3650 -->
    <meta data-i18n="description" name="description" content="ShipLang 数据库操作和前后端对接文档">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:900px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:24px;letter-spacing:-0.03em}.intro{font-size:19px;color:#666;margin-bottom:50px;font-weight:300;line-height:1.6}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h3{font-size:22px;font-weight:400;margin:40px 0 16px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.section{margin-bottom:50px}.note{background:#fffbf0;border-left:3px solid #f5c518;padding:20px 24px;margin:32px 0;border-radius:6px}.note strong{color:#1a1a1a;font-weight:600}.success{background:#f0fdf4;border-left:3px solid #10b981;padding:20px 24px;margin:32px 0;border-radius:6px}.warning{background:#fef2f2;border-left:3px solid #ef4444;padding:20px 24px;margin:32px 0;border-radius:6px}code{background:#f5f5f5;padding:2px 6px;border-radius:3px;font-size:14px;color:#1a1a1a;font-family:'Courier New',monospace}pre{background:#1a1a1a;color:#e0e0e0;padding:24px;border-radius:6px;overflow-x:auto;font-size:14px;line-height:1.6;margin:16px 0}pre code{background:transparent;padding:0;color:#e0e0e0}.example-box{background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;padding:32px;margin:24px 0}.example-box h4{font-size:18px;font-weight:400;margin-bottom:16px;color:#1a1a1a}ul,ol{margin:16px 0 16px 24px;color:#666}ul li,ol li{margin-bottom:8px;font-size:17px;font-weight:300}table{width:100%;border-collapse:collapse;margin:24px 0}table th{background:#fafafa;padding:12px;text-align:left;border:1px solid #e0e0e0;font-weight:400;font-size:15px}table td{padding:12px;border:1px solid #e0e0e0;font-size:15px;font-weight:300}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}.example-box{padding:24px}table{font-size:13px}}</style>
</head>
<body>
    <header>
        <nav>
            <a href="/" class="logo">ShipLang</a>
            <ul class="nav-links">
                <li><a href="/pricing" data-i18n="nav_docs">价格</a></li>
                <li><a href="https://shiplang.com/zh/admin/login" data-i18n="nav_example">后台</a></li>
                <li><a href="/docs" data-i18n="nav_docs">文档</a></li>
            </ul>
            <div class="language-dropdown">
                <button class="language-btn">
                    <span id="current-language">中文(简体)</span>
                    <span>▼</span>
                </button>
                <div class="language-dropdown-auto">
                    <a href="/en/" class="language-option">English</a>
                    <a href="/zh-cn/" class="language-option">中文(简体)</a>
                    <a href="/ja/" class="language-option">日本語</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1 data-i18n="page_title">后端Api和数据库示例</h1>
        <p class="intro" data-i18n="page_intro">本文档介绍 ShipLang 框架中[h5_php]文件夹内后端php的写法示例</p>
         

        <h2 data-i18n="section_db">后端APi示例</h2>
        
        <div class="section">
            <p data-i18n="db_basic_desc">[Db::input]可以读取post和get的参数</p>
            <p data-i18n="page_intro">数据库的账号密码设置在文件夹[shiplang]->[db.php]</p>
            <p data-i18n="db_basic_desc">[Db::return_json_exit]是返回json，并且支持返回结果翻译，详细文档：https://shiplang.com/zh-cn/docs/lang-api</p>
            <p data-i18n="db_basic_desc">[h5_php]里面是php后端文件夹，其中里面的Api方法命名必须是[api_]，才是api接口</p>
            <p data-i18n="db_basic_desc">[h5_php]和[h5_html]是相同目录对应关系</p>
<pre><code>header('Content-Type: text/html; charset=UTF-8');
require_once($_SERVER['DOCUMENT_ROOT'] . '/shiplang/db.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/shiplang/lang.php');
class NbHtml {
    public function api_test() {
        $id = Db::input('id','');//假设：1.com/a/api_test?id=1，那么input就是读取链接里的id
        if (empty($id)) {
            Db::return_json_exit(['code' => 400,'msg' => '请输入id']);
        }
        
        Db::execute("INSERT INTO aaa (id,bbb) VALUES (?,?)",['1','bbb']);//增
        Db::execute("DELETE FROM aaa WHERE id = ?", ['1']);//删
        Db::execute("UPDATE aaa SET bbb = ? WHERE id = ?",['new_bbb','id']);//改
        $user = Db::query("SELECT * FROM aaa WHERE id = ?", [$id]);//查 使用query
        
        Db::return_json_exit(['code' => 200,'msg' => '查询结果','data' => [
            'user' => $user
        ]]);
    }
}</code></pre>
            

</div>

    </main>

    <footer>
        <div class="footer-content">
            <ul class="footer-links">
                <li><a href="/docs" data-i18n="footer_docs">文档</a></li>
                <li><a href="/terms" data-i18n="footer_terms">服务条款</a></li>
                <li><a href="/refund" data-i18n="footer_refund">退款政策</a></li>
                <li><a href="/privacy" data-i18n="footer_privacy">隐私政策</a></li>
            </ul>
            <p class="footer-bottom">Email: kf@shiplang.com</p>
        </div>
    </footer>
</body>
</html>