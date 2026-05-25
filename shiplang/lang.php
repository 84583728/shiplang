<?php
    /***
     * shiplang
     * XiaoQian
     * wechat:5833487
     * email:9723331@gmail.com
     * 2026-05-11
     * 该架构致力于，基于Ai实现非程序员，可以快速极简构建出可盈利变现的全球化应用程序
     * lang.php是翻译器，用于解析网页需要翻译的文本，并基于翻译api翻译，并且自动将网页中的a标签定向到多语言标签，并且自动加入多语言下拉框
     * 买Ai会员账号联系微信：xlh3650
    ***/
    header('Content-Type: text/html; charset=UTF-8');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/shiplang/db.php');
    class lang {
        public function txt_update($filePath, $content = '', $dirMode = 0755) {
            $directory = dirname($filePath);// 获取文件所在的目录路径
            if (!is_dir($directory) && !mkdir($directory, $dirMode, true)) {
                return false; // 如果目录创建失败，返回false
            }
            return file_put_contents($filePath, $content) !== false;
        }
        private function get_token() {
            static $token = null;
            if ($token !== null) return $token;
            $dir = __DIR__ . '/tokens/';
            $pattern = $dir . 'aaa_*_bbb.dat';
            $files = glob($pattern);
            if ($files) {// 文件存在，从文件名提取 token
                preg_match('/aaa_(.+)_bbb\.dat$/', basename($files[0]), $m);
                $token = $m[1];
            } else {// 文件不存在，创建新 token
                if (!is_dir($dir)) mkdir($dir, 0755, true);
                $token = bin2hex(random_bytes(8));
                touch($dir . "aaa_{$token}_bbb.dat");
            }
            return $token;
        }
        public function fanyi_api($text, $a='zh', $b='en') {
            $token = $this->get_token();//支持字母+数字随机组合，最长16位
            $hook = file_get_contents(__DIR__ . '/hook.js');
            preg_match("/Appid\s*=\s*'([^']+)'/", $hook, $Appid);
            $headers = [
                'accept: */*',
                'authority: fy.shiplang.com',
                'content-type: application/json+protobuf',
                'accept-encoding: gzip, deflate, br, zstd',
                'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36'
            ];
            try {
                $ch = curl_init("https://fy.shiplang.com/web/fanyi/api_fanyi?appid=". urlencode($Appid[1]) ."&token=". $token ."&domain=". urlencode($_SERVER['HTTP_HOST']));
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([[$text, $a, $b], "te_lib"]));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
                $response = curl_exec($ch);
                curl_close($ch);
                $result = json_decode($response, true);
                if (isset($result['code']) && $result['code'] === -201) {// 次数耗尽，直接返回原文
                    return [array_values((array)$text)]; // 保持 $fanyi[0] 是数组的结构
                }
                return $result;
            } catch (Exception $e) {
                return '';
            }
        }
        
        
        
        
        /**
         * API数据翻译 - 支持路径匹配
         */
        public function Lang_api(&$data, $toLang, $route_param, $paths = []) {
            /*if ($toLang === 'zh' || $toLang === 'zh-cn') {
                return $data;
            }*/
        
            $txt_lang_Path = $_SERVER['DOCUMENT_ROOT'] . '/lang/'. $toLang .'/api.json';
            $txt_txt = [];
        
            if (file_exists($txt_lang_Path)) {
                $fileContent = file_get_contents($txt_lang_Path);
                $txt_txt = json_decode($fileContent, true) ?: [];
            }
        
            // 收集需要翻译的文本
            $i18nTexts = [];
            $stack = [['data' => &$data, 'path' => '']];
        
            while (!empty($stack)) {
                $item = array_pop($stack);
                $current = &$item['data'];
                $currentPath = $item['path'];
        
                if (is_array($current)) {
                    foreach ($current as $key => &$value) {
                        $newPath = $currentPath === '' ? $key : $currentPath . '.' . $key;
                        
                        if (is_array($value)) {
                            $stack[] = ['data' => &$value, 'path' => $newPath];
                        } elseif (is_string($value) && preg_match('/[\x{4e00}-\x{9fa5}]/u', $value)) {
                            // 检查是否需要翻译此路径
                            $shouldTranslate = empty($paths);
                            
                            if (!empty($paths)) {
                                foreach ($paths as $pattern) {
                                    $pattern = preg_replace('/\[\d+\]\.?/', '', $pattern);
                                    
                                    if ($pattern === $newPath || 
                                        (substr($pattern, -2) === '.*' && 
                                         (strpos($newPath, substr($pattern, 0, -2) . '.') === 0 || 
                                          $newPath === substr($pattern, 0, -2)))) {
                                        $shouldTranslate = true;
                                        break;
                                    }
                                }
                            }
                            
                            if ($shouldTranslate) {
                                $md5Key = md5($value);
                                if (!isset($txt_txt[$md5Key]) && !empty(trim($value))) {
                                    $i18nTexts[$md5Key] = trim($value);
                                    
                                }
                            }
                        }
                    }
                }
            }
        //print_r($i18nTexts);
        //print_r($key_error);
            // 调用翻译API
            if (!empty($i18nTexts)) {
                $keys = array_keys($i18nTexts);
                $fanyi = $this->fanyi_api(array_values($i18nTexts), 'zh', $toLang);
                if (isset($fanyi[0]) && is_array($fanyi[0])) {
                    $txt_txt['qx_user_ip'] = Db::get_ip();
                    foreach ($keys as $i => $md5Key) {
                        if (isset($fanyi[0][$i])) {
                            $txt_txt[$md5Key] = $fanyi[0][$i];
                        }
                    }
                    $this->txt_update($txt_lang_Path, json_encode($txt_txt, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                }
            }
        
            // 替换翻译文本
            $stack = [['data' => &$data, 'path' => '']];
            
            while (!empty($stack)) {
                $item = array_pop($stack);
                $current = &$item['data'];
                $currentPath = $item['path'];
        
                if (is_array($current)) {
                    foreach ($current as $key => &$value) {
                        $newPath = $currentPath === '' ? $key : $currentPath . '.' . $key;
                        
                        if (is_array($value)) {
                            $stack[] = ['data' => &$value, 'path' => $newPath];
                        } elseif (is_string($value) && preg_match('/[\x{4e00}-\x{9fa5}]/u', $value)) {
                            $shouldTranslate = empty($paths);
                            
                            if (!empty($paths)) {
                                foreach ($paths as $pattern) {
                                    $pattern = preg_replace('/\[\d+\]\.?/', '', $pattern);
                                    
                                    if ($pattern === $newPath || 
                                        (substr($pattern, -2) === '.*' && 
                                         (strpos($newPath, substr($pattern, 0, -2) . '.') === 0 || 
                                          $newPath === substr($pattern, 0, -2)))) {
                                        $shouldTranslate = true;
                                        break;
                                    }
                                }
                            }
                            
                            if ($shouldTranslate) {
                                $md5Key = md5($value);
                                if (isset($txt_txt[$md5Key])) {
                                    $value = $txt_txt[$md5Key];
                                }
                            }
                        }
                    }
                }
            }
        
            return $data;
        }
        
        
        /**
         * 处理HTML内容
         */
        public function Lang_Html($html,$to_lang,$route_param,$qx_lang,$qx_route_without_lang) {
            /**if ($to_lang === 'zh' || $to_lang === 'zh-cn') {//如果是中文不翻译
    			return $html;
    		}*/
            // ========== 新增：保护代码示例 ==========
    $codePlaceholders = [];
    
    // 保护 <code> 和 <pre> 标签内的内容
    $html = preg_replace_callback('/<(code|pre)\b[^>]*>(.*?)<\/\1>/is', function($matches) use (&$codePlaceholders) {
        $placeholder = '<!--CODE_PLACEHOLDER_' . count($codePlaceholders) . '-->';
        $codePlaceholders[$placeholder] = $matches[0];
        return $placeholder;
    }, $html);
    // ========================================
            // 保护 script 和 style 标签内容，避免被翻译破坏
            $scriptPlaceholders = [];
            $stylePlaceholders = [];
            
            // 提取并替换 script 标签
            $html = preg_replace_callback('/<script\b[^>]*>(.*?)<\/script>/is', function($matches) use (&$scriptPlaceholders) {
                $placeholder = '<!--SCRIPT_PLACEHOLDER_' . count($scriptPlaceholders) . '-->';
                $scriptPlaceholders[$placeholder] = $matches[0];
                return $placeholder;
            }, $html);
            
            // 提取并替换 style 标签
            $html = preg_replace_callback('/<style\b[^>]*>(.*?)<\/style>/is', function($matches) use (&$stylePlaceholders) {
                $placeholder = '<!--STYLE_PLACEHOLDER_' . count($stylePlaceholders) . '-->';
                $stylePlaceholders[$placeholder] = $matches[0];
                return $placeholder;
            }, $html);
            
            $dom = new DOMDocument();// 创建DOM文档对象
            libxml_use_internal_errors(true);// 启用错误抑制，防止HTML解析错误导致脚本中断
            $dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            libxml_clear_errors();// 清除之前可能产生的XML解析错误
            
            
            // 插入hook.js到第一个script之前
            $head = $dom->getElementsByTagName('head')->item(0);
            if ($head) {
                $hookJsPath = $_SERVER['DOCUMENT_ROOT'] . '/shiplang/hook.js';
                if (file_exists($hookJsPath)) {
                    $hookScript = $dom->createElement('script');
                    $hookScript->textContent = file_get_contents($hookJsPath);
                    $firstScript = $head->getElementsByTagName('script')->item(0);// 查找第一个script标签
                    if ($firstScript) {
                        $head->insertBefore($hookScript, $firstScript);
                    } else {
                        $head->appendChild($hookScript);
                    }
                }
            }
            
            
            
            // 在DOM加载后，翻译处理前添加此代码
            $keyCount = [];//需要翻译文本，出现次数
            $i18nTexts = [];
            $key_error = [];
            $txt_txt = [];
            $xpath = new DOMXPath($dom);// 创建XPath查询对象
            $elements = $xpath->query('//*[@data-i18n]');// 查找所有带有data-i18n属性的元素
            for ($i = 0; $i < $elements->length; $i++) {// 归纳data-i18n属性，并重新赋值
                $element = $elements->item($i);
                $i18nKey = $element->getAttribute('data-i18n');
                // 只获取直接文本节点
                $directText = '';
                foreach ($element->childNodes as $child) {
                    if ($child->nodeType === XML_TEXT_NODE) {
                        $directText .= $child->nodeValue;
                    }
                }
                if (!isset($keyCount[$i18nKey])) {
                    $keyCount[$i18nKey] = 0;
                    $element->setAttribute('data-i18n', $i18nKey . '_' . $keyCount[$i18nKey]. '_' .substr(md5($element->textContent), 8, 16));
                } else {
                    $keyCount[$i18nKey]++;
                    $element->setAttribute('data-i18n', $i18nKey . '_' . $keyCount[$i18nKey]. '_' .substr(md5($element->textContent), 8, 16));
                }
            }
            
            
            
            
            $txt_lang_Path = $_SERVER['DOCUMENT_ROOT'] . '/lang/' . $route_param . '.json';
            if (file_exists($txt_lang_Path)) {// 检查翻译文件是否存在
                $fileContent = file_get_contents($txt_lang_Path);// 如果文件存在，读取语言包文件
                $txt_txt = json_decode($fileContent, true) ?: [];// 解码JSON内容为数组，如果解码失败则使用空数组
            }
            
            // 收集所有需要翻译的文本和对应的键
            for ($i = 0; $i < $elements->length; $i++) {
                $element = $elements->item($i);
                $i18nKey = $element->getAttribute('data-i18n');
                $originalText = $element->textContent;
                
                // 如果是带有placeholder的input元素
                if ($element->nodeName === 'input' && $element->hasAttribute('placeholder')) {
                    $originalText = $element->getAttribute('placeholder');
                }else if ($element->nodeName === 'meta' && $element->hasAttribute('content')) {
                    $originalText = $element->getAttribute('content');
                }else if ($element->getElementsByTagName('*')->length > 0) {// 有子标签,只获取直接文本节点
                    $originalText = '';
                    foreach ($element->childNodes as $child) {
                        if ($child->nodeType === XML_TEXT_NODE) {
                            $originalText .= $child->nodeValue;
                        }
                    }
                } 
                // 确保文本不为空才加入翻译列表
                if (!empty(trim($originalText)) && isset($txt_txt[$i18nKey]) == false) {// 如果翻译数据中不存在该键，记录原始文本并标记为缺失键
                    $i18nTexts[$i18nKey] = trim($originalText);
                    $key_error[] = $i18nKey;
                }
               /** if (isset($txt_txt[$i18nKey]) == false){// 如果翻译数据中不存在该键，记录原始文本并标记为缺失键
                    $i18nTexts[$i18nKey] = $originalText;
                    $key_error[] = $i18nKey;
                }*/
            }
            
            if (!empty($key_error)) {//如果有数据就说明本地缺失翻译，不是空 则
    			$fanyi = $this->fanyi_api(array_values($i18nTexts),'zh', $to_lang);//array_values可以只保留键值，去除键名
    			if (isset($fanyi[0]) && is_array($fanyi[0])) {//有返回 数据则
    			    $txt_txt['qx_user_ip'] = Db::get_ip();//记录用户ip
    				for ($i = 0; $i < count($key_error); $i++) {
    					if (isset($fanyi[0][$i])) {
    						$txt_txt[$key_error[$i]] = $fanyi[0][$i];
    					}
    				}
    				$this->txt_update($txt_lang_Path, json_encode($txt_txt, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));//保存到文件
    			}
            }
            for ($i = 0; $i < $elements->length; $i++) {// 使用翻译数据替换文本
                $element = $elements->item($i);
                $i18nKey = $element->getAttribute('data-i18n');
                if (isset($txt_txt[$i18nKey])) {
                    if ($element->nodeName === 'input' && $element->hasAttribute('placeholder')) {
                        $element->setAttribute('placeholder', $txt_txt[$i18nKey]);
                    }else if ($element->nodeName === 'meta' && $element->hasAttribute('content')) {
                        $element->setAttribute('content', $txt_txt[$i18nKey]);
                    } else {
                        //$element->textContent = $txt_txt[$i18nKey];
                        // 只替换文本节点,保留HTML标签
                        foreach ($element->childNodes as $child) {
                            if ($child->nodeType === XML_TEXT_NODE) {
                                $child->nodeValue = $txt_txt[$i18nKey];
                                break;
                            }
                        }
                    }
                }
            }
            
            
            
            // 处理页面_a标签自动加入多语言标识
            $links = $xpath->query('//a[@href]'); // 查找所有带href属性的a标签
            for ($i = 0; $i < $links->length; $i++) {
                $link = $links->item($i);
                $href = $link->getAttribute('href');
                if (strpos($href, '/') !== 0) {// 只处理以 / 开头的内部链接
                    continue;
                }
                if (strpos($href, '//') === 0) {// 跳过外部链接(//开头)
                    continue;
                }
                $hasLangCode = false;
                for ($yui = 0; $yui < count($qx_lang); $yui++) {
                    $key = array_keys($qx_lang)[$yui];
                    if (strpos($href, '/' . $key . '/') === 0) { // 是否已经有语言标识
                        $hasLangCode = true;
                        break; // 有就退出循环
                    }
                }
                if ($hasLangCode) {// 有语言标识就跳过
                    continue;
                }
                $href = '/' . $to_lang . $href;
                $link->setAttribute('href', $href);
            }
            // 追加: 克隆外链标识
            /**
             * 
             * (function() {
  const badge = '<div style="position:fixed;bottom:20px;right:20px;z-index:9999;font-family:-apple-system,sans-serif"><a href="https://ai18npay.com" target="_blank" style="color:#738a94;text-decoration:none;font-size:13px;transition:color .2s" onmouseover="this.style.color=\'#15171A\'" onmouseout="this.style.color=\'#738a94\'">by ai18npay</a></div>';
  
  document.readyState === 'loading' 
    ? document.addEventListener('DOMContentLoaded', function() { document.body.insertAdjacentHTML('beforeend', badge); })
    : document.body.insertAdjacentHTML('beforeend', badge);
})();
             */
            
            // 处理页面_语言下拉菜单自动增加语言
            $langDropdown = $xpath->query('//div[@class="language-dropdown-auto"]');
            if ($langDropdown->length > 0) {
                $dropdownDiv = $langDropdown->item(0);
                $dropdownDiv->nodeValue = '';// 清空原有内容(简单方法)
                // 获取当前URL的查询字符串（GET参数）
                $queryString = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
                // 解析并移除 s 参数，避免语言切换时携带 s=/admin/index 之类的路由参数
                $querySuffix = '';
                if (!empty($queryString)) {
                    parse_str($queryString, $queryParams);
                    if (isset($queryParams['s'])) {
                        unset($queryParams['s']);
                    }
                    if (!empty($queryParams)) {
                        $querySuffix = '?' . http_build_query($queryParams);
                    }
                }
                for ($yui = 0; $yui < count($qx_lang); $yui++) {// 批量生成新的语言链接
                    $langCode = array_keys($qx_lang)[$yui];
                    $show = explode('|', $qx_lang[$langCode]);//处理语言是否显示
                    if ($show[1] == 0) {//有该语言，但设置不显示则，跳过
                        continue;
                    }
                    $newLink = $dom->createElement('a');// 创建新的a标签
                    $newLink->setAttribute('href', '/' . $langCode . $qx_route_without_lang . $querySuffix);
                    $newLink->setAttribute('class', 'language-option'); // 添加class属性
                    $newLink->textContent = $show[0];
                    $dropdownDiv->appendChild($newLink);// 添加到下拉菜单
                }
            }
            // 处理页面_设置当前语言显示
            $currentLangSpan = $xpath->query('//span[@id="current-language"]');
            if ($currentLangSpan->length > 0) {
                $parts = explode('|', $qx_lang[$to_lang]);//处理语言是否显示
                $currentLangSpan->item(0)->nodeValue = $parts[0];
            }
            
            
            // 处理页面_自动添加Hreflang标签，这个标签有利于谷歌收录seo
            $head = $dom->getElementsByTagName('head')->item(0);
            if ($head) {
                //$baseUrl = 'https://' . $_SERVER['HTTP_HOST'];
                
                $seoConfig = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/seo.json'), true) ?: [];// 读取seo.json配置文件
                $baseUrl = 'https://' . $_SERVER['HTTP_HOST'];// 默认用当前访问域名
                if (!empty($seoConfig['hosts'][0])) {// 如果seo.json里配置了hosts，就用第一个域名覆盖上面的默认值
                    $baseUrl = 'https://' . $seoConfig['hosts'][0];
                }
                
                $canonical = $xpath->query('//link[@rel="canonical"]')->item(0);
                if ($canonical) {
                    $canonical->setAttribute('href', $baseUrl . '/' . $to_lang . $qx_route_without_lang);
                } else {
                    $link = $dom->createElement('link');
                    $link->setAttribute('rel', 'canonical');
                    $link->setAttribute('href', $baseUrl . '/' . $to_lang . $qx_route_without_lang);
                    $head->appendChild($link);
                }
                $ogUrl = $xpath->query('//meta[@property="og:url"]')->item(0);//有就改一下，没有就算了
                if ($ogUrl) $ogUrl->setAttribute('content', $baseUrl . '/' . $to_lang . $qx_route_without_lang);
                // 先删除原有的 hreflang 和 canonical
                $existing = $xpath->query('//link[@rel="alternate" and @hreflang]');
                foreach ($existing as $node) {
                    $prev = $node->previousSibling;
                    if ($prev && $prev->nodeType === XML_TEXT_NODE) $prev->parentNode->removeChild($prev);
                    $node->parentNode->removeChild($node);
                }
    
    
                foreach ($qx_lang as $langCode => $langValue) {
                    if (explode('|', $langValue)[1] == 1) {
                        $head->appendChild($dom->createTextNode("\n    "));
                        $link = $dom->createElement('link');
                        $link->setAttribute('rel', 'alternate');
                        $link->setAttribute('hreflang', $langCode);
                        $link->setAttribute('href', $baseUrl . '/' . $langCode . $qx_route_without_lang);
                        $head->appendChild($link);
                    }
                }
                // 默认语言(x-default)
                $link = $dom->createElement('link');
                $link->setAttribute('rel', 'alternate');
                $link->setAttribute('hreflang', 'x-default');
                $link->setAttribute('href', $baseUrl . '/en' . $qx_route_without_lang);
                $head->appendChild($link);
            }
            


            $htmlElement = $dom->getElementsByTagName('html')->item(0)->setAttribute('lang',$to_lang);//设置网站语言标签
            $result = html_entity_decode($dom->saveHTML(), ENT_QUOTES | ENT_HTML5, 'UTF-8');// 输出修改后的HTML
            // 恢复 script 和 style 标签
            foreach ($scriptPlaceholders as $placeholder => $original) {
                $result = str_replace($placeholder, $original, $result);
            }
            foreach ($stylePlaceholders as $placeholder => $original) {
                $result = str_replace($placeholder, $original, $result);
            }
            
            
            // ==================== 这里是网站地图部分 ====================
            register_shutdown_function(function() use ($qx_route_without_lang, $to_lang) {//PHP在输出完HTML后才执行这个函数
                try {
                    $db = new PDO('sqlite:' . $_SERVER['DOCUMENT_ROOT'] . '/shiplang/sitemap_url.db');
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $db->exec("CREATE TABLE IF NOT EXISTS sitemap (url TEXT, lang TEXT, count INTEGER DEFAULT 1, time INTEGER, PRIMARY KEY (url, lang))");
                    $stmt = $db->prepare("UPDATE sitemap SET count = count + 1, time = ? WHERE url = ? AND lang = ?");
                    $stmt->execute([time(), $qx_route_without_lang, $to_lang]);
                    if ($stmt->rowCount() == 0) {
                        $stmt = $db->prepare("INSERT INTO sitemap (url, lang, count, time) VALUES (?, ?, 1, ?)");
                        $stmt->execute([$qx_route_without_lang, $to_lang, time()]);
                    }
                } catch (Exception $e) {}
            });
            // ==================================================
            // ========== 新增：恢复代码示例 ==========
    foreach ($codePlaceholders as $placeholder => $original) {
        $result = str_replace($placeholder, $original, $result);
    }
    // ========================================
            return $result;
        }
    }
?>