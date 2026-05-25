<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 框架安装教程</title>
    <!-- 买ai会员账号联系：xlh3650 -->
    <meta data-i18n="description" name="description" content="ShipLang 框架完整安装指南">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:900px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:24px;letter-spacing:-0.03em}.intro{font-size:19px;color:#666;margin-bottom:40px;font-weight:300;line-height:1.6}.download-section{background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;padding:28px 32px;margin-bottom:50px;text-align:center}.download-title{font-family:'Instrument Serif',serif;font-size:20px;font-weight:400;margin-bottom:10px}.download-desc{font-size:15px;color:#666;margin-bottom:20px}.download-btn{display:inline-block;background:#1a1a1a;color:#fff;padding:12px 36px;border-radius:6px;text-decoration:none;font-size:15px;font-weight:400;transition:all .3s}.download-btn:hover{background:#000;transform:translateY(-2px)}.version-info{font-size:12px;color:#999;margin-top:12px}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h3{font-size:22px;font-weight:400;margin:40px 0 16px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.step-section{margin-bottom:50px}.note{background:#fffbf0;border-left:3px solid #f5c518;padding:20px 24px;margin:32px 0;border-radius:6px}.note strong{color:#1a1a1a;font-weight:600}.success{background:#f0fdf4;border-left:3px solid #10b981;padding:20px 24px;margin:32px 0;border-radius:6px}.image-container{margin:24px 0;text-align:center}.image-link{display:inline-block;border:1px solid #e0e0e0;border-radius:6px;overflow:hidden;transition:all .3s}.image-link:hover{border-color:#ccc;transform:translateY(-2px);box-shadow:0 4px 12px rgba(0,0,0,0.1)}.image-link img{display:block;width:100%;height:auto}.image-caption{font-size:14px;color:#999;margin-top:8px;font-style:italic}ol,ul{margin:16px 0 16px 24px;color:#666}ol li,ul li{margin-bottom:12px;font-size:17px;font-weight:300}code{background:#f5f5f5;padding:2px 6px;border-radius:3px;font-size:14px;color:#1a1a1a;font-family:'Courier New',monospace}pre{background:#1a1a1a;color:#e0e0e0;padding:24px;border-radius:6px;overflow-x:auto;font-size:14px;line-height:1.6;margin:16px 0}pre code{background:transparent;padding:0;color:#e0e0e0}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}.download-section{padding:32px 24px}}</style>
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
        <h1 data-i18n="page_title">ShipLang登录支付教程</h1>
        <p class="intro" data-i18n="page_intro">ShipLang集成支付登录极为简单，ShipLang的核心目的是寻找人类主体性，让注意力集中与创意与产品，是将门槛降到尽可能低，尽可能的缩减步骤</p>
<p data-i18n="shili">示例页面路径：[h5_html]->[test.php]</p>
<p data-i18n="shili">示例页面地址：https://shiplang.com/test</p>
        
        <div class="step-section">
            <h3 data-i18n="step1_title">前言</h3>
            <p data-i18n="step1_desc">支付分为两种模式，一种是主动弹出，另一种是被动拉取</p>
            <p data-i18n="step1_desc">主动弹出就是用户打开你的网页就会提示登录如果没有付费就会跳转支付</p>
            <p data-i18n="step1_desc">被动拉取就是用户可以使用你的网页，你自己设置策略例如下载了5张图片后提示登录或支付</p>
            <p data-i18n="step1_desc">首先打开该网站注册开发者ID：shiplang.com/admin/sign-up</p>
            
            <h3 data-i18n="step1_title">主动弹出教程</h3>
            <p data-i18n="step1_desc">打开网站目录[shiplang]->[hook.js]打开代码看到上方两个变量进行配置</p>
            <p data-i18n="step1_desc">其一[window.Appid]，格式：开发者ID_网站名_随机数</p>
            <p data-i18n="step1_desc">其二[window.isNoPay]，对于主动弹出而言为空，不填写</p>
            <p data-i18n="step1_desc">这时，您打开您的网页时，便会发现出现了登录页面，当登录成功之后，判断用户会员到期便会拉起支付</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_48.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_48.png" alt="ShipLang主动弹出登录">
                </a>
            </div>
            
            <h3 data-i18n="step1_title">被动弹出教程</h3>
<p data-i18n="step1_desc">打开网站目录[shiplang]->[hook.js]打开代码看到上方两个变量进行配置</p>

<div style="background:#f8f9fa;border:1px solid #e8e8e8;border-radius:8px;padding:24px;margin:24px 0">
    <div style="margin-bottom:20px">
        <p style="margin-bottom:12px"><strong style="color:#1a1a1a;font-weight:600" data-i18n="pzx1">配置项1：</strong><code style="background:#fff;padding:4px 10px;border:1px solid #e0e0e0">window.Appid</code></p>
        <p style="color:#666;font-size:15px;margin-left:20px" data-i18n="geshi">格式：开发者ID_网站名_随机数</p>
    </div>
    
    <div style="margin-bottom:20px">
        <p style="margin-bottom:12px"><strong style="color:#1a1a1a;font-weight:600" data-i18n="pzx2">配置项2：</strong><code style="background:#fff;padding:4px 10px;border:1px solid #e0e0e0">window.isNoPay</code></p>
        <p style="color:#666;font-size:15px;margin-left:20px" data-i18n="txxxdc">填写小写单词 <code style="background:#fff;padding:2px 8px;border:1px solid #e0e0e0;color:#e63946">npy</code></p>
        <p style="color:#999;font-size:14px;margin-left:20px;margin-top:8px;font-style:italic" data-i18n="moren">系统默认为npy，因为许多人使用该系统设计官网或展示页面，并非盈利性工具所以无须登录</p>
    </div>
</div>

<p data-i18n="step1_desc">这时打开您的网页，不会出现登录页面和支付页面。您可以自定义弹出登录的规则。</p>

<div class="note" style="background:#f0f9ff;border-left:3px solid #0ea5e9">
    <p style="margin-bottom:16px"><strong style="color:#1a1a1a" data-i18n="zdycfgz">自定义触发规则示例</strong></p>
    <p style="margin-bottom:12px;color:#666" data-i18n="3zhang">例如：用户下载3张图片后弹出登录，您只需复制以下代码给AI：</p>
</div>

<div style="background:#1a1a1a;border-radius:8px;padding:28px;margin:24px 0">
    <div style="margin-bottom:20px">
        <p style="color:#10b981;font-size:13px;margin-bottom:8px;font-family:'Courier New',monospace">下方是ShipLang.com网页开发框架自带js函数，你只需要在你的静态网页js引用下方代码即可实现相应的功能</p>
        <p style="color:#10b981;font-size:13px;margin-bottom:8px;font-family:'Courier New',monospace">// 拉起登录</p>
        <code style="background:#2d2d2d;color:#e0e0e0;padding:8px 16px;border-radius:4px;display:block;font-size:15px">window.Login_ShipLang();</code>
    </div>
    
    <div style="margin-bottom:20px">
        <p style="color:#10b981;font-size:13px;margin-bottom:8px;font-family:'Courier New',monospace">// 拉起支付</p>
        <code style="background:#2d2d2d;color:#e0e0e0;padding:8px 16px;border-radius:4px;display:block;font-size:15px">window.OpenPay_ShipLang();</code>
    </div>
    
    <div>
        <p style="color:#10b981;font-size:13px;margin-bottom:8px;font-family:'Courier New',monospace">// 判断用户是否为会员</p>
        <pre style="background:#2d2d2d;padding:12px 16px;border-radius:4px;margin:0"><code>if (window.IsPay_ShipLang()) {
    // 是会员
} else {
    // 非会员
}</code></pre>
    </div>
</div>
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