
window.Appid = '';//开发者ID_网站名_随机数
window.isNoPay = 'npy';//值为npy就代表不主动拉起登录/支付，其中npy代表nopay

//买Ai会员账号联系微信：xlh3650
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.language-dropdown-auto');// 多语言下拉框
    const btn = document.querySelector('.language-btn');
    if (dropdown && btn) {
        dropdown.style.display = 'none';
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
        });
        document.addEventListener('click', function() {
            dropdown.style.display = 'none';
        });
        dropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
    
    //下面是登录和支付处理器
    if (window.location.href.includes('/web/login')) {//登录页面自己不处理自己，否则死循环
        return;
    }
    window.addEventListener('message', function(e){
        console.log('开发者，收到消息:', e.data);
        if (e.data.type === 'ShipLang_Login_Yes') {//登录成功事件
            const p = new URLSearchParams(e.data.search);
            localStorage.setItem('mail',p.get('mail'));
            localStorage.setItem('appid',p.get('appid'));
            localStorage.setItem('end_at',p.get('end_at'));
            //localStorage.setItem('end_at','1769853493');
            var ShipLang_Login_iframe = document.getElementById('ShipLang_Login_iframe');
            if (ShipLang_Login_iframe) ShipLang_Login_iframe.remove();//删除遮罩
            window.Index_ShipLang();
        }
        if (e.data.type === 'ShipLang_Pay_Yes') {//支付成功事件
            const p = new URLSearchParams(e.data.search);
            localStorage.setItem('mail',e.data.mail);
            localStorage.setItem('appid',e.data.appid);
            localStorage.setItem('end_at',e.data.end_at);
            window.Index_ShipLang();
        }
    });
    window.Login_ShipLang = function(){
        if (!window.Appid) {
            alert('window.Appid为空无法拉起登录，mail:9573335@gmail.com');
            return;
        }
        var ver = '1.0.2';
        var lang = navigator.language;
        var lang_h5 = document.documentElement.lang;
        var iframe = document.createElement('iframe');
        iframe.id = 'ShipLang_Login_iframe';
        iframe.src = 'https://ShipLang.com/'+ lang_h5 +'/web/login?appid='+ window.Appid +'&lang='+ lang +'&ver='+ ver + '&host=' + encodeURIComponent(window.location.host);
        Object.assign(iframe.style, {
            position: 'fixed',
            top: '0',
            left: '0',
            width: '100%',
            height: '100%',
            border: 'none',
            zIndex: '9999'
        });
        document.body.appendChild(iframe);
    }
    window.OpenPay_ShipLang = function(){
        if (!window.Appid) {
            alert('window.Appid It is empty and cannot initiate payment，mail:9573335@gmail.com');
            return;
        }
        if (window.IsPay_ShipLang()) {
            alert('You are already a member, so there is no need to pay again(您已经是会员了，无须再次支付)，mail:9573335@gmail.com');
            return;
        }
        var ver = '1.0.2';
        var lang = navigator.language;
        var mail = encodeURIComponent(localStorage.getItem('mail'));
        var end_at = localStorage.getItem('end_at');
        var lang_h5 = document.documentElement.lang;
        if (!end_at) {//若用户没登录就拉起支付，则先跳转登录
            window.Login_ShipLang();//拉起登录
        } else {
            window.open('https://ShipLang.com/'+ lang_h5 +'/web/price?appid='+ window.Appid +'&mail='+ mail +'&lang='+ lang +'&end_at='+ end_at +'&ver='+ ver + '&host=' + encodeURIComponent(window.location.host), '_blank');
        }
    }
    window.IsPay_ShipLang = function() {
        var end_at = localStorage.getItem('end_at');
        var now = Math.floor(Date.now() / 1000);
        if (end_at && end_at > now) return true;
        return false;
    }
    window.Index_ShipLang = function() {
        console.log('SDK初始化',window.location.href);
        var now = Math.floor(Date.now() / 1000);
        var end_at = parseInt(localStorage.getItem('end_at'));
        var isNoPay = window.isNoPay;
        var mask = document.getElementById('ShipLang_Pay_Mask');
        if (mask) mask.remove();//删除遮罩
        if (!end_at) {
            if (isNoPay.includes('npy')) {
                console.log('存在npy不主动登录');
            } else {
                window.Login_ShipLang();//拉起登录
            }
        } else if (end_at <= now) {
            if (isNoPay.includes('npy')) {
                console.log('会员已过期,但npy模式不显示遮罩',end_at);
            } else {
                var mask = document.createElement('div');
                mask.id = 'ShipLang_Pay_Mask';
                Object.assign(mask.style, {
                    position: 'fixed',
                    top: '0',
                    left: '0',
                    width: '100%',
                    height: '100%',
                    backgroundColor: 'rgba(255, 255, 255, 0.1)',
                    display: 'flex',
                    justifyContent: 'center',
                    alignItems: 'center',
                    zIndex: '9999',
                    cursor: 'pointer'
                });
                mask.addEventListener('click', window.OpenPay_ShipLang);
                document.body.appendChild(mask);
            }
        } else {
            console.log('会员有效,到期时间:', new Date(end_at * 1000).toLocaleString('zh-CN'));
        }
    }
    window.Index_ShipLang();
});

