<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">关于 ShipLang - 框架详细介绍</title>
    <meta data-i18n="description" name="description" content="ShipLang 框架的设计理念、技术原理和使用指南">
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
    <meta data-i18n="keywords" name="keywords" content="ShipLang框架,技术原理,多语言翻译,AI翻译,框架使用,开源框架,PHP框架,国际化方案">
    <meta name="author" content="ShipLang">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://shiplang.com/about">
    
    
    <meta property="og:type" content="article"><!-- Open Graph标签 -->
    <meta property="og:url" content="https://shiplang.com/about">
    <meta data-i18n="og_title" property="og:title" content="关于 ShipLang - 框架详细介绍">
    <meta data-i18n="og_description" property="og:description" content="ShipLang 框架的设计理念、技术原理和使用指南,首个为AI设计的多语言技术栈">
    <meta property="og:site_name" content="ShipLang">
    <meta name="twitter:card" content="summary"><!-- Twitter Card标签 -->
    <meta data-i18n="twitter_title" name="twitter:title" content="关于 ShipLang - 框架详细介绍">
    <meta data-i18n="twitter_description" name="twitter:description" content="ShipLang 框架的设计理念、技术原理和使用指南">
    
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Crimson+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Crimson Pro',serif;background:#fff;color:#1a1a1a;line-height:1.7;overflow-x:hidden}header{position:fixed;top:0;width:100%;background:rgba(255,255,255,0.95);backdrop-filter:blur(10px);border-bottom:1px solid #e8e8e8;z-index:100}nav{max-width:1100px;margin:0 auto;padding:0 30px;height:70px;display:flex;justify-content:space-between;align-items:center}.logo{font-family:'Courgette',cursive;font-size:22px;font-weight:400;color:#1a1a1a;text-decoration:none;letter-spacing:-0.02em}.nav-links{display:flex;gap:35px;list-style:none;align-items:center}.nav-links a{color:#666;text-decoration:none;font-size:15px;font-weight:300;transition:color .3s}.nav-links a:hover{color:#1a1a1a}.language-dropdown{position:relative}.language-btn{background:#f8f8f8;border:1px solid #e0e0e0;padding:7px 14px;border-radius:6px;cursor:pointer;font-size:14px;font-weight:300;color:#666;transition:all .3s}.language-btn:hover{background:#f0f0f0;border-color:#ccc}.language-dropdown-auto{position:absolute;top:calc(100%+8px);right:0;background:#fff;border:1px solid #e0e0e0;border-radius:12px;box-shadow:0 8px 24px rgba(0,0,0,0.08);min-width:140px;max-height:280px;overflow-y:auto;display:none}.language-dropdown:hover .language-dropdown-auto{display:block}.language-option{display:block;padding:10px 18px;color:#666;text-decoration:none;font-size:14px;font-weight:300;transition:background .2s}.language-option:hover{background:#f8f8f8;color:#1a1a1a}main{max-width:900px;margin:0 auto;padding:120px 30px 80px}h1{font-family:'Instrument Serif',serif;font-size:48px;font-weight:400;margin-bottom:24px;letter-spacing:-0.03em}.intro{font-size:19px;color:#666;margin-bottom:60px;font-weight:300;line-height:1.6}h2{font-family:'Instrument Serif',serif;font-size:32px;font-weight:400;margin:60px 0 24px;letter-spacing:-0.02em}h2:first-of-type{margin-top:0}h3{font-size:22px;font-weight:400;margin:40px 0 16px;color:#1a1a1a}p{margin-bottom:16px;color:#666;font-weight:300;font-size:17px}.highlight-box{background:#fafafa;border:1px solid #f0f0f0;border-radius:8px;padding:32px;margin:32px 0}.author-section{background:#fffbf0;border-left:3px solid #f5c518;padding:28px 32px;margin:40px 0;border-radius:6px}.principle-box{background:#f0fdf4;border-left:3px solid #10b981;padding:28px 32px;margin:32px 0;border-radius:6px}.qa-section{margin-top:60px}.qa-item{margin-bottom:40px;padding-bottom:40px;border-bottom:1px solid #f0f0f0}.qa-item:last-child{border-bottom:0}.question{font-size:20px;font-weight:600;color:#1a1a1a;margin-bottom:12px}.answer{color:#666;line-height:1.8}code{background:#f5f5f5;padding:2px 8px;border-radius:3px;font-size:15px;color:#1a1a1a;font-family:'Courier New',monospace}pre{background:#1a1a1a;color:#e0e0e0;padding:24px;border-radius:6px;overflow-x:auto;font-size:14px;line-height:1.6;margin:16px 0}pre code{background:transparent;padding:0;color:#e0e0e0}ol,ul{margin:16px 0 16px 24px;color:#666}ol li,ul li{margin-bottom:12px;font-size:17px;font-weight:300}footer{border-top:1px solid #e8e8e8;padding:50px 30px;margin-top:100px;text-align:center}.footer-content{max-width:1100px;margin:0 auto}.footer-links{display:flex;gap:30px;justify-content:center;list-style:none;margin-bottom:24px}.footer-links a{color:#999;text-decoration:none;font-size:14px;font-weight:300;transition:color .3s}.footer-links a:hover{color:#666}.footer-bottom{font-size:14px;color:#999;font-weight:300}@media(max-width:768px){h1{font-size:36px}h2{font-size:28px}.nav-links{display:none}}</style>
</head>
<body>
    <header>
        <nav>
            <a href="/" class="logo">ShipLang</a>
            <ul class="nav-links">
                <li><a href="/pricing" data-i18n="nav_price">价格</a></li>
                <li><a href="https://shiplang.com/zh/admin/sign-up" data-i18n="nav_admin">后台</a></li>
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
        <h1 data-i18n="page_title">关于 ShipLang 框架</h1>
        <p class="intro" data-i18n="page_intro">首个为AI设计的多语言技术栈,让开发者专注于产品本身</p>

        <h2 data-i18n="section_vision">框架简介与理想</h2>
        <div class="highlight-box">
            <p data-i18n="vision_p1">ShipLang 是首个由产品经理开发的技术栈,诞生于对传统开发流程的反思。在AI时代,我们需要的不是更复杂的工具,而是能让人专注于产品创意的简单解决方案。</p>
            <p data-i18n="vision_p2">这个框架的核心理想是:让全球化不再是产品的负担。当你用中文写完代码后,世界各地的用户都能用自己的母语访问你的网站。多语言应该是自动的、智能的,而不是需要人工维护数十个翻译文件。</p>
            <p data-i18n="vision_p3">ShipLang 完全免费且开源,这不仅是技术分享,更是在AI时代寻找人类主体性的尝试。技术应该服务于创造,而不是成为创造的障碍。</p>
            <p data-i18n="vision_p4">我们的系统定位为非程序员用户，并且兼容用户和Ai的使用习惯，如下图所示：</p>
        
        </div>



        <div class="image-container">
            <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/aa1.png" target="_blank" class="image-link">
                <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/aa1.png" alt="兼容Ai而不是让Ai兼容我们">
            </a>
            <p class="image-caption" data-i18n="image2_caption">兼容Ai而不是让Ai兼容我们（点击查看大图）</p>
        </div>
        <div class="image-container">
            <a href="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/aa2.png" target="_blank" class="image-link">
                <img src="https://pub-8422861cad374e55bcd2985b86a272c1.r2.dev/aa2.png" alt="兼容Ai而不是让Ai兼容我们">
            </a>
            <p class="image-caption" data-i18n="image2_caption">兼容Ai而不是让Ai兼容我们（点击查看大图）</p>
        </div>


        <h2 data-i18n="section_author">关于作者</h2>
        <div class="author-section">
            <p data-i18n="author_p1">ShipLang 的作者是一位产品经理,而非传统意义上的程序员。这个身份带来了独特的视角:不追求技术的极致复杂,而是追求使用的极致简单。</p>
            <p data-i18n="author_p2">作为产品经理,深知开发过程中最痛苦的不是技术难题,而是那些重复、繁琐、与创意无关的工作。多语言维护就是其中之一。每次产品迭代都要更新几十个语言文件,这不仅低效,更会消磨创作热情。</p>
            <p data-i18n="author_p3">ShipLang 的诞生源于一个简单的信念:在AI时代,技术栈应该为产品经理和独立开发者服务,让他们能够快速验证想法、快速上线、快速触达全球用户。</p>
        </div>

        <h2 data-i18n="section_principle">技术原理</h2>
        <div class="principle-box">
            <h3 data-i18n="principle_title">多语言智能翻译机制</h3>
            <p data-i18n="principle_p1">多语言要实现的是,你在代码后台写上中文之后,用户看到的是其他语言。</p>
            <p data-i18n="principle_p2">原理是,用户首次访问时,系统检测当前用户的语言设置——如果不存在该语言翻译文件,就调用翻译API,翻译之后在页面显示翻译后的结果,并将结果缓存到服务器,方便之后调用;如果已经存在对应语言的翻译文件,就直接加载,自动显示该页面语言。</p>
            
            <h3 data-i18n="principle_workflow">工作流程</h3>
            <p data-i18n="principle_step1">1. 用户访问页面时,系统自动检测浏览器语言偏好</p>
            <p data-i18n="principle_step2">2. 检查服务器是否已有该语言的翻译缓存文件</p>
            <p data-i18n="principle_step3">3. 如果缓存存在,直接加载并渲染;如果不存在,调用AI翻译API</p>
            <p data-i18n="principle_step4">4. 翻译完成后,保存到服务器缓存,下次访问直接使用</p>
            <p data-i18n="principle_step5">5. 整个过程对用户透明,无需等待,体验流畅</p>
        </div>

        <h2 data-i18n="section_usage">使用简介</h2>
        
        <h3 data-i18n="usage_basic">基础使用方式</h3>
        <p data-i18n="usage_p1">如果有需要翻译为多语言的内容,在对应的PHP文件中,把该内容加入data-i18n标签。</p>
        <p data-i18n="usage_example1">比如:你要在langany.com/docs/lang-i18n网页中,把中文的"欢迎使用"翻译成多种语言,你要在对应PHP文件中加入:</p>
        <pre><code>&lt;p data-i18n="welcome"&gt;欢迎使用&lt;/p&gt;</code></pre>
        <p data-i18n="usage_result1">那么当用户使用的是英文界面时,langany.com/docs/lang-i18n对应位置会显示"Welcome"</p>

        <h3 data-i18n="usage_reuse">标签复用机制</h3>
        <p data-i18n="usage_p2">在增加data-i18n标签多语言时,可以将之前用过的标签复制过来,仅修改文字即可,不需要重新定义data-i18n标签。</p>
        <p data-i18n="usage_example2">比如:定义了"你好"的标签为"k",此时页面中的"你好",在英文页面中会自动翻译为"hello"。如果还想要将"不错"也进行多语言翻译,可以直接复制标签:</p>
        <pre><code>&lt;p data-i18n="k"&gt;你好&lt;/p&gt;
