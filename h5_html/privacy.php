<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 隐私政策</title>
    <meta data-i18n="description" name="description" content="ShipLang 隐私政策及数据保护说明">
    <!-- 买ai会员账号联系：xlh3650 -->
    <script id="schema-org-site" type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "Organization",
                "@id": "https://shiplang.com/#organization",
                "name": "ShipLang",
                "url": "https://shiplang.com",
                "email": "kf@shiplang.com",
                "logo": "https://shiplang.com/assets/logo.png",
                "contactPoint": [{
                    "@type": "ContactPoint",
                    "contactType": "customer support",
                    "email": "kf@shiplang.com"}
                ]
            },{
                "@type": "WebSite",
                "@id": "https://shiplang.com/#website",
                "url": "https://shiplang.com/",
                "name": "ShipLang",
                "publisher": {"@id": "https://shiplang.com/#organization"}
            },{
                "@type": "SoftwareApplication",
                "@id": "https://shiplang.com/#softwareapplication",
                "name": "ShipLang",
                "url": "https://shiplang.com",
                "applicationCategory": "DeveloperApplication",
                "operatingSystem": "Web",
                "offers": {
                    "@type": "Offer",
                    "price": "0",
                    "priceCurrency": "USD"
                },
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": 4.9,
                    "reviewCount": 13629,
                    "bestRating": 5,
                    "worstRating": 1
                },
                "review": [
                    {
                        "@type": "Review",
                        "author": {"@type": "Person","name": "Z*** (Indie Developer)"},
                        "datePublished": "2025-04-10",
                        "name": "Multilingual is no longer a pain point",
                        "reviewBody": "Maintaining multiple translation files used to be exhausting. With ShipLang I only maintain one source file and all languages sync automatically. Saves so much time.",
                        "reviewRating": {"@type": "Rating","ratingValue": 5,"bestRating": 5,"worstRating": 1}
                    },{
                        "@type": "Review",
                        "author": {"@type": "Person","name": "W*** (Full-stack Engineer)"},
                        "datePublished": "2025-04-05",
                        "name": "Auth and payments work out of the box",
                        "reviewBody": "Login, registration, and payment callbacks are all built in. I just ask AI to generate the business pages and ship. No more reinventing the wheel.",
                        "reviewRating": {"@type": "Rating","ratingValue": 5,"bestRating": 5,"worstRating": 1}
                    },{
                        "@type": "Review",
                        "author": {"@type": "Person","name": "L*** (Product Manager)"},
                        "datePublished": "2025-03-28",
                        "name": "Perfect for non-professional developers",
                        "reviewBody": "I'm not a professional engineer, but with ShipLang and the included AI prompts I actually launched a multilingual website. Way beyond my expectations.",
                        "reviewRating": {"@type": "Rating","ratingValue": 5,"bestRating": 5,"worstRating": 1}
                    },{
                        "@type": "Review",
                        "author": {"@type": "Person","name": "H*** (Content Creator)"},
                        "datePublished": "2025-03-20",
                        "name": "Dramatically fewer tokens consumed",
                        "reviewBody": "Routing, auth, and i18n are handled by the framework, so every AI conversation stays focused on business logic. Cleaner context, higher quality output.",
                        "reviewRating": {"@type": "Rating","ratingValue": 5,"bestRating": 5,"worstRating": 1}
                    },{
                        "@type": "Review",
                        "author": {"@type": "Person","name": "C*** (Global Startup Founder)"},
                        "datePublished": "2025-03-15",
                        "name": "The go-to framework for global products",
                        "reviewBody": "Multilingual, payments, and user system all in one place. It lets me stay focused on product differentiation instead of infrastructure.",
                        "reviewRating": {"@type": "Rating","ratingValue": 5,"bestRating": 5,"worstRating": 1}
                    },{
                        "@type": "Review",
                        "author": {"@type": "Person","name": "M*** (Student Developer)"},
                        "datePublished": "2025-03-08",
                        "name": "Clear docs, fast onboarding",
                        "reviewBody": "The universal prompt file is incredibly useful. Following the docs I had a full multilingual site running within a day.",
                        "reviewRating": {"@type": "Rating","ratingValue": 4,"bestRating": 5,"worstRating": 1}
                    },{
                        "@type": "Review",
                        "author": {"@type": "Person","name": "R*** (SaaS Founder)"},
                        "datePublished": "2025-02-25",
                        "name": "Solid core, hoping for more templates",
                        "reviewBody": "The core features are rock solid. Would love to see more industry-specific starter templates to spin up new projects even faster.",
                        "reviewRating": {"@type": "Rating","ratingValue": 4,"bestRating": 5,"worstRating": 1}
                    }
                ]
            },{
                "@type": "FAQPage",
                "@id": "https://shiplang.com/#faqpage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "Is ShipLang free?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The core framework is completely free and open source. You can download, use, and modify it freely. Some advanced features or templates may be available as paid options — check the pricing page for details."
                        }
                    },{
                        "@type": "Question",
                        "name": "Do I need a programming background to use ShipLang?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Not at all. ShipLang is built for the AI era. With the included universal prompt file, product managers, designers, and content creators can ship a full multilingual website using AI — no deep engineering knowledge required."
                        }
                    },{
                        "@type": "Question",
                        "name": "Which languages does the auto-translation support?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "ShipLang currently ships with built-in support for English, Japanese, and Korean, with more on the way. Maintain one source file and every language version is generated and kept in sync automatically."
                        }
                    },{
                        "@type": "Question",
                        "name": "Do I need to configure Stripe myself?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "No. ShipLang has the full Stripe payment flow built in — subscriptions, one-time payments, multi-currency, and Webhook callbacks. Just add your Stripe key and payments are ready to go."
                        }
                    },{
                        "@type": "Question",
                        "name": "What authentication methods are supported?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Google OAuth, email/password, and Magic Link are all built in. Session management and token refresh are handled by the framework — ready out of the box."
                        }
                    },{
                        "@type": "Question",
                        "name": "Where do I download the universal prompt file?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Find it in the Quick Start section of the docs. Send it to any major AI — Claude, GPT-4, or Cursor — and it will immediately understand your entire stack. No more re-explaining project structure every session."
                        }
                    }
                ]
            }
        ]
    }
    </script>
    <!-- SEO基础标签 -->
    <meta data-i18n="keywords" name="keywords" content="ShipLang隐私政策,数据保护,用户隐私,信息安全,隐私条款,GDPR合规">
    <meta name="author" content="ShipLang">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://shiplang.com/privacy">
    <meta property="og:type" content="article"><!-- Open Graph标签 -->
    <meta property="og:url" content="https://shiplang.com/privacy">
    <meta data-i18n="og_title" property="og:title" content="ShipLang 隐私政策 - 数据保护说明">
    <meta data-i18n="og_description" property="og:description" content="ShipLang 隐私政策及数据保护说明，了解我们如何收集、使用和保护您的个人信息">
    <meta property="og:site_name" content="ShipLang">
    <meta name="twitter:card" content="summary"><!-- Twitter Card标签 -->
    <meta data-i18n="twitter_title" name="twitter:title" content="ShipLang 隐私政策">
    <meta data-i18n="twitter_description" name="twitter:description" content="了解我们如何收集、使用和保护您的个人信息">
    
    
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:900px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:24px;letter-spacing:-0.03em}.intro{font-size:19px;color:#666;margin-bottom:40px;font-weight:300;line-height:1.6}.update-info{background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;padding:20px 28px;margin-bottom:50px}.update-info p{font-size:15px;color:#666;margin:0}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h3{font-size:22px;font-weight:400;margin:40px 0 16px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.section{margin-bottom:50px}ol,ul{margin:16px 0 16px 24px;color:#666}ol li,ul li{margin-bottom:12px;font-size:17px;font-weight:300}.note{background:#fffbf0;border-left:3px solid #f5c518;padding:20px 24px;margin:32px 0;border-radius:6px}.note strong{color:#1a1a1a;font-weight:600}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}}</style>
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
        <h1 data-i18n="page_title">隐私政策</h1>
        <p class="intro" data-i18n="page_intro">ShipLang 重视您的隐私权。本隐私政策说明我们如何收集、使用和保护您的个人信息</p>

        <div class="update-info">
            <p><strong data-i18n="last_update">最后更新日期：</strong><span data-i18n="update_date">2026年2月5日</span></p>
        </div>

        <div class="section">
            <h2 data-i18n="section1_title">1. 服务提供方信息</h2>
            <ul>
                <li data-i18n="provide_item1">适用服务：ShipLang 开源技术栈和开发工具</li>
                <li data-i18n="provide_item2">服务提供方为shiplang.com</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section2_title">2. 信息收集</h2>
            <h3 data-i18n="section2_sub1">我们收集的信息</h3>
            <p data-i18n="section2_desc1">在您使用 ShipLang 服务时，我们可能收集以下类型的信息：</p>
            <ul>
                <li data-i18n="info_item1">账户信息：包括您的电子邮件地址、用户名、密码、手机号、姓名等</li>
                <li data-i18n="info_item2">使用数据：包括您如何使用我们的服务、访问时间、页面浏览记录</li>
                <li data-i18n="info_item3">技术信息：包括IP地址、浏览器类型、设备信息和操作系统</li>
                <li data-i18n="info_item4">支付信息：处理付费服务时的交易数据（由第三方支付处理商处理）</li>
            </ul>

            <h3 data-i18n="section2_sub2">信息收集方式</h3>
            <p data-i18n="section1_desc2">我们通过以下方式收集信息：</p>
            <ul>
                <li data-i18n="collect_item1">您直接提供的信息（如注册账户时）</li>
                <li data-i18n="collect_item2">自动收集的信息（如Cookie和类似技术）</li>
                <li data-i18n="collect_item3">来自第三方的信息（如社交媒体登录）</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section3_title">3. 信息使用</h2>
            <p data-i18n="section3_desc">我们使用收集的信息用于以下目的：</p>
            <ul>
                <li data-i18n="use_item1">提供、维护和改进我们的服务</li>
                <li data-i18n="use_item2">处理交易和发送相关通知</li>
                <li data-i18n="use_item3">回应您的评论、问题和请求，并提供客户服务</li>
                <li data-i18n="use_item4">发送技术通知、更新、安全警报和支持消息</li>
                <li data-i18n="use_item5">监测和分析使用趋势，以改善用户体验</li>
                <li data-i18n="use_item6">检测、预防和解决技术问题及安全威胁</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section4_title">4. 信息共享</h2>
            <p data-i18n="section4_desc1">我们不会出售您的个人信息。我们可能在以下情况下共享您的信息：</p>
            <ul>
                <li data-i18n="share_item1"><strong data-i18n="share_title1">服务提供商：</strong><span data-i18n="share_desc1">与协助我们提供服务的第三方服务提供商</span></li>
                <li data-i18n="share_item2"><strong data-i18n="share_title2">法律要求：</strong><span data-i18n="share_desc2">当法律要求或为保护我们的权利时</span></li>
                <li data-i18n="share_item3"><strong data-i18n="share_title3">业务转让：</strong><span data-i18n="share_desc3">在合并、收购或资产出售的情况下</span></li>
                <li data-i18n="share_item4"><strong data-i18n="share_title4">征得同意：</strong><span data-i18n="share_desc4">在您明确同意的其他情况下</span></li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section5_title">5. 数据安全</h2>
            <p data-i18n="section5_desc1">我们采取合理的措施来保护您的个人信息免受未经授权的访问、使用或披露。这些措施包括：</p>
            <ul>
                <li data-i18n="security_item1">数据加密传输和存储</li>
                <li data-i18n="security_item2">定期安全评估和更新</li>
                <li data-i18n="security_item3">访问控制和员工培训</li>
                <li data-i18n="security_item4">安全备份和灾难恢复计划</li>
            </ul>
            <div class="note">
                <p data-i18n="security_note">请注意：尽管我们采取了合理的安全措施，但没有任何互联网传输或电子存储方法是100%安全的</p>
            </div>
        </div>

        <div class="section">
            <h2 data-i18n="section6_title">6. 您的权利</h2>
            <p data-i18n="section6_desc">根据适用的数据保护法律，您可能拥有以下权利：</p>
            <ul>
                <li data-i18n="right_item1"><strong data-i18n="right_title1">访问权：</strong><span data-i18n="right_desc1">请求访问我们持有的关于您的个人信息</span></li>
                <li data-i18n="right_item2"><strong data-i18n="right_title2">更正权：</strong><span data-i18n="right_desc2">请求更正不准确的个人信息</span></li>
                <li data-i18n="right_item3"><strong data-i18n="right_title3">删除权：</strong><span data-i18n="right_desc3">请求删除您的个人信息</span></li>
                <li data-i18n="right_item4"><strong data-i18n="right_title4">限制处理权：</strong><span data-i18n="right_desc4">请求限制对您个人信息的处理</span></li>
                <li data-i18n="right_item5"><strong data-i18n="right_title5">数据可携权：</strong><span data-i18n="right_desc5">请求以结构化、常用格式接收您的数据</span></li>
                <li data-i18n="right_item6"><strong data-i18n="right_title6">反对权：</strong><span data-i18n="right_desc6">反对处理您的个人信息</span></li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section7_title">7. Cookie 和追踪技术</h2>
            <p data-i18n="section7_desc1">我们使用 Cookie 和类似的追踪技术来追踪我们服务上的活动并保存某些信息。Cookie 用于：</p>
            <ul>
                <li data-i18n="cookie_item1">记住您的偏好和设置</li>
                <li data-i18n="cookie_item2">了解您如何使用我们的服务</li>
                <li data-i18n="cookie_item3">提供个性化内容和广告</li>
                <li data-i18n="cookie_item4">改善服务性能和用户体验</li>
            </ul>
            <p data-i18n="section6_desc2">您可以通过浏览器设置管理 Cookie 偏好，但这可能影响某些功能的使用。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section8_title">8. 儿童隐私</h2>
            <p data-i18n="section8_desc">我们的服务不面向13岁以下的儿童。我们不会有意收集13岁以下儿童的个人信息。如果您是家长或监护人，并且知道您的孩子向我们提供了个人信息，请联系我们。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section9_title">9. 国际数据传输</h2>
            <p data-i18n="section9_desc">您的信息可能会被传输到您所在国家/地区以外的地方进行处理。我们将采取措施确保您的数据根据本隐私政策得到安全处理，并符合适用的数据保护法律。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section10_title">10. 隐私政策更新</h2>
            <p data-i18n="section10_desc">我们可能会不时更新本隐私政策。我们将通过在本页面发布新的隐私政策来通知您任何更改。更改在发布后立即生效。我们建议您定期查看本隐私政策以了解任何更改。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section11_title">11. 联系我们</h2>
            <p data-i18n="section11_desc">如果您对本隐私政策有任何问题或疑虑，请通过以下方式联系我们：</p>
            <ul>
                <li data-i18n="contact_email">电子邮件：kf@shiplang.com</li>
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