<?php

//检测是否有数据提交
//$_POST超全局数组，专门用来接收表单提交过来的数据
//empty();//检测变量是否为空
if(empty($_POST)){
    //引入前台页面
    require './index.html';
}else{
    //链接数据库
    require './link.php';

    //执行添加操作
    $sql = "insert into liuyan (name,email,content) 
    values ('$_POST[name]','$_POST[email]','$_POST[content]')";
    //数组的字符串键名在sql语句里是不能加引号的
    $res = mysqli_query($link,$sql);
    if(!$res){
        echo mysqli_error($link);
    }else{
        echo '留言添加成功';
    }
}

?>