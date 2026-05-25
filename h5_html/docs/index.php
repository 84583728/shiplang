<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 文档中心</title>
    <!-- 买ai会员账号联系：xlh3650 -->
    <meta data-i18n="description" name="description" content="ShipLang 框架文档索引">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:1100px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:16px;letter-spacing:-0.03em}.intro{font-size:19px;color:#666;margin-bottom:60px;font-weight:300}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h2:first-of-type{margin-top:0}.doc-list{list-style:none;margin-bottom:60px;background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;overflow:hidden}.doc-item{border-bottom:1px solid #f0f0f0}.doc-item:last-child{border-bottom:0}.doc-link{display:block;padding:28px 32px;text-decoration:none;transition:all .3s;background:#fff;cursor:pointer}.doc-link:hover{background:#fafafa;box-shadow:inset 4px 0 0 #1a1a1a;padding-left:36px}.doc-title{font-size:22px;font-weight:400;color:#1a1a1a;margin-bottom:8px;transition:all .3s;letter-spacing:-0.01em}.doc-link:hover .doc-title{color:#000;font-weight:600}.doc-desc{font-size:16px;color:#999;line-height:1.6;font-weight:300}.doc-badge{display:inline-block;background:#1a1a1a;color:#fff;font-size:11px;padding:4px 10px;border-radius:3px;margin-left:10px;font-weight:400;letter-spacing:.02em;vertical-align:middle}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}}</style>
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
        <h1 data-i18n="page_title">ShipLang 文档中心</h1>
        <p class="intro" data-i18n="page_intro">探索 ShipLang 框架的完整文档，从安装到高级功能，快速上手构建多语言网站</p>

        <h2 data-i18n="section_start">快速开始</h2>
        <ul class="doc-list">
            <li class="doc-item">
                <a href="/docs/install" class="doc-link">
                    <h3 class="doc-title">
                        <span data-i18n="doc_install_title">框架安装教程</span>
                        <span class="doc-badge" data-i18n="badge_required">必读</span>
                    </h3>
                    <p class="doc-desc" data-i18n="doc_install_desc">从零开始安装和配置 ShipLang 框架，包含环境要求、安装步骤和基础配置</p>
                </a>
            </li>

            <li class="doc-item">
                <a href="/docs/kuai-shu" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_quickstart_title">快速上手指南</h3>
                    <p class="doc-desc" data-i18n="doc_quickstart_desc">5分钟创建你的第一个多语言页面，了解核心概念和基本用法</p>
                </a>
            </li>
            <li class="doc-item">
                <a href="/docs/video" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_quickstart_title">视频课程</h3>
                    <p class="doc-desc" data-i18n="doc_quickstart_desc">视频课程</p>
                </a>
            </li>
            <li class="doc-item">
                <a href="/docs/lang-auto" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_quickstart_title">框架补充文档</h3>
                    <p class="doc-desc" data-i18n="doc_quickstart_desc">框架与设计思路与文档</p>
                </a>
            </li>
            <li class="doc-item">
                <a href="/about" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_quickstart_title">关于ShipLang</h3>
                    <p class="doc-desc" data-i18n="doc_quickstart_desc">关于更多ShipLang框架的理念</p>
                </a>
            </li>
        </ul>

        <h2 data-i18n="section_core">核心功能</h2>
        <ul class="doc-list">
            <li class="doc-item">
                <a href="/docs/lang-i18n" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_i18n_title">多语言翻译</h3>
                    <p class="doc-desc" data-i18n="doc_i18n_desc">使用 data-i18n 属性实现自动翻译，支持HTML、Meta标签和动态内容</p>
                </a>
            </li>

            

            <li class="doc-item">
                <a href="/docs/login-pay" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_auth_title">登录与支付</h3>
                    <p class="doc-desc" data-i18n="doc_auth_desc">登录与支付，极易接入的登录与支付设计</p>
                </a>
            </li>
        </ul>

        <h2 data-i18n="section_advanced">高级特性</h2>
        <ul class="doc-list">
            <li class="doc-item">
                <a href="/docs/admin-test" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_theme_title">后端示例</h3>
                    <p class="doc-desc" data-i18n="doc_theme_desc">后端Api、数据库、后端返回结果多语言，示例</p>
                </a>
            </li>
            <li class="doc-item">
                <a href="/docs/lang-api" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_api_title">API 翻译[Db::return_json_exit]</h3>
                    <p class="doc-desc" data-i18n="doc_api_desc">在后端API返回数据时指定翻译字段，支持路径语法和通配符</p>
                </a>
            </li>
            <li class="doc-item">
                <a href="/docs/sitemap" class="doc-link">
                    <h3 class="doc-title" data-i18n="doc_analytics_title">网站地图</h3>
                    <p class="doc-desc" data-i18n="doc_analytics_desc">内置网站地图，用于统计用户访问指标以及便于谷歌seo收录</p>
                </a>
            </li>
        </ul>
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