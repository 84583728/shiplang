<?php
    /***
     * shiplang
     * XiaoQian
     * wechat:5833487
     * email:9723331@gmail.com
     * 2026-05-25
     * 该架构致力于，基于Ai实现非程序员，可以快速极简构建出可盈利变现的全球化应用程序
     * 该文件是网站地图功能
     * 买Ai会员账号联系微信：xlh3650
    ***/
class Site_map {
    //权重算法：1-3次0.2，4-5次0.3，6次0.4，5-10次0.5，11-50次0.6，51-100次0.7，101-300次0.8，301-500次0.9，501次以上均为1.0
    public function createSitemapIndex($qx_lang) {
        $db_path = $_SERVER['DOCUMENT_ROOT'] . '/shiplang/sitemap_url.db';
        $sitemap_dir = $_SERVER['DOCUMENT_ROOT'] . '/sitemap';
        //$base_url = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
        
        $seoConfig = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/seo.json'), true) ?: [];
        $base_url = 'https://' . $_SERVER['HTTP_HOST'];
        if (!empty($seoConfig['hosts'][0])) $base_url = 'https://' . $seoConfig['hosts'][0];
        
        if (!is_dir($sitemap_dir)) {
            mkdir($sitemap_dir, 0755, true);
        }
        if (!file_exists($db_path)) {
            return false;
        }
        
        $db = new PDO('sqlite:' . $db_path);
        $stmt = $db->query("SELECT DISTINCT lang FROM sitemap ORDER BY lang");// 获取所有语言
        $langs = $stmt->fetchAll(PDO::FETCH_COLUMN);
        if (empty($langs)) {
            return false;
        }
        
        // 生成主索引文件XML
        $index_xml = '<?xml version="1.0" encoding="UTF-8"?>' ."\n". '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' ."\n";
        for ($i = 0; $i < count($langs); $i++) {// 为每个语言生成sitemap文件
            $lang = $langs[$i];
            
            // 检查语言是否显示
            if (isset($qx_lang[$lang]) == false) continue;
            $show = explode('|', $qx_lang[$lang]);
            if ($show[1] == 0) continue;
            
            $stmt = $db->prepare("SELECT url, count, time FROM sitemap WHERE lang = ? ORDER BY count DESC");// 查询该语言的所有URL
            $stmt->execute([$lang]);
            $urls = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //if (empty($urls)) continue;
            //$skip = false;
            //foreach ($seoConfig['no_paths'] ?? [] as $path) {
            //    if (strpos($url, $path) === 0) { $skip = true; break; }
            //}
            //if ($skip) continue;
            /***$lang_xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n". '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";// 生成该语言的sitemap文件
            **/
            if (empty($urls)) continue;
            $lang_xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n". '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
            
            for ($j = 0; $j < count($urls); $j++) {
                $url = $urls[$j]['url'];
                
                // 过滤屏蔽路径
                $skip = false;
                foreach ($seoConfig['no_paths'] ?? [] as $path) {
                    if (strpos($url, $path) === 0) {
                        $skip = true;
                        break;
                    }
                }
                if ($skip) continue;
                
                
                $count = $urls[$j]['count'];
                $time = $urls[$j]['time'];
                
                // 计算优先级
                if ($count >= 501) {
                    $priority = 1.0;
                } else if ($count >= 301) {
                    $priority = 0.9;
                } else if ($count >= 101) {
                    $priority = 0.8;
                } else if ($count >= 51) {
                    $priority = 0.7;
                } else if ($count >= 11) {
                    $priority = 0.6;
                } else if ($count >= 7) {
                    $priority = 0.5;
                } else if ($count == 6) {
                    $priority = 0.4;
                } else if ($count >= 4) {
                    $priority = 0.3;
                } else {
                    $priority = 0.2;
                }
                
                // 计算更新频率
                $days = (time() - $time) / 86400;
                if ($days < 1) {
                    $changefreq = 'daily';
                } else if ($days < 7) {
                    $changefreq = 'weekly';
                } else if ($days < 30) {
                    $changefreq = 'monthly';
                } else {
                    $changefreq = 'yearly';
                }
                $lang_xml .= "  <url>\n    <loc>" . htmlspecialchars($base_url . '/' . $lang . $url) . "</loc>\n";
                $lang_xml .= "    <lastmod>".date('c', $time)."</lastmod>\n";
                $lang_xml .= "    <changefreq>{$changefreq}</changefreq>\n    <priority>{$priority}</priority>\n  </url>\n";
            }
            $lang_xml .= '</urlset>';
            
            
            $lang_file = $sitemap_dir . '/sitemap-' . $lang . '.xml';// 保存该语言的sitemap文件
            file_put_contents($lang_file, $lang_xml);
            
            // 添加到主索引
            $index_xml .= "  <sitemap>\n    <loc>" . htmlspecialchars($base_url . '/sitemap/sitemap-' . $lang . '.xml') . "</loc>\n";
            $index_xml .= "    <lastmod>" . date('c', filemtime($lang_file)) . "</lastmod>\n  </sitemap>\n";
        }
        $index_xml .= '</sitemapindex>';
        file_put_contents($sitemap_dir . '/index.xml', $index_xml);// 保存主索引文件
        
        
        
        
        // 每月首次生成时提交当前域名
        if (!file_exists($sitemap_dir . '/submit.flag') || file_get_contents($sitemap_dir . '/submit.flag') != date('Y-m')) {
            try {
                @file_get_contents('https://shiplang.com/web/sitemap/api_domains?domain=' . urlencode($_SERVER['HTTP_HOST']));
                file_put_contents($sitemap_dir . '/submit.flag', date('Y-m'));
            } catch (Exception $e) {}
        }
        return true;
    }
}
?>