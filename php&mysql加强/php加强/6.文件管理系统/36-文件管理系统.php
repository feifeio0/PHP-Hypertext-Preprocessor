<?php
//$_GET['dir'];
$path = isset($_GET['dir'])?$_GET['dir']:'.';
//$path = '.';//地址
$res = opendir($path);//打开目录
//readdir($res);//读取目录
//echo readdir($res);
/*while(($row = readdir($res)) !== false)//读取所有目录
{
    echo $row,'<br>';
}
closedir($res);//关闭资源通道*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>文件管理系统</h1>
    <table border=10>
        <tr>
            <td>名称</td>
            <td>操作</td>
        </tr>
        <?php while((($row = readdir($res)) !== false)){ ?>
        <tr>
            <td><?php echo $row; ?></td>
            <td><a href="36-文件管理系统.php?dir=<?php echo $path.'/'.$row; ?>">查看</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>