&lt;p data-i18n="k"&gt;不错&lt;/p&gt;</code></pre>
        <p data-i18n="usage_magic">目前市面上所有的系统中,相同标签会被翻译为同样的内容,但是在ShipLang系统中,系统支持复用data-i18n标签值。当多个元素使用相同标签但内容不同时,系统会自动把他们转换为k_你好、k_不错,确保翻译准确匹配原文。</p>

        <h3 data-i18n="usage_skip">保留原文</h3>
        <p data-i18n="usage_p3">如果页面中的某些文字不需要翻译,需要保持原始的中文状态,该文字不添加data-i18n标签即可。</p>

        <h3 data-i18n="usage_manual">手动修改翻译</h3>
        <p data-i18n="usage_p4">如果对自动翻译的内容不满意,可以手动修改翻译:</p>
        <p data-i18n="usage_manual_step1">1. 在HTML文件中找到要修改内容的 data-i18n 标签值</p>
        <p data-i18n="usage_manual_step2">2. 在对应语言的JSON文件中搜索该标签</p>
        <p data-i18n="usage_manual_step3">3. 修改翻译内容并保存</p>
        
        <p data-i18n="usage_manual_example">比如:要修改https://langany.com/refund 中的"1.你好"的英语翻译,找到标签 section1_title,在 lang/en/docs/refund.json 中搜索并修改即可。</p>

        <h2 data-i18n="section_qa">常见问题</h2>
        <div class="qa-section">
            <div class="qa-item">
                <p class="question" data-i18n="q1">为什么选择PHP作为后端语言?</p>
                <p class="answer" data-i18n="a1">PHP部署简单、成本低廉、生态成熟,非常适合快速上线和迭代。对于独立开发者和小团队来说,PHP + 虚拟主机的组合可以让你在最低成本下服务全球用户。ShipLang的目标是降低门槛,而不是追求技术时髦。</p>
            </div>

            <div class="qa-item">
                <p class="question" data-i18n="q2">翻译质量如何保证?</p>
                <p class="answer" data-i18n="a2">ShipLang使用业界领先的AI翻译API,翻译质量已经达到专业水准。对于关键内容,你也可以随时手动修改翻译文件。重要的是,一次翻译,永久缓存,不会产生重复的API调用费用。</p>
            </div>

            <div class="qa-item">
                <p class="question" data-i18n="q3">支持哪些语言?</p>
                <p class="answer" data-i18n="a3">理论上支持全球所有主流语言。系统会根据用户的浏览器语言偏好自动匹配,包括但不限于英语、日语、韩语、法语、德语、西班牙语、阿拉伯语等100+种语言。</p>
            </div>

            <div class="qa-item">
                <p class="question" data-i18n="q4">首次翻译需要多长时间?</p>
                <p class="answer" data-i18n="a4">首次访问某个新语言时,翻译通常在1-3秒内完成。之后所有访问该语言的用户都会直接加载缓存,速度与普通网页无异。对于用户量大的网站,建议提前预生成常用语言的翻译文件。</p>
            </div>

            <div class="qa-item">
                <p class="question" data-i18n="q5">如何更新翻译内容?</p>
                <p class="answer" data-i18n="a5">有两种方式:一是直接修改对应语言的JSON文件,二是删除旧的翻译缓存,系统会在下次访问时重新翻译。对于内容频繁更新的页面,建议采用版本管理机制。</p>
            </div>

            <div class="qa-item">
                <p class="question" data-i18n="q6">标签复用机制的优势是什么?</p>
                <p class="answer" data-i18n="a6">传统多语言系统要求每个翻译内容都有唯一的标签,这导致标签命名困难、管理混乱。ShipLang允许你复用标签,系统会智能识别内容差异。这大大提升了开发效率,你不再需要绞尽脑汁想标签名称。</p>
            </div>

            <div class="qa-item">
                <p class="question" data-i18n="q7">ShipLang适合什么类型的项目?</p>
                <p class="answer" data-i18n="a7">特别适合需要快速全球化的项目,如SaaS产品、营销落地页、电商网站、内容平台等。如果你希望用最小的成本触达全球市场,ShipLang是理想选择。对于大型企业级应用,也可以将ShipLang作为快速原型验证工具。</p>
            </div>

            <div class="qa-item">
                <p class="question" data-i18n="q8">为什么说ShipLang是为AI时代设计的?</p>
                <p class="answer" data-i18n="a8">在AI时代,翻译不应该再是人工劳动密集型工作。ShipLang充分利用AI的能力,让翻译变成自动化、智能化的过程。同时,简洁的架构也便于未来集成更多AI功能,如智能内容生成、用户行为分析等。</p>
            </div>
        </div>

        <div class="highlight-box">
            <h3 data-i18n="final_title">开始使用 ShipLang</h3>
            <p data-i18n="final_p1">框架完全开源,你可以自由使用、修改和分发。我们相信,在AI时代,技术应该是开放的、易用的、为创造者服务的。</p>
            <p data-i18n="final_p2">如果你认同这个理念,欢迎加入ShipLang社区,一起探索AI时代的产品开发新范式。</p>
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