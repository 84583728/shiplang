<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 快速上手指南</title>
    <!-- 买ai会员账号联系：xlh3650 -->
    <meta data-i18n="description" name="description" content="5分钟学会使用AI设计网页和SEO优化">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.8;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}article{max-width:680px;margin:0 auto;padding:130px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:52px;font-weight:400;margin-bottom:20px;letter-spacing:-0.03em;line-height:1.15}.intro{font-size:21px;color:#666;margin-bottom:50px;font-weight:300;line-height:1.7;border-bottom:1px solid #f0f0f0;padding-bottom:40px}h2{font-family:'Instrument Serif',serif;font-size:36px;font-weight:400;margin:70px 0 24px;letter-spacing:-0.02em;line-height:1.2}h2:first-of-type{margin-top:50px}h3{font-size:24px;font-weight:400;margin:40px 0 16px;color:#1a1a1a;letter-spacing:-0.01em}p{margin-bottom:20px;color:#444;font-weight:300;font-size:18px}.download-link{display:inline-block;background:#1a1a1a;color:#fff;padding:10px 28px;border-radius:6px;text-decoration:none;font-size:14px;font-weight:400;transition:all .3s;margin:8px 0 32px 0}.download-link:hover{background:#000;transform:translateY(-1px)}.note{background:#fffbf0;border-left:3px solid #f5c518;padding:20px 24px;margin:32px 0;border-radius:6px;font-size:17px}.note strong{color:#1a1a1a;font-weight:600}.tip{background:#f0f9ff;border-left:3px solid #3b82f6;padding:20px 24px;margin:32px 0;border-radius:6px;font-size:17px}code{background:#f5f5f5;padding:3px 8px;border-radius:3px;font-size:16px;color:#1a1a1a;font-family:'Courier New',monospace}pre{background:#1a1a1a;color:#e0e0e0;padding:24px;border-radius:6px;overflow-x:auto;font-size:14px;line-height:1.6;margin:24px 0}pre code{background:transparent;padding:0;color:#e0e0e0;font-size:14px}ul,ol{margin:20px 0 20px 28px;color:#444}ul li,ol li{margin-bottom:12px;font-size:18px;font-weight:300;line-height:1.7}strong{font-weight:600;color:#1a1a1a}a{color:#1a1a1a;text-decoration:underline;transition:opacity .3s}a:hover{opacity:.7}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:40px}h2{font-size:30px}h3{font-size:22px}.nav-links{display:none}.intro{font-size:19px}p,ul li,ol li{font-size:17px}}
    .qrcode-container {margin-top: 16px;}.wechat-qrcode {max-width: 150px;width: 100%;height: auto;border-radius: 6px;box-shadow: 0 2px 8px rgba(0,0,0,0.1);}@media (max-width: 768px) {.wechat-qrcode {max-width: 120px;}}
    </style>
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

    <article>
        <h1 data-i18n="page_title">ShipLang 快速上手指南</h1>
        <p data-i18n="page_intro">5分钟学会使用 AI 设计网页、优化 SEO，快速上线你的多语言网站。本文将引导你完成从选择 AI 工具到网站上线的完整流程。下方是市面上常见的Ai，可以选择一个使用，测试页面shiplang.com/zh/docs/test</p>
        <ul>
            <li data-i18n="tool1"><strong>Claude</strong> — <code>https://Claude.ai</code></li>
            <li data-i18n="tool2"><strong>Gemini</strong> — <code>https://Gemini.GoogLe.com</code></li>
            <li data-i18n="tool2"><strong>ChatGpt</strong> — <code>https://ChatGpt.com</code></li>
            <li data-i18n="tool3"><strong>DeepSeek</strong> — <code>https://DeepSeek.com</code></li>
            <li data-i18n="tool4"><strong>Kimi</strong> — <code>https://kimi.com/zh</code></li>
            <li data-i18n="tool4"><strong>bigmodel(质谱)</strong> — <code>https://bigmodel.cn</code></li>
        </ul>
        <div class="contact-section">
            <h3 data-i18n="buy_ai_title">购买 AI 会员账号</h3>
            <p data-i18n="buy_ai_desc">目前最强Ai是美国Claude，官方20美金每月，找我们购买价格很低</p>
            <p data-i18n="buy_ai_desc">购买Claude等Ai优惠会员账号或Api，或代充Ai账号，或代理销售请联系：</p>
            <div class="contact-info">
                <div class="contact-item">
                    <strong data-i18n="weixin">微信：</strong><code>78739985</code>
                </div>
                <div class="contact-item">
                    <strong data-i18n="section2_youxiang">邮箱：</strong><code>8123202@gmail.com</code>
                </div>

                <div class="qrcode-container">
                    <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/xiran.png" alt="微信二维码" class="wechat-qrcode">
                </div>
            </div>
        </div>
  
        
<h3 data-i18n="step1_title">目录结构</h3>
<p data-i18n="title_optimize">此目录结构，需要您学习和掌握的主要就两个文件夹[h5_html,h5_php]，前期的话只有一个文件夹[h5_html]，下面就是教你如何使用这个文件夹搭建全球化网站</p>
<pre><code>项目根目录/
├── assets/             # 资源文件夹(图片、CSS、JS等静态资源)
├── h5_html/            # HTML网页文件,但文件后缀是[.php]
├── h5_php/             # HTML对应的PHP处理文件
├── lang/               # 语言包文件夹(自动翻译自动创建多语言文件)
├── shiplang/           # 这是框架的代码，请忽略
├── sitemap/            # 网站地图文件夹
└── index.php           # 网站入口文件，也是网站路由文件</code></pre>
        
        
        <h2 data-i18n="section_design">5分钟设计一个网页</h2>

        <h3 data-i18n="step2">第一步：发送给 AI</h3>
        <div style="display:flex;gap:12px;margin:16px 0 24px;flex-wrap:wrap;">
            <a href="https://shiplang.com/static/%E5%89%8D%E7%AB%AF%E8%A7%84%E8%8C%83%E6%8F%90%E7%A4%BA%E8%AF%8D.txt" style="display:inline-flex;align-items:center;gap:8px;background:#1a1a1a;color:#fff;padding:12px 24px;border-radius:8px;text-decoration:none;font-size:15px;font-weight:500;transition:all .3s;border:2px solid #1a1a1a;" onmouseover="this.style.background='#fff';this.style.color='#1a1a1a'" onmouseout="this.style.background='#1a1a1a';this.style.color='#fff'">
                <span style="font-size:18px;">🎨</span> 
                <span data-i18n="rmtsc">(入门) 前端提示词</span> 
            </a>
            <a href="https://shiplang.com/static/%E5%90%8E%E7%AB%AF%E8%A7%84%E8%8C%83%E6%8F%90%E7%A4%BA%E8%AF%8D.txt" style="display:inline-flex;align-items:center;gap:8px;background:#fff;color:#1a1a1a;padding:12px 24px;border-radius:8px;text-decoration:none;font-size:15px;font-weight:500;transition:all .3s;border:2px solid #1a1a1a;" onmouseover="this.style.background='#1a1a1a';this.style.color='#fff'" onmouseout="this.style.background='#fff';this.style.color='#1a1a1a'">
                <span style="font-size:18px;">⚙️</span> 
                <span data-i18n="jjtsc">(进阶) 后端提示词</span> 
            </a>
        </div>
        <p data-i18n="step2_desc">将上方下载的[前端提示词]文件上传到Ai对话框，并输入你需要开发的网站，例如你可以写：给我开发一个展示不同品种的猫咪的网站首页</p>



        
        
        <h3 data-i18n="step3">第二步：下载与上传</h3>
        <p data-i18n="step3_desc">将AI生成的HTML文件上传到宝塔ShipLang框架的 h5_html 文件夹内(支持直接上传文件或粘贴代码)，注意文件需要以[.php]结尾而不是html</p>
        <p data-i18n="step3_desc">文件结构示例:（如，域名为123）</p>
<pre><code>h5_html/
├── index.php           # 首页 → 123.com
├── maomi.php           # 猫咪页面 → 123.com/maomi
└── mao/                # 猫咪分类文件夹
    ├── index.php       # 猫咪分类首页 → 123.com/mao
    ├── bosi.php        # 波斯猫 → 123.com/mao/bosi
    └── meiduan.php     # 美短猫 → 123.com/mao/meiduan
</code></pre>
        <h2 data-i18n="section_design">访问规则</h2>
        <h3 data-i18n="step2">访问规则是告诉你上传文件到指定文件夹如何访问，并且[index.php]是首页的意思</h3>
        <p data-i18n="step3_desc">当你上传的文件名字是h5_html/index.php → 访问地址: 123.com</p>
        <p data-i18n="step3_desc">当你上传的文件名字是h5_html/maomi.php → 访问地址: 123.com/maomi</p>
        <p data-i18n="step3_desc">当你上传的文件名字是h5_html/mao/index.php → 访问地址: 123.com/mao</p>
        <p data-i18n="step3_desc">当你上传的文件名字是h5_html/mao/bosi.php → 访问地址: 123.com/mao/bosi</p>
        <p data-i18n="step3_desc">好了，你的网站可访问了就是可用了</p>
        <p data-i18n="step3_desc">下方演示一些兼容Ai幻觉的访问规则：</p>
        <p data-i18n="step3_desc">文件名:h5_html/index.php → 访问地址也可以是: 123.com/index</p>
        <p data-i18n="step3_desc">文件名:h5_html/index.php → 访问地址也可以是: 123.com/index.html</p>
        <p data-i18n="step3_desc">文件名:h5_html/index.php → 访问地址也可以是: 123.com/en/index</p>
        <p data-i18n="step3_desc">文件名:h5_html/index.php → 访问地址也可以是: 123.com/en/index.html</p>
        <p data-i18n="step3_desc">文件名:h5_html/maomi.php → 访问地址也可以是: 123.com/maomi.html</p>
        <p data-i18n="step3_desc">文件名:h5_html/mao/index.php → 访问地址也可以是: 123.com/mao/index</p>
        <p data-i18n="step3_desc">文件名:h5_html/mao/index.php → 访问地址也可以是: 123.com/mao/index.html</p>
        
<h2 data-i18n="section_i18n">多语言自动翻译</h2>
<h3 data-i18n="step_i18n">系统自动为你的网页生成多语言版本</h3>
<p data-i18n="step3_desc">当你上传 h5_html/index.php（中文内容），系统会自动生成：</p>
<pre><code>123.com/zh/maomi    # 中文版（原始文件）
123.com/en/maomi    # 英文版（自动翻译）
123.com/ja/maomi    # 日文版（自动翻译）
123.com/fr/maomi    # 法文版等等...</code></pre>
<div class="tip">
    <strong data-i18n="hxyss">核心优势：</strong><span data-i18n="hxxsssss">你只需维护一份中文 HTML，修改中文内容后，所有语言版本自动同步更新，无需手动翻译或维护多份文件。</span>
</div>
<p data-i18n="step3_desc">例如你将 h5_html/index.php 里的"欢迎来到我的网站"改为"探索精彩世界"，用户访问英文页面时会自动显示最新翻译的英文内容。</p>
        <h2 data-i18n="section_design">查看示例代码</h2>
        <h3 data-i18n="step2">修改示例文件,体验系统功能</h3>
        <p data-i18n="step3_desc">在宝塔网站文件里，打开文件夹：[h5_html]->[docs]->[lang-i18n.php]，您可以修改或删减源代码</p>
        <p data-i18n="step3_desc">然后访问页面地址：域名.com/en/docs/lang-i18n</p>
        <p data-i18n="step2">这样您就可以体验感受系统高级玩法是如何使用的了</p>
        
        
      </article>

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