<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 服务条款</title>
    <meta data-i18n="description" name="description" content="ShipLang 服务条款及使用协议">
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
    <meta data-i18n="keywords" name="keywords" content="ShipLang服务条款,使用协议,用户协议,服务协议,条款条件,法律声明">
    <meta name="author" content="ShipLang">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://shiplang.com/terms">
    
    <meta property="og:type" content="article"><!-- Open Graph标签 -->
    <meta property="og:url" content="https://shiplang.com/terms">
    <meta data-i18n="og_title" property="og:title" content="ShipLang 服务条款 - 使用协议">
    <meta data-i18n="og_description" property="og:description" content="ShipLang 服务条款及使用协议，了解服务使用规则和用户权利义务">
    <meta property="og:site_name" content="ShipLang">
    <meta name="twitter:card" content="summary"><!-- Twitter Card标签 -->
    <meta data-i18n="twitter_title" name="twitter:title" content="ShipLang 服务条款">
    <meta data-i18n="twitter_description" name="twitter:description" content="了解服务使用规则和用户权利义务">
    
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:900px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:24px;letter-spacing:-0.03em}.intro{font-size:19px;color:#666;margin-bottom:40px;font-weight:300;line-height:1.6}.update-info{background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;padding:20px 28px;margin-bottom:50px}.update-info p{font-size:15px;color:#666;margin:0}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h3{font-size:22px;font-weight:400;margin:40px 0 16px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.section{margin-bottom:50px}ol,ul{margin:16px 0 16px 24px;color:#666}ol li,ul li{margin-bottom:12px;font-size:17px;font-weight:300}.note{background:#fffbf0;border-left:3px solid #f5c518;padding:20px 24px;margin:32px 0;border-radius:6px}.note strong{color:#1a1a1a;font-weight:600}.warning{background:#fef2f2;border-left:3px solid #ef4444;padding:20px 24px;margin:32px 0;border-radius:6px}.warning strong{color:#1a1a1a;font-weight:600}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}}</style>
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
        <h1 data-i18n="page_title">服务条款</h1>
        <p class="intro" data-i18n="page_intro">欢迎使用 ShipLang。使用我们的服务即表示您同意这些条款。请仔细阅读</p>

        <div class="update-info">
            <p><strong data-i18n="last_update">最后更新日期：</strong><span data-i18n="update_date">2025年2月5日</span></p>
        </div>

      <div class="section">
            <h2 data-i18n="section1_title">1. 服务提供方信息</h2>
            <ul>
                <li data-i18n="provide_item1">适用服务：ShipLang开源技术栈和开发工具</li>
                <li data-i18n="provide_item2">服务提供方为：shiplang.com</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section2_title">2. 接受条款</h2>
            <p data-i18n="section2_desc1">通过访问或使用 ShipLang 的服务，您同意受本服务条款的约束。如果您不同意这些条款，请不要使用我们的服务。</p>
            <p data-i18n="section2_desc2">我们保留随时修改这些条款的权利。您继续使用服务即表示接受修改后的条款。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section3_title">3. 服务描述</h2>
            <p data-i18n="section3_desc1">ShipLang 提供开源技术栈和开发工具，帮助开发者构建多语言网站和应用程序。我们的服务包括：</p>
            <ul>
                <li data-i18n="service_item1">开源框架和工具</li>
                <li data-i18n="service_item2">多语言翻译功能</li>
                <li data-i18n="service_item3">登录和支付集成</li>
                <li data-i18n="service_item4">技术文档和支持</li>
                <li data-i18n="service_item5">开发者后台管理</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section4_title">4. 用户账户</h2>
            <h3 data-i18n="section4_sub1">账户注册</h3>
            <p data-i18n="section4_desc1">使用某些服务功能时，您需要创建账户。在注册时：</p>
            <ul>
                <li data-i18n="account_item1">您必须提供准确、完整的信息</li>
                <li data-i18n="account_item2">您必须及时更新您的账户信息</li>
                <li data-i18n="account_item3">您必须保护您的账户密码安全</li>
                <li data-i18n="account_item4">您对您账户下的所有活动负责</li>
            </ul>

            <h3 data-i18n="section3_sub2">账户安全</h3>
            <p data-i18n="section3_desc2">您有责任维护账户安全。如果您发现任何未经授权的使用，请立即通知我们。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section5_title">5. 使用许可</h2>
            <h3 data-i18n="section5_sub1">授予的权利</h3>
            <p data-i18n="section5_desc1">在您遵守本条款的前提下，我们授予您有限的、非排他性的、不可转让的许可来访问和使用我们的服务。</p>

            <h3 data-i18n="section4_sub2">使用限制</h3>
            <p data-i18n="section4_desc2">您同意不会：</p>
            <ul>
                <li data-i18n="restrict_item1">以任何非法或未经授权的方式使用服务</li>
                <li data-i18n="restrict_item2">干扰或破坏服务的完整性或性能</li>
                <li data-i18n="restrict_item3">试图未经授权访问任何服务、账户或系统</li>
                <li data-i18n="restrict_item4">复制、修改或分发服务的任何部分（开源许可除外）</li>
                <li data-i18n="restrict_item5">使用自动化手段访问服务（除非明确允许）</li>
                <li data-i18n="restrict_item6">传播病毒、恶意软件或其他有害代码</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section6_title">6. 开源许可</h2>
            <p data-i18n="section6_desc1">ShipLang 框架在开源许可下发布。使用开源代码时，您必须遵守相应的开源许可条款。</p>
            <p data-i18n="section6_desc2">虽然框架是开源的，但某些服务功能（如登录、支付集成）可能需要注册开发者账户。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section7_title">7. 付费服务</h2>
            <h3 data-i18n="section7_sub1">定价和付款</h3>
            <p data-i18n="section7_desc1">某些服务功能可能需要付费。关于付费服务：</p>
            <ul>
                <li data-i18n="payment_item1">所有费用均以显示的货币计价</li>
                <li data-i18n="payment_item2">付款通过安全的第三方支付处理商处理</li>
                <li data-i18n="payment_item3">订阅费用按照您选择的计费周期收取</li>
                <li data-i18n="payment_item4">您有责任支付所有适用的税费</li>
            </ul>

            <h3 data-i18n="section7_sub2">退款政策</h3>
            <p data-i18n="section7_desc2">除非法律另有要求，所有付款均不可退款。特殊情况下的退款请求将根据具体情况考虑。</p>

            <h3 data-i18n="section7_sub3">取消订阅</h3>
            <p data-i18n="section7_desc3">您可以随时取消订阅。取消将在当前计费周期结束时生效，您将保留访问权限直到该周期结束。</p>
            
            <h3 data-i18n="section7_sub4">外链与生态版权益</h3>
            <p data-i18n="section7_desc4">如果您通过“外链换权益”活动获得了 ShipLang 生态版额度或额外语种支持，需遵循以下规则：</p>
            <ul>
                <li data-i18n="backlink_item1">权益存续条件： 您必须保持外链在约定页面（如您的网站首页或页脚）的持续有效性。</li>
                <li data-i18n="backlink_item2">权限回收： 若系统检测到外链被删除、隐藏，将被视为您主动放弃相关增值权益。</li>
                <li data-i18n="backlink_item3">自动处理： 一旦外链失效，系统将自动回收该账户下的额外语种支持及相关生态版特权，您的账户将恢复至基础版本或对应付费版本的标准配置。</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section8_title">8. 知识产权</h2>
            <p data-i18n="section8_desc1">除开源组件外，ShipLang 服务及其原创内容、功能和界面由 ShipLang 拥有，受国际版权、商标和其他知识产权法保护。</p>
            <p data-i18n="section8_desc2">ShipLang 名称和徽标是 ShipLang 的商标。未经书面许可，您不得使用这些商标。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section9_title">9. 用户内容</h2>
            <h3 data-i18n="section9_sub1">您的内容</h3>
            <p data-i18n="section9_desc1">您对通过服务提交、发布或显示的内容保留所有权。通过提交内容，您授予我们使用该内容提供服务所需的许可。</p>

            <h3 data-i18n="section9_sub2">内容责任</h3>
            <p data-i18n="section9_desc2">您对自己的内容负全责，并保证您拥有必要的权利来使用和分享该内容。</p>

            <h3 data-i18n="section9_sub3">禁止内容</h3>
            <p data-i18n="section9_desc3">您不得提交以下类型的内容：</p>
            <ul>
                <li data-i18n="prohibited_item1">非法、有害或攻击性内容</li>
                <li data-i18n="prohibited_item2">侵犯他人知识产权的内容</li>
                <li data-i18n="prohibited_item3">包含病毒或恶意代码的内容</li>
                <li data-i18n="prohibited_item4">垃圾信息或未经请求的促销内容</li>
                <li data-i18n="prohibited_item5">虚假或误导性信息</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section10_title">10. 免责声明</h2>
            <div class="warning">
                <p data-i18n="disclaimer_desc">服务按"现状"和"可用"基础提供。我们不提供任何明示或暗示的保证，包括但不限于适销性、特定用途适用性和非侵权性的保证。我们不保证服务将不间断、及时、安全或无错误。</p>
            </div>
        </div>

        <div class="section">
            <h2 data-i18n="section11_title">11. 责任限制</h2>
            <p data-i18n="section11_desc">在法律允许的最大范围内，ShipLang 不对任何间接、偶然、特殊、后果性或惩罚性损害负责，包括但不限于利润损失、数据丢失或业务中断。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section12_title">12. 赔偿</h2>
            <p data-i18n="section12_desc">您同意赔偿并使 ShipLang 免受因您违反本条款或使用服务而产生的任何索赔、损失、责任、费用（包括合理的律师费）的损害。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section13_title">13. 终止</h2>
            <p data-i18n="section13_desc1">我们可以随时以任何理由暂停或终止您对服务的访问，包括但不限于违反本条款。</p>
            <p data-i18n="section13_desc2">您可以随时停止使用服务并删除您的账户来终止这些条款。</p>
            <p data-i18n="section13_desc3">终止后，应继续适用的条款（包括所有权条款、保证免责声明、赔偿和责任限制）将继续有效。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section14_title">14. 争议解决</h2>
            <p data-i18n="section14_desc1">本条款受适用法律管辖。任何因本条款引起的争议应首先通过诚实协商解决。</p>
            <p data-i18n="section14_desc2">如果协商未能解决争议，双方同意将争议提交至具有管辖权的法院。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section15_title">15. 一般条款</h2>
            <h3 data-i18n="section15_sub1">完整协议</h3>
            <p data-i18n="section15_desc1">本条款构成您与 ShipLang 之间关于服务的完整协议，取代所有先前的协议。</p>

            <h3 data-i18n="section15_sub2">可分割性</h3>
            <p data-i18n="section15_desc2">如果本条款的任何条款被认定为无效或不可执行，其余条款将继续完全有效。</p>

            <h3 data-i18n="section15_sub3">不弃权</h3>
            <p data-i18n="section15_desc3">我们未行使或延迟行使本条款下的任何权利不构成对该权利的放弃。</p>

            <h3 data-i18n="section15_sub4">转让</h3>
            <p data-i18n="section15_desc4">未经我们事先书面同意，您不得转让本条款。我们可以自由转让本条款。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section16_title">16. 联系我们</h2>
            <p data-i18n="section16_desc">如果您对本服务条款有任何疑问，请通过以下方式联系我们：</p>
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