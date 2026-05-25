<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">ShipLang 退款政策</title>
    <meta data-i18n="description" name="description" content="ShipLang 退款政策及相关说明">
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
    <meta data-i18n="keywords" name="keywords" content="ShipLang退款政策,退款流程,退款条件,服务退款,订阅取消,退款申请">
    <meta name="author" content="ShipLang">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://shiplang.com/refund">
    
    
    <meta property="og:type" content="article"><!-- Open Graph标签 -->
    <meta property="og:url" content="https://shiplang.com/refund">
    <meta data-i18n="og_title" property="og:title" content="ShipLang 退款政策 - 退款说明与流程">
    <meta data-i18n="og_description" property="og:description" content="ShipLang 退款政策及相关说明，了解退款条件、流程和时间表">
    <meta property="og:site_name" content="ShipLang">
    <meta name="twitter:card" content="summary"><!-- Twitter Card标签 -->
    <meta data-i18n="twitter_title" name="twitter:title" content="ShipLang 退款政策">
    <meta data-i18n="twitter_description" name="twitter:description" content="了解退款条件、流程和时间表">
    
    
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:900px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:24px;letter-spacing:-0.03em}.intro{font-size:19px;color:#666;margin-bottom:40px;font-weight:300;line-height:1.6}.update-info{background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;padding:20px 28px;margin-bottom:50px}.update-info p{font-size:15px;color:#666;margin:0}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h3{font-size:22px;font-weight:400;margin:40px 0 16px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.section{margin-bottom:50px}ol,ul{margin:16px 0 16px 24px;color:#666}ol li,ul li{margin-bottom:12px;font-size:17px;font-weight:300}.note{background:#fffbf0;border-left:3px solid #f5c518;padding:20px 24px;margin:32px 0;border-radius:6px}.note strong{color:#1a1a1a;font-weight:600}.warning{background:#fef2f2;border-left:3px solid #ef4444;padding:20px 24px;margin:32px 0;border-radius:6px}.warning strong{color:#1a1a1a;font-weight:600}.success{background:#f0fdf4;border-left:3px solid #10b981;padding:20px 24px;margin:32px 0;border-radius:6px}.success strong{color:#1a1a1a;font-weight:600}.info-box{background:#f0f9ff;border-left:3px solid #0ea5e9;padding:20px 24px;margin:32px 0;border-radius:6px}.info-box strong{color:#1a1a1a;font-weight:600}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}}</style>
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
        <h1 data-i18n="page_title">退款政策</h1>
        <p class="intro" data-i18n="page_intro">我们致力于提供优质的服务。如果您对购买的服务不满意，请查看以下退款政策</p>

        <div class="update-info">
            <p><strong data-i18n="last_update">最后更新日期：</strong><span data-i18n="update_date">2026年2月5日</span></p>
        </div>

        <div class="section">
            <h2 data-i18n="section1_title">1. 服务提供方信息</h2>
            <ul>
                <li data-i18n="provide_item1">适用服务：ShipLang开源技术栈和开发工具</li>
                <li data-i18n="provide_item2">服务提供方为：shiplang.com</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section2_title">2. 适用范围</h2>
            <p data-i18n="section2_desc1">ShipLang 的核心框架是免费且开源的。退款政策主要适用于付费订阅服务和高级功能。</p>
            <div class="note">
                <p data-i18n="section2_note"><strong data-i18n="zyts">重要提示：</strong>开源框架本身完全免费，退款政策仅适用于付费订阅服务、翻译额度加餐包以及高级功能解锁（如移除品牌标识）。</p>
            </div>
        </div>

        <div class="section">
            <h2 data-i18n="section3_title">3. 退款资格与消耗限制</h2>
            <h3 data-i18n="section3_sub1">符合退款条件</h3>
            <p data-i18n="section3_desc1">以下情况可申请退款：</p>
            <ul>
                <li data-i18n="eligible_item1"><strong data-i18n="eligible_title1">首次购买7天内且翻译额度消耗低于1%</strong><span data-i18n="eligible_desc1">在未实际大规模使用资源的情况下可撤回。</span></li>
                <li data-i18n="eligible_item3"><strong data-i18n="eligible_title3">系统故障：</strong><span data-i18n="eligible_desc3">因 ShipLang 后端 API 故障导致翻译功能连续 24 小时无法使用。</span></li>
                <li data-i18n="eligible_item4"><strong data-i18n="eligible_title4">重复扣费：</strong><span data-i18n="eligible_desc4">由于支付网关错误导致的多次扣款。</span></li>
            </ul>

            <h3 data-i18n="section3_sub2">不符合退款条件</h3>
            <p data-i18n="section3_desc2">以下情况不予退款：</p>
            <ul>
                <li data-i18n="ineligible_item1">超过7天退款期限的订阅</li>
                <li data-i18n="ineligible_item2">翻译额度已产生明显消耗：即便在 7 天内，若翻译次数消耗超过套餐额度的 5%，由于后端成本已产生，不予退款。</li>
                <li data-i18n="ineligible_item3">因用户自身原因（如误解功能、个人偏好改变）</li>
                <li data-i18n="ineligible_item4">违反服务条款导致的账户终止</li>
                <li data-i18n="ineligible_item5">促销或特价期间购买的服务（除非另有说明）</li>
                <li data-i18n="ineligible_item5">外链违规降级：因用户擅自删除、隐藏指向 langany.com 的外链导致账户从“生态版”降级，此类情况不涉及退款。</li>
            </ul>
            
        </div>

        <div class="section">
            <h2 data-i18n="section4_title">4. 退款时间表</h2>
            <div class="info-box">
                <p data-i18n="section4_desc1"><strong data-i18n="mybz">7天满意保证：</strong>首次订阅付费服务的用户享有7天无理由退款保证</p>
            </div>
            
            <h3 data-i18n="section4_sub1">不同服务类型的退款期限</h3>
            <ul>
                <li data-i18n="timeline_item1"><strong data-i18n="timeline_title1">月度订阅：</strong><span data-i18n="timeline_desc1">购买后7天内可申请全额退款</span></li>
                <li data-i18n="timeline_item2"><strong data-i18n="timeline_title2">年度订阅：</strong><span data-i18n="timeline_desc2">购买后7天内可申请全额退款，7天后按比例退款（已使用月份不退）</span></li>
                <li data-i18n="timeline_item3"><strong data-i18n="timeline_title3">一次性购买：</strong><span data-i18n="timeline_desc3">购买后7天内且未使用可申请退款</span></li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section5_title">5. 退款金额</h2>
            <h3 data-i18n="section5_sub1">全额退款</h3>
            <p data-i18n="section5_desc1">符合以下条件可获得全额退款：</p>
            <ul>
                <li data-i18n="full_item1">7天内申请且未使用任何付费功能</li>
                <li data-i18n="full_item2">重复扣费或系统错误</li>
                <li data-i18n="full_item3">严重技术故障导致服务完全无法使用</li>
            </ul>

            <h3 data-i18n="section5_sub2">部分退款</h3>
            <p data-i18n="section5_desc2">以下情况可能获得部分退款：</p>
            <ul>
                <li data-i18n="partial_item1">年度订阅超过7天但未超过30天，按剩余月份比例退款</li>
                <li data-i18n="partial_item2">服务降级时的差价退款</li>
                <li data-i18n="partial_item3">因我们原因导致的服务中断（按中断时长比例）</li>
            </ul>

            <div class="warning">
                <p data-i18n="section5_note"><strong data-i18n="zhuyi">注意：</strong>退款金额不包括支付处理费用。实际退款金额可能扣除第三方支付平台的手续费</p>
            </div>
        </div>

        <div class="section">
            <h2 data-i18n="section6_title">6. 退款流程</h2>
            <h3 data-i18n="section6_sub1">如何申请退款</h3>
            <p data-i18n="section6_desc1">请按以下步骤申请退款：</p>
            <ol>
                <li data-i18n="process_step1"><strong data-i18n="process_title1">联系我们：</strong><span data-i18n="process_desc1">发送邮件至 kf@shiplang.com，邮件主题注明"退款申请"</span></li>
                <li data-i18n="process_step2"><strong data-i18n="process_title2">提供信息：</strong><span data-i18n="process_desc2">包括订单号、注册邮箱、退款原因及详细说明</span></li>
                <li data-i18n="process_step3"><strong data-i18n="process_title3">等待审核：</strong><span data-i18n="process_desc3">我们将在2个工作日内审核您的申请</span></li>
                <li data-i18n="process_step4"><strong data-i18n="process_title4">处理结果：</strong><span data-i18n="process_desc4">审核通过后，退款将在5-10个工作日内退回原支付方式</span></li>
            </ol>

            <h3 data-i18n="section6_sub2">所需信息</h3>
            <p data-i18n="section6_desc2">申请退款时请提供：</p>
            <ul>
                <li data-i18n="info_item1">注册账户的电子邮件地址</li>
                <li data-i18n="info_item2">订单号或交易ID</li>
                <li data-i18n="info_item3">购买日期和金额</li>
                <li data-i18n="info_item4">详细的退款理由</li>
                <li data-i18n="info_item5">相关截图或证明材料（如适用）</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section7_title">7. 退款处理时间</h2>
            <p data-i18n="section7_desc1">退款处理时间取决于您的支付方式：</p>
            <ul>
                <li data-i18n="timing_item1"><strong data-i18n="timing_title1">信用卡/借记卡：</strong><span data-i18n="timing_desc1">5-10个工作日</span></li>
                <li data-i18n="timing_item2"><strong data-i18n="timing_title2">PayPal：</strong><span data-i18n="timing_desc2">3-5个工作日</span></li>
                <li data-i18n="timing_item3"><strong data-i18n="timing_title3">其他支付方式：</strong><span data-i18n="timing_desc3">7-15个工作日</span></li>
            </ul>
            <div class="note">
                <p data-i18n="section7_note">实际到账时间可能因银行处理速度而有所延迟</p>
            </div>
        </div>

        <div class="section">
            <h2 data-i18n="section8_title">8. 订阅取消</h2>
            <h3 data-i18n="section8_sub1">如何取消订阅</h3>
            <p data-i18n="section8_desc1">您可以随时取消订阅：</p>
            <ol>
                <li data-i18n="cancel_step1">登录您的开发者后台</li>
                <li data-i18n="cancel_step2">进入"账户设置"或"订阅管理"</li>
                <li data-i18n="cancel_step3">点击"取消订阅"按钮</li>
                <li data-i18n="cancel_step4">确认取消操作</li>
            </ol>

            <h3 data-i18n="section8_sub2">取消后的访问权限</h3>
            <p data-i18n="section8_desc2">取消订阅后：</p>
            <ul>
                <li data-i18n="access_item1">您将保留访问权限直到当前计费周期结束</li>
                <li data-i18n="access_item2">不会产生新的费用</li>
                <li data-i18n="access_item3">开源框架功能继续可用</li>
                <li data-i18n="access_item4">付费功能在周期结束后停止</li>
            </ul>

            <div class="success">
                <p data-i18n="section8_note"><strong  data-i18n="tishi">提示：</strong>取消订阅不等于退款。如需退款，请按退款流程申请</p>
            </div>
        </div>

        <div class="section">
            <h2 data-i18n="section9_title">9. 特殊情况</h2>
            <h3 data-i18n="section9_sub1">服务中断补偿</h3>
            <p data-i18n="section9_desc1">如果因我们的原因导致服务长时间中断：</p>
            <ul>
                <li data-i18n="outage_item1">中断超过24小时：延长订阅期限相应天数</li>
                <li data-i18n="outage_item2">中断超过72小时：可选择延长订阅或部分退款</li>
                <li data-i18n="outage_item3">严重故障：全额退款选项</li>
            </ul>

            <h3 data-i18n="section9_sub2">误操作保护</h3>
            <p data-i18n="section9_desc2">如果您不小心：</p>
            <ul>
                <li data-i18n="mistake_item1">重复购买相同服务 - 自动退款</li>
                <li data-i18n="mistake_item2">购买错误的订阅级别 - 24小时内可更换</li>
                <li data-i18n="mistake_item3">意外升级 - 立即联系我们处理</li>
            </ul>
        </div>

        <div class="section">
            <h2 data-i18n="section10_title">10. 争议解决</h2>
            <p data-i18n="section10_desc1">如果您对退款决定不满意：</p>
            <ol>
                <li data-i18n="dispute_step1">首先与我们的客户支持团队沟通</li>
                <li data-i18n="dispute_step2">提供额外的信息或证据</li>
                <li data-i18n="dispute_step3">我们将重新审核您的案例</li>
                <li data-i18n="dispute_step4">必要时升级至管理层处理</li>
            </ol>
            <p data-i18n="section10_desc2">我们致力于公平处理所有退款请求，并会认真考虑每个案例的具体情况。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section11_title">11. 政策更新</h2>
            <p data-i18n="section11_desc1">我们保留随时修改此退款政策的权利。任何更改将：</p>
            <ul>
                <li data-i18n="update_item1">在本页面更新</li>
                <li data-i18n="update_item2">通过电子邮件通知活跃订阅用户</li>
                <li data-i18n="update_item3">在修改后立即生效</li>
            </ul>
            <p data-i18n="section11_desc2">继续使用服务即表示您接受修订后的退款政策。</p>
        </div>

        <div class="section">
            <h2 data-i18n="section12_title">12. 联系方式</h2>
            <p data-i18n="section12_desc">如有任何关于退款的问题，请通过以下方式联系我们：</p>
            <ul>
                <li data-i18n="contact_email">电子邮件：kf@shiplang.com</li>
                <li data-i18n="contact_subject">邮件主题：退款咨询 / 退款申请</li>
                <li data-i18n="contact_response">响应时间：2个工作日内</li>
            </ul>
            <div class="info-box">
                <p data-i18n="contact_note">为了更快处理您的请求，请在邮件中包含尽可能详细的信息</p>
            </div>
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