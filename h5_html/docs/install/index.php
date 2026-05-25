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
        <h1 data-i18n="page_title">ShipLang规范化Ai多语言框架安装教程</h1>
        <p class="intro" data-i18n="page_intro">本教程将指导你从零开始安装 ShipLang 框架，包括服务器选购、环境配置、框架部署等完整流程</p>

        <div class="download-section">
            <h2 class="download-title" data-i18n="download_title">下载 ShipLang 源代码</h2>
            <p class="download-desc" data-i18n="download_desc">选择您喜欢的下载方式获取 ShipLang v1.0.2</p>
            <div class="download-buttons">
                <a href="#" class="download-btn google-drive" data-i18n="download_google">
                    <span class="btn-icon">📁</span>
                    <span data-i18n="pan_guge" class="btn-text">谷歌网盘</span>
                </a>
                <a href="#" class="download-btn baidu-drive" data-i18n="download_baidu">
                    <span class="btn-icon">☁️</span>
                    <span data-i18n="pan_baidu" class="btn-text">百度网盘</span>
                </a>
                <a href="#" class="download-btn lanzou-drive" data-i18n="download_lanzou">
                    <span class="btn-icon">🔗</span>
                    <span data-i18n="pan_lanzou" class="btn-text">蓝奏云</span>
                </a>
            </div>
            <p class="version-info" data-i18n="version_info">最新版本 v1.0.2 | 发布日期：2026-04-24</p>
        </div>


        <h2 data-i18n="section_server">第一步：基础配置篇</h2>
        <div class="step-section">
            <h3 data-i18n="step1_title">1.1 基础配置</h3>
            <p data-i18n="step1_desc">基础配置共计三篇文章，需要把这三篇文章依次做完之后再看本教程</p>
            <ul>
                <li><a data-i18n="li1" href="/docs/install/ucloud" target="_blank" style="color: #1a1a1a; text-decoration: underline;">1、服务器购买教程，点击查看教程</a></li>
                <li><a data-i18n="li2" href="/docs/install/cloudflare" target="_blank" style="color: #1a1a1a; text-decoration: underline;">2、域名购买教程，点击查看教程</a></li>
                <li><a data-i18n="li3" href="/docs/install/baota" target="_blank" style="color: #1a1a1a; text-decoration: underline;">3、宝塔配置教程，点击查看教程</a></li>
            </ul>
            
            
            

           
        </div>

        <h2 data-i18n="section_baota">第二步：安装ShipLang</h2>
        <div class="step-section">
            <h3 data-i18n="step1_title">2.1 下载ShipLang</h3>
            <p data-i18n="step3_desc">点击本文章上方，下载按钮即可下载，ShipLang源代码</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_20.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_20.png" alt="宝塔外网面板登录">
                </a>
            </div>
            
            
            
            
            
            
            
            <p data-i18n="step3_desc">点击[网站]->[PHP项目]->[根目录]</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_41.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_41.png" alt="进入宝塔网站根目录">
                </a>
            </div>
            <p data-i18n="step3_desc">全选，点击鼠标右键，删除所有文件，如果过一会又冒出文件再次删除一遍即可</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_42.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_42.png" alt="宝塔删除文件教程">
                </a>
            </div>
            <p data-i18n="step3_desc">点击[上传文件]，选择下载的源代码，点击[开始上传]，上传成功之后点[×]</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_43.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_43.png" alt="宝塔上传文件教程">
                </a>
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_44.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_44.png" alt="宝塔上传文件成功">
                </a>
            </div>
            <p data-i18n="step3_desc">点击鼠标右键，解压</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_45.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_45.png" alt="宝塔解压文件教程">
                </a>
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_46.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_46.png" alt="宝塔解压文件教程">
                </a>
            </div>
            
            
            <p data-i18n="step3_desc">解压之后删除压缩包</p>
            <div class="image-container">
                <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_47.png" target="_blank" class="image-link">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/Screenshot_47.png" alt="宝塔删除压缩包">
                </a>
            </div>
        </div>

        <h2 data-i18n="section_baota">第三步：配置seo</h2>
        <div class="step-section">
            <p data-i18n="step3_desc">介绍：seo是搜索引擎排名的意思，您需要配置你希望哪个域名被谷歌搜索收录</p>
            <p data-i18n="step3_desc">教程：根目录 -> 打开seo.json文件</p>
            <p data-i18n="step3_desc">将hosts设置为seo优化域名，注意只能填写一个域名</p>
            <p data-i18n="step3_desc">其中no_paths是配置禁止seo收录的路径，当网址包含其中路径，则不会被搜索引擎抓取</p>
        </div>
        
        <h2 data-i18n="section_baota">第四步：安装成功</h2>
        <div class="step-section">
            <p data-i18n="step3_desc">至此，ShipLang框架系统，安装成功，您可以打开您的域名查看</p>
            <p data-i18n="step3_desc">ShipLang安装成功之后，还需要学习如何使用，这在下一章内容有讲</p>
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