const originalInnerHTML = Object.getOwnPropertyDescriptor(Element.prototype, 'innerHTML');
const originalTextContent = Object.getOwnPropertyDescriptor(Node.prototype, 'textContent');
const originalInnerText = Object.getOwnPropertyDescriptor(HTMLElement.prototype, 'innerText');
const originalValue = Object.getOwnPropertyDescriptor(HTMLInputElement.prototype, 'value');
const originalTextAreaValue = Object.getOwnPropertyDescriptor(HTMLTextAreaElement.prototype, 'value');
function translate(key) {// js多语言中文翻译函数
    console.log('拦截Js向网页设置的文本:', key);
    if (!key) return key;// 检查1：空值跳过（null、undefined、空字符串）
    if (typeof key !== 'string') return key;// 检查2：类型错误跳过（只处理字符串）
    if (key.length > 200) return key;// 检查3：长度超限跳过（防止超长文本导致性能问题）
    if (key.indexOf('\n') !== -1) return key;// 检查4：换行符跳过（会导致querySelector语法错误）
    if (key.indexOf('\r') !== -1) return key;// 检查5：回车符跳过（会导致querySelector语法错误）
    if (key.indexOf('\t') !== -1) return key;// 检查6：制表符跳过（会导致querySelector语法错误）
    
    
    
    let element = document.querySelector(`[data-i18n^="${key}_"]`);// 如果找到元素就返回文本内容
    if (element) {
        return element.textContent;
    }
    if (/[\u4e00-\u9fa5]/.test(key)) {// 有中文 则
        document.querySelectorAll('[data-i18n]').forEach(el => {
            const val = el.getAttribute('data-i18n');
            if (/[\u4e00-\u9fa5]/.test(val)) {// 包含则
                //console.log(val.split('_')[0], '|', el.textContent);
                if (key.includes(val.split('_')[0])) {
                    console.log('替换', key,val.split('_')[0],el.textContent);
                    key = key.replaceAll(val.split('_')[0], el.textContent);//替换
                }
            }
        });
    }
    return key;// 没找到就返回原始 key
}
(function() {
    if (window.self !== window.top) return;
    var script = document.createElement('script');
    script.src = 'https://s.ShipLang.com/assets/sdk.js';
    script.async = true;
    script.onerror = function() {console.warn('SDK加载失败，wechat:5833487');};
    var target = document.head || document.body || document.documentElement;
    target && target.appendChild(script);
})();
function translateHTML(html, tagName) {// 翻译HTML中的文本
    let container = (tagName === 'tbody' || tagName === 'table') ? document.createElement('table') : document.createElement('div');// 根据标签类型选择容器
    originalInnerHTML.set.call(container, html);// 使用原始方法设置innerHTML，避免触发拦截
    function walk(node) {// 遍历所有文本节点并翻译
        if (node.nodeType === 3) {
            let text = node.textContent.trim();
            if (text) {
                node.nodeValue = node.nodeValue.replace(text, translate(text));// 直接修改nodeValue，不触发拦截
            }
        }
        node.childNodes.forEach(walk);
    }
    walk(container);
    if (tagName === 'tbody') {// 返回处理后的HTML
        return originalInnerHTML.get.call(container.querySelector('tbody'));
    }
    return originalInnerHTML.get.call(container);
}
Object.defineProperty(Element.prototype, 'innerHTML', {// 拦截innerHTML
    set: function(html) {
        if (/<[^>]+>/.test(html)) {
            originalInnerHTML.set.call(this, translateHTML(html, this.tagName.toLowerCase()));
        } else {
            originalInnerHTML.set.call(this, translate(html));
        }
    },
    get: function() { return originalInnerHTML.get.call(this); }
});
Object.defineProperty(Node.prototype, 'textContent', {// 拦截textContent
    set: function(text) { 
        originalTextContent.set.call(this, translate(text)); 
    },
    get: function() { return originalTextContent.get.call(this); }
});
Object.defineProperty(HTMLElement.prototype, 'innerText', {// 拦截innerText
    set: function(text) { 
        
        originalInnerText.set.call(this, translate(text)); 
    },
    get: function() { return originalInnerText.get.call(this); }
});
Object.defineProperty(HTMLInputElement.prototype, 'value', {// 拦截input的value
    set: function(text) { 
        originalValue.set.call(this, translate(text)); 
    },
    get: function() { return originalValue.get.call(this); }
});
Object.defineProperty(HTMLTextAreaElement.prototype, 'value', {// 拦截textarea的value
    set: function(text) { 
        originalTextAreaValue.set.call(this, translate(text)); 
    },
    get: function() { return originalTextAreaValue.get.call(this); }
});
const originalAlert = window.alert;
window.alert = function(text) {// 拦截alert
    originalAlert.call(window, translate(text));
};
const originalConfirm = window.confirm;
window.confirm = function(text) {// 拦截confirm  <-- 在这里添加
    return originalConfirm.call(window, translate(text));
};

const originalTitle = Object.getOwnPropertyDescriptor(Document.prototype, 'title');
Object.defineProperty(Document.prototype, 'title', {
    set: function(text) { 
        originalTitle.set.call(this, translate(text)); 
    },
    get: function() { 
        return originalTitle.get.call(this); 
    }
});