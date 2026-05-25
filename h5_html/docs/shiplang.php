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
        <h1 data-i18n="page_title">ShipLang: 一个面向AI的多语言网站框架</h1>
        <p data-i18n="page_intro">ShipLang 是首个由产品经理开发的技术栈，该架构主体代码自2023年便已成型，其作者在开发全球化产品时，一直迭代到2026年才面向公众发布，这不是一个传统意义上由程序员设计的解决方案，而是更面向普通用户更低门槛开发网站自动接入seo的盈利的系统</p>
        
        
        
        
        <h2 data-i18n="section_design">前言</h2>

        <h3 data-i18n="step2">作者介绍</h3>
        <p data-i18n="step2_desc">小千，1999年生人，产品经理兼独立开发者，位于中国辽宁大连，初中辍学自学编程在未成年时独自开发App盈利百万，其年少时代表作品App为[千寻魔盒][投票栏]，从2012年入行至今旗下经营的软件产品数百款覆盖多国民生领域，对软件金融货币均有一定了解，2022年首批AiToken批发从业者短时间内盈利超百万，红利结束后转型构建与AI共生的产品，也就衍生出了本架构和一些其他的本人产品，WeChat：5833487，Gmail：kf@shiplang.com</p>

        <h3 data-i18n="step3">框架原理</h3>
        <p data-i18n="step3_desc">当开发者写完中文代码后，用户访问网站看到的是用户的母语，而开发者只需要维护中文页面，无须预翻译语言包。</p>


<div style="max-width: 100%; margin: 40px 0; background: #f8f9fa; padding: 30px; border-radius: 12px;">
    <svg viewBox="0 0 800 600" style="width: 100%; height: auto; max-width: 800px; display: block; margin: 0 auto;">
        <!-- 定义箭头 -->
        <defs>
            <marker id="arrowhead" markerWidth="10" markerHeight="10" refX="9" refY="3" orient="auto">
                <polygon points="0 0, 10 3, 0 6" fill="#1a1a1a" />
            </marker>
        </defs>
        
        <!-- 步骤1: 用户访问 -->
        <rect x="50" y="30" width="180" height="70" rx="8" fill="#3b82f6" stroke="#2563eb" stroke-width="2"/>
        <text x="140" y="60" text-anchor="middle" fill="white" font-size="16" font-weight="600">用户访问网站</text>
        <text x="140" y="80" text-anchor="middle" fill="white" font-size="13">langany.com/docs</text>
        
        <!-- 箭头1 -->
        <line x1="140" y1="100" x2="140" y2="140" stroke="#1a1a1a" stroke-width="2" marker-end="url(#arrowhead)"/>
        
        <!-- 步骤2: 检测语言 -->
        <rect x="50" y="140" width="180" height="60" rx="8" fill="#8b5cf6" stroke="#7c3aed" stroke-width="2"/>
        <text x="140" y="165" text-anchor="middle" fill="white" font-size="16" font-weight="600">检测用户语言</text>
        <text x="140" y="183" text-anchor="middle" fill="white" font-size="13">例如: 英语(EN)</text>
        
        <!-- 箭头2 -->
        <line x1="140" y1="200" x2="140" y2="240" stroke="#1a1a1a" stroke-width="2" marker-end="url(#arrowhead)"/>
        
        <!-- 判断框 -->
        <polygon points="140,240 240,280 140,320 40,280" fill="#fbbf24" stroke="#f59e0b" stroke-width="2"/>
        <text x="140" y="275" text-anchor="middle" fill="#1a1a1a" font-size="15" font-weight="600">是否存在</text>
        <text x="140" y="293" text-anchor="middle" fill="#1a1a1a" font-size="15" font-weight="600">翻译文件?</text>
        
        <!-- 左侧分支: 不存在 -->
        <line x1="40" y1="280" x2="20" y2="280" stroke="#1a1a1a" stroke-width="2"/>
        <line x1="20" y1="280" x2="20" y2="390" stroke="#1a1a1a" stroke-width="2" marker-end="url(#arrowhead)"/>
        <text x="25" y="270" fill="#dc2626" font-size="14" font-weight="600">否</text>
        
        <rect x="50" y="390" width="180" height="80" rx="8" fill="#ef4444" stroke="#dc2626" stroke-width="2"/>
        <text x="140" y="415" text-anchor="middle" fill="white" font-size="15" font-weight="600">调用翻译API</text>
        <text x="140" y="435" text-anchor="middle" fill="white" font-size="12">翻译中文内容</text>
        <text x="140" y="452" text-anchor="middle" fill="white" font-size="12">"欢迎使用"→"Welcome"</text>
        
        <!-- 箭头从翻译到缓存 -->
        <line x1="230" y1="430" x2="320" y2="430" stroke="#1a1a1a" stroke-width="2" marker-end="url(#arrowhead)"/>
        
        <!-- 缓存框 -->
        <rect x="320" y="390" width="180" height="80" rx="8" fill="#10b981" stroke="#059669" stroke-width="2"/>
        <text x="410" y="415" text-anchor="middle" fill="white" font-size="15" font-weight="600">保存翻译文件</text>
        <text x="410" y="435" text-anchor="middle" fill="white" font-size="12">缓存到服务器</text>
        <text x="410" y="452" text-anchor="middle" fill="white" font-size="12">lang/en/docs.json</text>
        
        <!-- 右侧分支: 存在 -->
        <line x1="240" y1="280" x2="580" y2="280" stroke="#1a1a1a" stroke-width="2"/>
        <line x1="580" y1="280" x2="580" y2="390" stroke="#1a1a1a" stroke-width="2" marker-end="url(#arrowhead)"/>
        <text x="560" y="270" fill="#059669" font-size="14" font-weight="600">是</text>
        
        <rect x="570" y="390" width="180" height="80" rx="8" fill="#10b981" stroke="#059669" stroke-width="2"/>
        <text x="660" y="415" text-anchor="middle" fill="white" font-size="15" font-weight="600">直接加载文件</text>
        <text x="660" y="435" text-anchor="middle" fill="white" font-size="12">读取已缓存翻译</text>
        <text x="660" y="452" text-anchor="middle" fill="white" font-size="12">快速响应</text>
        
        <!-- 汇聚到显示 -->
        <line x1="410" y1="470" x2="410" y2="500" stroke="#1a1a1a" stroke-width="2"/>
        <line x1="660" y1="470" x2="660" y2="500" stroke="#1a1a1a" stroke-width="2"/>
        <line x1="410" y1="500" x2="535" y2="500" stroke="#1a1a1a" stroke-width="2" marker-end="url(#arrowhead)"/>
        <line x1="660" y1="500" x2="535" y2="500" stroke="#1a1a1a" stroke-width="2" marker-end="url(#arrowhead)"/>
        
        <!-- 最终显示 -->
        <rect x="320" y="510" width="200" height="70" rx="8" fill="#1a1a1a" stroke="#000" stroke-width="2"/>
        <text x="420" y="540" text-anchor="middle" fill="white" font-size="16" font-weight="600">显示翻译页面</text>
        <text x="420" y="560" text-anchor="middle" fill="#10b981" font-size="13">✓ 用户看到英文版本</text>
    </svg>
