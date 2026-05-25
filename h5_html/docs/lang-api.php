<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">API翻译使用文档</title>
    <meta data-i18n="description" name="description" content="ShipLang API翻译使用文档">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <!-- 买ai会员账号联系：xlh3650 -->
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:900px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:40px;letter-spacing:-0.03em;padding-bottom:20px;border-bottom:1px solid #e8e8e8}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h3{font-size:20px;font-weight:400;margin:0 0 12px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.note{background:#fffbf0;border-left:3px solid #f5c518;padding:20px 24px;margin:32px 0;border-radius:6px}.note strong{color:#1a1a1a;font-weight:600}.success{background:#f0fdf4;border-left:3px solid #10b981;padding:20px 24px;margin:32px 0;border-radius:6px}.example{margin:32px 0;background:#fafafa;border:1px solid #f0f0f0;padding:32px;border-radius:8px;transition:all .3s}.example:hover{background:#f5f5f5;border-color:#e8e8e8}.example h3{margin-bottom:12px}.example p{margin-bottom:16px}pre{background:#1a1a1a;color:#e0e0e0;padding:24px;border-radius:6px;overflow-x:auto;font-size:14px;line-height:1.6;margin:16px 0}code{font-family:'Courier New',monospace;background:#f5f5f5;padding:2px 6px;border-radius:3px;font-size:14px;color:#1a1a1a}pre code{background:transparent;padding:0;color:#e0e0e0}ul{margin-left:24px;color:#666}ul li{margin-bottom:8px;font-size:16px}ul li code{font-size:13px}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}.example{padding:24px}pre{padding:16px;font-size:13px}}</style>
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
        <h1 data-i18n="page_title">API翻译使用文档</h1>
        
        <div class="note">
            <strong data-i18n="note_title">说明：</strong>
            <span data-i18n="note_content">使用 <code>Db::return_json_exit()</code> 
            
            <span data-i18n="zhidinglujing">方法时，可以通过第二个参数指定需要翻译的字段路径。</span></span>
        </div>

        <h2 data-i18n="basic_usage">基础用法</h2>

        <div class="example">
            <h3 data-i18n="example1_title">1. 翻译特定字段</h3>
            <p data-i18n="example1_desc">翻译 pricing_plans 下的所有中文，和message 的值：</p>
            <pre><code>Db::return_json_exit([
    'code' => 200,
    'message' => '成功',
    'data' => [
        'pricing_plans' => [
            'basic' => [
                'name' => '基础套餐',
                'price' => 99,
                'features' => ['功能一', '功能二']
            ],
            'pro' => [
                'name' => '专业套餐',
                'price' => 299,
                'features' => ['高级功能', '优先支持']
            ]
        ],
        'user' => [
            'name' => '张三',
            'profile' => [
                'city' => '北京',
                'bio' => '个人简介'
            ]
        ],
        'aaa' => '你好'
    ]
], ['data.pricing_plans.*', 'message']);</code></pre>
        </div>

        <div class="example">
            <h3 data-i18n="example2_title">2. 翻译指定路径和子路径</h3>
            <p data-i18n="example2_desc">翻译特定字段 name 和 pro 下面所有中文：</p>
            <pre><code>Db::return_json_exit([
    'code' => 200,
    'message' => '成功',
    'data' => [
        'pricing_plans' => [
            'basic' => [
                'name' => '基础套餐',
                'price' => 99,
                'features' => ['功能一', '功能二']
            ],
            'pro' => [
                'name' => '专业套餐',
                'price' => 299,
                'features' => ['高级功能', '优先支持']
            ]
        ],
        'user' => [
            'name' => '张三',
            'profile' => [
                'city' => '北京',
                'bio' => '个人简介'
            ]
        ],
        'aaa' => '你好'
    ]
], ['data.pricing_plans.basic.name', 'data.pricing_plans.pro.*']);</code></pre>
        </div>

        <div class="example">
            <h3 data-i18n="example3_title">3. 翻译整个data对象</h3>
            <p data-i18n="example3_desc">使用通配符翻译 data下的所有内容：</p>
            <pre><code>Db::return_json_exit([
    'code' => 200,
    'message' => '成功',
    'data' => [
        'pricing_plans' => [
            'basic' => [
                'name' => '基础套餐',
                'price' => 99,
                'features' => ['功能一', '功能二']
            ],
            'pro' => [
                'name' => '专业套餐',
                'price' => 299,
                'features' => ['高级功能', '优先支持']
            ]
        ],
        'user' => [
            'name' => '张三',
            'profile' => [
                'city' => '北京',
                'bio' => '个人简介'
            ]
        ],
        'aaa' => '你好'
    ]
], ['data.*']);</code></pre>
        </div>

        <div class="example">
            <h3 data-i18n="example4_title">4. 不翻译（默认）</h3>
            <p data-i18n="example4_desc">省略第二个参数，不进行任何翻译：</p>
            <pre><code>Db::return_json_exit([
    'code' => 200,
    'message' => '成功',
    'data' => [
        'pricing_plans' => [
            'basic' => [
                'name' => '基础套餐',
                'price' => 99,
                'features' => ['功能一', '功能二']
            ],
            'pro' => [
                'name' => '专业套餐',
                'price' => 299,
                'features' => ['高级功能', '优先支持']
            ]
        ],
        'user' => [
            'name' => '张三',
            'profile' => [
                'city' => '北京',
                'bio' => '个人简介'
            ]
        ],
        'aaa' => '你好'
    ]
]);</code></pre>
        </div>

        <h2 data-i18n="syntax_title">路径语法说明</h2>
        
        <div class="success">
            <ul>
                <li><code>field</code> - <span data-i18n="syntax1">翻译顶层字段</span></li>
                <li><code>data.field</code> - <span data-i18n="syntax2">翻译嵌套字段</span></li>
                <li><code>data.*</code> - <span data-i18n="syntax3">翻译对象下所有字段</span></li>
                <li><code>data.array.*</code> - <span data-i18n="syntax4">翻译数组/对象下所有内容</span></li>
            </ul>
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