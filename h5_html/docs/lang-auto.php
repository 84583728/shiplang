<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 框架补充文档</title>
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
        <h1 data-i18n="page_title">框架补充文档</h1>
        <p data-i18n="page_intro">框架与设计思路与文档</p>
        
       
        

        <h3 data-i18n="step2">ShipLang 多语言下拉框</h3>
        <p data-i18n="page_intro">多语言列表储存在，根目录[index.php]名为[$qx_lang]变量中</p>
        <p data-i18n="page_intro">其中[English|1]，|1代表显示该语言，|0代表存在该语言但不显示</p>
        <p data-i18n="step2_desc">多语言下拉框会自动载入，其详细设计细节在通用提示词中</p>
        
        
        <h3 data-i18n="step2">ShipLang 多语言翻译储存机制</h3>
        <p data-i18n="page_intro">多语言翻译文件储存在文件夹[lang]</p>
        <p data-i18n="page_intro">只需要将lang文件夹内的文件夹全部清空，即可实现重新拉取翻译Api</p>
        <p data-i18n="step2_desc">若翻译遇到问题，您可以在lang文件夹找到对应的语言目录找到对应的翻译结果手动修改成正确翻译结果</p>
        

       <h2 data-i18n="supplement_title">提示词补充部分</h2>

<h3 data-i18n="supplement_s1_title">一、JS 编写规范</h3>
<p data-i18n="supplement_s1_desc">禁用 jQuery、箭头函数简写、自执行函数。</p>

<h3 data-i18n="supplement_s2_title">二、多语言翻译</h3>

<h3 data-i18n="supplement_s23_title">2.3 动态文本翻译标记（谨慎使用）</h3>
<pre><code>&lt;span id="g"&gt;测试&lt;/span&gt;
&lt;div style="display:none"&gt;&lt;!-- 隐藏翻译字典 --&gt;
  &lt;span data-i18n="哈喽"&gt;hello&lt;/span&gt;
  &lt;span data-i18n="不错"&gt;good&lt;/span&gt;
&lt;/div&gt;
&lt;script&gt;
  // JS里写中文，系统自动查字典翻译
  alert('哈喽'); // 自动读取翻译为 hello
  document.getElementById('g').textContent = '不错'; // 自动替换成 good
&lt;/script&gt;</code></pre>
<div class="note"><strong data-i18n="supplement_note_label">⚠️ 注意：</strong><span data-i18n="supplement_s23_note">只在必须用 JS 动态显示时才这样做，非必要尽可能少使用 JS。</span></div>

<h3 data-i18n="supplement_s24_title">2.4 多语言页面跳转（需保持当前语言）</h3>
<pre><code>&lt;!-- HTML 跳转，系统自动处理，直接写相对路径即可 --&gt;
&lt;a href="/home" data-i18n="h"&gt;首页&lt;/a&gt;
&lt;!-- 当前中文页 → /zh/home --&gt;
&lt;!-- 当前英文页 → /en/home --&gt;</code></pre>
<pre><code>// JS 跳转，需手动拼接语言代码
window.location.href = '/' + document.documentElement.lang + '/about';
// 当前中文页 → /zh/about
// 当前英文页 → /en/about</code></pre>

<h3 data-i18n="supplement_s3_title">三、支付与登录</h3>
<p data-i18n="supplement_s3_desc">登录与支付为非必须功能，只有用户明确要求时才接入。需用户说明在什么情况下显示登录和支付、触发条件是什么。如果描述不够完整，可以选择暂不加入。</p>
<pre><code>window.Login_ShipLang();   // 拉起登录

window.OpenPay_ShipLang(); // 拉起支付

if (window.IsPay_ShipLang()) {
    // 是会员
} else {
    // 非会员
}</code></pre>

<h3 data-i18n="supplement_s4_title">四、视觉设计规范</h3>
<ul>
  <li><strong data-i18n="supplement_s4_color_label">色彩：</strong><span data-i18n="supplement_s4_color">文字 <code>#333</code>，边框 <code>#ddd</code>，背景 <code>#fff</code></span></li>
  <li><strong data-i18n="supplement_s4_spacing_label">间距：</strong><span data-i18n="supplement_s4_spacing">使用 8 的倍数（8px、16px、24px）</span></li>
  <li><strong data-i18n="supplement_s4_font_label">字体：</strong><span data-i18n="supplement_s4_font_intro">从 Google Fonts 引入</span>
    <ul>
      <li data-i18n="supplement_s4_font_logo">Logo：优雅手写风字体，22px</li>
      <li data-i18n="supplement_s4_font_heading">标题：衬线字体（易读、正式）</li>
      <li data-i18n="supplement_s4_font_body">正文：易读衬线，16px，行高 1.6</li>
      <li data-i18n="supplement_s4_font_nav">导航：15px，<code>#666</code></li>
    </ul>
  </li>
  <li><strong data-i18n="supplement_s4_radius_label">圆角：</strong><span data-i18n="supplement_s4_radius">统一 <code>6px</code></span></li>
  <li><strong data-i18n="supplement_s4_principle_label">原则：</strong><span data-i18n="supplement_s4_principle">留白 &gt; 装饰，禁用 emoji，少用图片，Logo 用文字不用图片</span></li>
</ul>
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