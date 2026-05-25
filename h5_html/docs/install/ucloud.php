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
        <h1 data-i18n="page_title">Ucloud服务器购买与配置教程</h1>
        <p class="intro" data-i18n="page_intro">该页面的教程只是首次购买需配置一次，之后再无须配置，并且一台服务器可以搭建无数个网站</p>


        <div class="step-section">
            <h3 data-i18n="step1_title">1.1 注册与购买</h3>
            <p data-i18n="step1_desc">打开该链接注册：https://passport.ucloud.cn?cps_code=Dc1Hr36c1akEpjLfX4xSSH</p>
            <p data-i18n="step1_desc">注册成功后，完成个人实名制：https://console.ucloud.cn/uaccount/authentication</p>
            <p data-i18n="step1_desc">打开，新用户特惠页面：https://www.ucloud.cn/site/active/kuaijiesale.html</p>
            <p data-i18n="step1_desc">找到云服务器，点击[欧美专区]，选择:[2C 2G 30M],流量包:600G,时长:1年，价格90元人民币</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_8.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_8.png" alt="ucloud新用户特惠页面">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud新用户特惠页面（点击查看大图）</p>
            </div>
    

            <p data-i18n="step3_desc">地区选择洛杉矶其他城市网络会比较卡，选择[应用镜像]，选择[宝塔]，密码自己设置密码一定要记住了</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_9.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_9.png" alt="ucloud选择服务器配置">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud选择服务器配置（点击查看大图）</p>
            </div>
            
            <p data-i18n="step3_desc">购买成功之后，点击[控制台]</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_10.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_10.png" alt="ucloud购买成功页面">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud购买成功页面（点击查看大图）</p>
            </div>
            
            <h3 data-i18n="step2_title">1.2 获取宝塔账户密码</h3>
            <p data-i18n="step3_desc">进入[控制台]后，找到购买的这台服务器并点击</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_11.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_11.png" alt="ucloud进入服务器页面">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud进入服务器页面（点击查看大图）</p>
            </div>
            
            <p data-i18n="step3_desc">点击登录，如下图：</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_12.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_12.png" alt="ucloud点击登录页面">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud点击登录页面（点击查看大图）</p>
            </div>
            
            <p data-i18n="step3_desc">输入刚刚购买服务器时填写的密码，之后点击[确定]</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_13.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_13.png" alt="ucloud登录后输入密码">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud登录后输入密码（点击查看大图）</p>
            </div>
            <p data-i18n="step3_desc">登录成功后，连续按3下键盘上的[Ctrl]，出现下图中的[Ctrl+V 完成粘贴]即为成功</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_15.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_15.png" alt="ucloud登录后允许粘贴">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud登录后允许粘贴（点击查看大图）</p>
            </div>
            <p data-i18n="step3_desc">同时按键盘上的[Ctrl+V]，之后点击：[允许 / Allow]</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_14.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_14.png" alt="ucloud登录后并粘贴">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud登录后并粘贴（点击查看大图）</p>
            </div>
            <p data-i18n="step3_desc">粘贴成功之后，点击回车，即可得到宝塔的地址、账号密码，复制或者截图保存好这些信息</p>
            <p data-i18n="step3_desc">一定要保存好，之后很多步骤需要使用，重要的是说三遍！</p>
            <p data-i18n="step3_desc">一定要保存好，上述信息，重要的是说三遍！</p>
            <p data-i18n="step3_desc">一定要保存好，上述信息，重要的是说三遍！</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_16.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_16.png" alt="ucloud登录后获取宝塔账户密码">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud登录后获取宝塔账户密码（点击查看大图）</p>
            </div>
                
            
            
            
            <h3 data-i18n="step2_title">1.3 设置防火墙</h3>
            <p data-i18n="step3_desc">设置防火墙，打开：https://console.ucloud.cn/unet/ufirewall</p>
            <p data-i18n="step3_desc">鼠标右键->检查->[Console]->粘贴代码，回车运行后，自动创建防火墙并绑定到服务器</p>
            <a data-i18n="dow_fhq" href="https://shiplang.com/static/%E5%88%9B%E5%BB%BA%E9%98%B2%E7%81%AB%E5%A2%99%E8%B0%B7%E6%AD%8C%E6%B5%8F%E8%A7%88%E5%99%A8%E6%8E%A7%E5%88%B6%E5%8F%B0%E4%BB%A3%E7%A0%81.txt">>>>>>下载设置防火墙代码</a>
            <p data-i18n="step3_desc">成功运行该代码后，服务器购买与配置教程完毕！</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_18.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_18.png" alt="ucloud自动设置防火墙">
                </a>
                <p class="image-caption" data-i18n="image2_caption">ucloud自动设置防火墙（点击查看大图）</p>
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