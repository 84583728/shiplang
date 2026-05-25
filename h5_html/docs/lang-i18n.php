<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">多语言示例网站</title>
    <!-- 买ai会员账号联系：xlh3650 -->
    <meta data-i18n="keywords" name="keywords" content="多语言示例网站，seo关键词标签翻译示例">
    <meta data-i18n="description" name="description" content="多语言示例网站，seo介绍标签翻译示例">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:1100px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:24px;letter-spacing:-0.03em}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 32px;letter-spacing:-0.02em}h3{font-size:18px;font-weight:400;margin:0 0 12px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.intro{padding-bottom:40px;border-bottom:1px solid #f0f0f0}.demo-section{margin:40px 0}.demo-item{border:1px solid #f0f0f0;border-radius:8px;padding:32px;margin-bottom:24px;background:#fafafa;transition:all .3s}.demo-item:hover{background:#f5f5f5;border-color:#e8e8e8}code{display:block;background:#fff;padding:16px;border-radius:6px;font-family:'Courier New',monospace;font-size:13px;margin:16px 0;overflow-x:auto;border:1px solid #e8e8e8;color:#555}.result{background:#fff;padding:20px;border-left:2px solid #e0e0e0;margin:16px 0;border-radius:4px}input[type="text"]{width:100%;max-width:320px;padding:10px 14px;border:1px solid #e0e0e0;border-radius:6px;font-size:15px;font-family:'Crimson Pro',serif;transition:border-color .3s}input[type="text"]:focus{outline:0;border-color:#ccc}button{background:#1a1a1a;color:#fff;border:0;padding:10px 24px;border-radius:6px;cursor:pointer;margin:5px 5px 5px 0;font-size:15px;font-family:'Crimson Pro',serif;font-weight:400;transition:all .3s}button:hover{background:#000;transform:translateY(-1px)}.feature-list{list-style:none;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;margin:20px 0}.feature-list li{padding:16px;background:#fff;border-radius:6px;border:1px solid #f0f0f0;font-size:15px}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}.demo-item{padding:24px}}</style>
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
        <section class="intro">
            <h1 data-i18n="page_title">多语言示例网站</h1>
            
            <p data-i18n="intro_p1">ShipLang架构的特点是，你只需要在后台书写一种语言的网页，系统会自动译解为多种</p>
            
            <p data-i18n="intro_p2">使用方法很简单：在需要翻译的元素上添加 data-i18n="翻译键名" 属性即可。系统会自动翻译带data-i18n 标记的元素</p>
            <p data-i18n="intro_p3">Js文本翻译原理：Js向页面传递文本[哈喽]会读取[data-i18n="哈喽"]的译解结果</p>
            <p data-i18n="intro_p3">你需要将本页面切换为英语查看，下方展示了各种常见场景的使用方式，每个示例都包含代码和实际效果演示。</p>
            <p data-i18n="intro_p4">其中Html代码框组件【pre】【code】没办法被data-i18n标签翻译,如果这两个加入了i18n可能会报错</p>
        </section>

        <section class="demo-section">
            <h2 data-i18n="demo_title">多语言使用方式集中展示</h2>

            <div class="demo-item">
                <h3>1.只要在标签加入[data-i18n]即代表该内容需要被翻译，示例：</h3>
                <code>&lt;p data-i18n="welcome"&gt;欢迎使用&lt;/p&gt;</code>
                <div class="result">
                    <p data-i18n="welcome">欢迎使用</p>
                </div>
            </div>

            <div class="demo-item">
                <h3>2. 当[data-i18n]的值相同，系统也会容错处理，不会翻译为相同文本</h3>
                <code>&lt;p data-i18n="k"&gt;你好&lt;/p&gt;&lt;p data-i18n="k"&gt;不错&lt;/p&gt;</code>
                <div class="result">
                    <p data-i18n="k">你好</p>
                    <p data-i18n="k">不错</p>
                </div>
            </div>

            <div class="demo-item">
                <h3>3. 无[data-i18n]标记文本（代表不翻译）</h3>
                <code>&lt;span&gt;这段文本没有data-i18n标记，不会被翻译&lt;/span&gt;</code>
                <div class="result">
                    <span>这段文本没有data-i18n标记，不会被翻译</span>
                </div>
            </div>

            <div class="demo-item">
                <h3>4. 输入框Placeholder翻译兼容</h3>
                <code>&lt;input data-i18n="email_placeholder" placeholder="请输入邮箱"&gt;</code>
                <div class="result">
                    <input type="text" data-i18n="email_placeholder" placeholder="请输入您的邮箱地址">
                </div>
            </div>

            <div class="demo-item">
                <h3>5. 按钮文本，点击按钮通过js修改文本翻译</h3>
                <code>&lt;button data-i18n="btn_submit"&gt;修改文本&lt;/button&gt;</code>
                <div class="result">
                    <button id="xgwb11" data-i18n="btn_submit">修改文本</button>
                    <p id="fy111">主要原理是基于隐藏标签，假设隐藏标签的文本存在要翻译的文本就会读取隐藏标签的翻译之后的文本，实现翻译</p>
                </div>
            </div>

            <div class="demo-item">
                <h3>6. 嵌套元素</h3>
                <code>&lt;div&gt;&lt;p data-i18n="nested"&gt;这是嵌套在div中的文本&lt;/p&gt;&lt;/div&gt;</code>
                <div class="result">
                    <div><p data-i18n="nested">这是嵌套在div中的文本</p></div>
                </div>
            </div>

            <div class="demo-item">
                <h3>7. JavaScript动态内容,代码中是中文，当用户切换英语也会显示英语</h3>
                <code>document.getElementById('btn').addEventListener('click',function(){alert('这是JavaScript弹窗内容');});</code>
                <div class="result">
                    <button id="alertBtn" data-i18n="btn_test">点击测试弹窗</button>
                </div>
            </div>

            <div class="demo-item">
                <h3>8. PHP动态列表</h3>
                <code>&lt;?php foreach ($qx_list as $i) {echo '&lt;li data-i18n="item"&gt;' . $i['text'] . '&lt;/li&gt;';}?&gt;</code>
                <div class="result">
                    <ul class="feature-list">
                        <?php foreach ($qx_list as $i) {echo '<li data-i18n="item">' . $i['text'] . '</li>';}?>
                    </ul>
                </div>
            </div>

            <div class="demo-item">
                <h3>9. Meta标签SEO</h3>
                <code>&lt;title data-i18n="title"&gt;标题&lt;/title&gt;&lt;meta data-i18n="keywords" name="keywords" content="关键词"&gt;&lt;meta data-i18n="description" name="description" content="描述"&gt;</code>
                <div class="result">
                    <p data-i18n="seo_note">Meta标签已在页面head中设置，用于渲染seo搜索引擎排名</p>
                </div>
            </div>
        </section>
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

    <div style="display: none;">
        <span data-i18n="这是JavaScript弹窗内容">这是JavaScript弹窗内容</span>
        <span data-i18n="主要原理是基于隐藏标签，假设隐藏标签的文本存在要翻译的文本就会读取隐藏标签的翻译之后的文本，实现翻译">主要原理是基于隐藏标签，假设隐藏标签的文本存在要翻译的文本就会读取隐藏标签的翻译之后的文本，实现翻译</span>
    </div>

    <script>
        document.getElementById('alertBtn').addEventListener('click', function() {
            alert('这是JavaScript弹窗内容');
        });
        document.getElementById('xgwb11').addEventListener('click', function() {
            document.getElementById('fy111').textContent = '主要原理是基于隐藏标签，假设隐藏标签的文本存在要翻译的文本就会读取隐藏标签的翻译之后的文本，实现翻译';
        });
    </script>
</body>
</html>