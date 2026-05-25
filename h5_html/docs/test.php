<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title data-i18n="title">独立事件示例</title>
    <!-- 买ai会员账号联系：xlh3650 -->
    <style>body {display: flex;flex-direction: column;align-items: center;justify-content: center;height: 100vh;gap: 15px;font-family: system-ui, -apple-system, sans-serif;}.btn {padding: 10px 20px;min-width: 150px;cursor: pointer;border-radius: 6px;border: 1px solid #ddd;font-weight: 500;}#btn-login { background-color: #4CAF50; color: white; border: none; }#btn-portal { background-color: #2196F3; color: white; border: none; }</style>
</head>
<body>
    <button id="btn-login" class="btn" data-i18n="a">登录</button>
    <button id="btn-delete" class="btn" data-i18n="b">清除登录记录</button>
    <button id="btn-portal" class="btn" data-i18n="c">支付</button>
    <button id="btn-post" class="btn" data-i18n="d">发送Api请求</button>
    <script>
        const btn1 = document.getElementById('btn-login');
        const btn2 = document.getElementById('btn-portal');
        const btn3 = document.getElementById('btn-delete');
        const btn4 = document.getElementById('btn-post');
        btn1.addEventListener('click', function() {
            console.log('通过按钮 1 触发');
            window.Login_ShipLang();
        });
        btn2.addEventListener('click', function() {
            console.log('通过按钮 2 触发');
            window.OpenPay_ShipLang();
            
        });
        btn3.addEventListener('click', function() {
            console.log('通过按钮 3 触发');
            localStorage.clear();
            alert('ok');
        });
        btn4.addEventListener('click', function() {
            console.log('通过按钮 4 触发');
            var mail = localStorage.getItem('mail');//这些均是登录成功获取到的参数
            var appid = localStorage.getItem('appid');//这些均是登录成功获取到的参数
            var end_at = localStorage.getItem('end_at');//这些均是登录成功获取到的参数
            
            console.log('mail:', mail); // 先检查是否有值
            console.log('appid:', appid);
            console.log('end_at:', end_at);
            if (!mail) {
                alert('请先登录');
                return;
            }
            
            fetch(window.location.pathname + '/api_test', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    mail: mail,
                    appid: appid,
                    end_at: end_at
                })
            }).then(function(response) {
                return response.json();
            }).then(function(data) {
                if (data.code === 200) {
                    alert(data.msg);
                    //window.location.href = '/' + document.documentElement.lang + '/docs';
                } else {
                    alert(data.msg || '发送失败');
                }
            }).catch(function(error) {
                alert('网络错误请重试');
            });
        });
    </script>
</body>
</html>