</div>

<div class="note">
    <strong>核心优势：</strong>开发者只需维护中文代码，系统自动处理所有语言翻译。首次访问需翻译(稍慢)，之后直接加载缓存(极快)。
</div>

<h2 data-i18n="section_design">多语言使用方式</h2>

<h3 data-i18n="step2">1. 添加翻译标签</h3>
<p data-i18n="step3_desc">在HTML文件中，需要翻译的内容添加 <code>data-i18n</code> 标签：</p>
<pre><code>&lt;p data-i18n="welcome"&gt;欢迎使用&lt;/p&gt;</code></pre>
<p data-i18n="step3_desc">当英文用户访问时，"欢迎使用" 自动显示为 "Welcome"，不需要翻译的内容，不添加 [data-i18n] 标签即可保持原始中文。</p>

<h3 data-i18n="step2">2. 复用标签(重要特性)</h3>
<p data-i18n="step3_desc">ShipLang支持复用相同的 data-i18n 标签值，系统会自动区分不同内容：</p>
<pre><code>&lt;p data-i18n="k"&gt;你好&lt;/p&gt;
&lt;p data-i18n="k"&gt;不错&lt;/p&gt;</code></pre>
<div class="tip">
    <strong>智能识别：</strong>虽然都使用标签 "k"，系统会自动转换为 k_你好、k_不错，确保 "你好" 翻译为 "Hello"，"不错" 翻译为 "Good"，而不是都翻译成同一个词。
</div>



        
        <h3 data-i18n="step2">3. 手动修改自动翻译</h3>
<p data-i18n="step3_desc">如果对系统自动翻译的内容不满意，可以手动修改翻译文件，下方是举例：</p>

<p><strong>第1步：找到翻译不满意的标签值，例如[docs]</strong></p>
<p>打开 [h5_html/index.php]，找到下方代码，复制标签值：[docs]</p>
<pre><code>&lt;a href="/docs" data-i18n="docs"&gt;文档&lt;/a&gt;</code></pre>


<p><strong>第2步：找到翻译文件</strong></p>
<p>打开 [lang/en/index.json]，找到：[docs_c0eb5cb77d8024b6]修改里面的值[document]修改为->[aidocs]按Ctrl+S保存即可刷新网页，页面显示已更新为 "aidocs"</p>
<pre><code>"docs_c0eb5cb77d8024b6": "document"</code></pre>


  
        
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