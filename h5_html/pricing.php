<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 价格方案</title>
    <meta data-i18n="description" name="description" content="ShipLang 翻译服务价格方案，灵活的字符数套餐选择">
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
    <meta data-i18n="keywords" name="keywords" content="ShipLang价格,翻译服务价格,多语言翻译套餐,AI翻译费用,网站翻译收费,国际化服务定价">
    <meta name="author" content="ShipLang">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://shiplang.com/pricing">
    <meta property="og:type" content="website"><!-- Open Graph标签 -->
    <meta property="og:url" content="https://shiplang.com/pricing">
    <meta data-i18n="og_title" property="og:title" content="ShipLang 价格方案 - 灵活的翻译服务套餐">
    <meta data-i18n="og_description" property="og:description" content="ShipLang 翻译服务价格方案，灵活的字符数套餐选择，免费版、专业版、企业版满足不同需求">
    <meta property="og:site_name" content="ShipLang">
    <meta name="twitter:card" content="summary"><!-- Twitter Card标签 -->
    <meta data-i18n="twitter_title" name="twitter:title" content="ShipLang 价格方案">
    <meta data-i18n="twitter_description" name="twitter:description" content="灵活的翻译服务套餐选择，从免费版到企业版">
    
    
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:1100px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:16px;letter-spacing:-0.03em;text-align:center}.intro{font-size:19px;color:#666;margin-bottom:20px;font-weight:300;text-align:center;line-height:1.6}.intro:last-of-type{margin-bottom:60px}.pricing-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;max-width:920px;margin:0 auto 60px}.pricing-card{background:#fff;border:1px solid #e8e8e8;border-radius:12px;padding:36px 28px;transition:all .3s;position:relative;display:flex;flex-direction:column}.pricing-card:hover{transform:translateY(-4px);box-shadow:0 12px 32px rgba(0,0,0,0.08);border-color:#ccc}.pricing-card.featured{border:2px solid #1a1a1a;box-shadow:0 8px 24px rgba(0,0,0,0.06)}.pricing-card.featured:hover{box-shadow:0 16px 40px rgba(0,0,0,0.12)}.badge{position:absolute;top:-12px;left:50%;transform:translateX(-50%);background:#1a1a1a;color:#fff;font-size:11px;padding:5px 14px;border-radius:4px;font-weight:400;letter-spacing:.02em}.plan-name{font-family:'Instrument Serif',serif;font-size:26px;font-weight:400;margin-bottom:12px;color:#1a1a1a;letter-spacing:-0.02em;text-align:center}.plan-desc{font-size:15px;color:#999;margin-bottom:24px;font-weight:300;text-align:center;line-height:1.5}.price-wrapper{text-align:center;margin-bottom:28px;padding-bottom:28px;border-bottom:1px solid #f0f0f0}.price{font-family:'Instrument Serif',serif;font-size:42px;font-weight:400;color:#1a1a1a;letter-spacing:-0.02em}.price-unit{font-size:16px;color:#999;font-weight:300;margin-left:4px}.characters{font-size:14px;color:#666;margin-top:8px;font-weight:300}.features{list-style:none;margin-bottom:32px;flex-grow:1}.features li{padding:10px 0;color:#666;font-size:15px;font-weight:300;display:flex;align-items:flex-start;line-height:1.5}.features li:before{content:"✓";color:#1a1a1a;font-weight:600;margin-right:10px;flex-shrink:0}.btn{display:block;padding:14px 32px;border-radius:6px;text-decoration:none;font-size:15px;font-weight:400;transition:all .3s;text-align:center;cursor:pointer;border:none;width:100%}.btn-primary{background:#1a1a1a;color:#fff}.btn-primary:hover{background:#000;transform:translateY(-2px)}.btn-secondary{background:#fff;color:#1a1a1a;border:1px solid #e0e0e0}.btn-secondary:hover{background:#f8f8f8;border-color:#ccc}.note-section{max-width:920px;margin:0 auto 60px;background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;padding:32px}.note-section h2{font-family:'Instrument Serif',serif;font-size:24px;font-weight:400;margin-bottom:16px;letter-spacing:-0.02em;text-align:center}.note-section p{font-size:15px;color:#666;margin-bottom:12px;font-weight:300;line-height:1.6}.note-section p:last-child{margin-bottom:0}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px;flex-wrap:wrap}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}.pricing-grid{grid-template-columns:1fr;max-width:400px}.nav-links{display:none}.footer-links{gap:20px}}</style>
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
        <h1 data-i18n="page_title">价格方案</h1>
        <p class="intro" data-i18n="page_intro1">ShipLang 框架完全免费开源，您可以自由使用</p>
        <p class="intro" data-i18n="page_intro2">翻译服务按字符数计费，选择适合您的套餐，按需付费，灵活便捷</p>

        <div class="pricing-grid">
            <!-- 基础版 -->
            <div class="pricing-card">
                <h3 class="plan-name" data-i18n="plan_basic_name">免费版</h3>
                <p class="plan-desc" data-i18n="plan_basic_desc">适合个人项目和小型网站，技术Demo 测试。</p>
                <div class="price-wrapper">
                    <div class="price">
                        <span data-i18n="plan_basic_price">¥0/月</span>
                    </div>
                    <div class="characters" data-i18n="plan_basic_chars">5万字符</div>
                </div>
                <ul class="features">
                    <li data-i18n="feature_basic_1">支持英语翻译</li>
                    <li data-i18n="feature_basic_3">标准响应速度</li>
                    <li data-i18n="feature_basic_4">邮件技术支持</li>
                </ul>
                <a href="https://shiplang.com/zh/admin/sign-up" class="btn btn-secondary" data-i18n="btn_select">选择方案</a>
            </div>
            
            <!-- 生态版 -->
            <div class="pricing-card">
                <h3 class="plan-name" data-i18n="plan_basic_name">生态版</h3>
                <p class="plan-desc" data-i18n="plan_basic_desc">适合个人项目和小型网站</p>
                <div class="price-wrapper">
                    <div class="price">
                        <span data-i18n="plan_basic_price">¥0/月</span>
                    </div>
                    <div class="characters" data-i18n="plan_basic_chars">25万字符</div>
                </div>
                <ul class="features">
                    <li data-i18n="feature_basic_1">支持 5 种核心语言（英语，西班牙语，阿拉伯语，法语，葡萄牙语）翻译</li>
                    <li data-i18n="feature_basic_3">标准响应速度</li>
                    <li data-i18n="feature_basic_4">邮件技术支持</li>
                    <li data-i18n="feature_basic_4">网站需部署“Powered by ShipLang”外链。</li>
                </ul>
                <a href="https://shiplang.com/zh/admin/sign-up" class="btn btn-secondary" data-i18n="btn_select">选择方案</a>
            </div>

            <!-- 专业版 -->
            <div class="pricing-card featured">
                <span class="badge" data-i18n="badge_popular">最受欢迎</span>
                <h3 class="plan-name" data-i18n="plan_pro_name">专业版</h3>
                <p class="plan-desc" data-i18n="plan_pro_desc">适合成长型企业和中型网站</p>
                <div class="price-wrapper">
                    <div class="price">
                        <span data-i18n="plan_pro_price">¥199/月</span>
                    </div>
                    <div class="characters" data-i18n="plan_pro_chars">500万字符/月</div>
                </div>
                <ul class="features">
                    <li data-i18n="feature_pro_1">支持所有语言</li>
                    <li data-i18n="feature_pro_2">优先翻译处理</li>
                    <li data-i18n="feature_pro_4">邮件技术支持</li>
                    <li data-i18n="feature_pro_4">移除 ShipLang 品牌标识</li>
                </ul>
                <a href="https://shiplang.com/zh/admin/sign-up" class="btn btn-primary" data-i18n="btn_select">选择方案</a>
            </div>

            <!-- 企业版 -->
            <div class="pricing-card">
                <h3 class="plan-name" data-i18n="plan_enterprise_name">企业版</h3>
                <p class="plan-desc" data-i18n="plan_enterprise_desc">适合大型企业和高流量网站</p>
                <div class="price-wrapper">
                    <div class="price">
                        <span data-i18n="plan_enterprise_price">¥799/月</span>
                    </div>
                    <div class="characters" data-i18n="plan_enterprise_chars">2000万字符/月</div>
                </div>
                <ul class="features">
                    <li data-i18n="feature_enterprise_1">包含专业版所有功能</li>
                    <li data-i18n="feature_enterprise_2">最高优先级处理</li>
                    <li data-i18n="feature_enterprise_3">自定义翻译引擎</li>
                    <li data-i18n="feature_enterprise_4">SLA 服务保障</li>
                    <li data-i18n="feature_enterprise_5">定制化技术支持</li>
                </ul>
                <a href="https://shiplang.com/zh/admin/sign-up" class="btn btn-secondary" data-i18n="btn_select">选择方案</a>
            </div>
        </div>

        <div class="note-section">
            <h2 data-i18n="note_title">定价说明</h2>
            <p data-i18n="note_1">• 免费版支持语言：仅支持英语翻译，适用于初步开发调试。</p>
            <p data-i18n="note_2">• 生态版特权：在您的项目底部部署 ShipLang 官方外链，即可免费解锁美、日、英、德、澳五种核心语种翻译，并提升每月额度。</p>
            <p data-i18n="note_3">• 超出套餐字符数后，按 ¥30/百万字符 计费</p>
            <p data-i18n="note_4">• 品牌标识：付费方案（专业版及以上）可完全移除翻译组件中的 ShipLang 品牌水印及外链。</p>
            <p data-i18n="note_5">• 支持按年付费，享受 8.5 折优惠</p>
            <p data-i18n="note_6">• 企业客户可联系我们定制专属方案</p>
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