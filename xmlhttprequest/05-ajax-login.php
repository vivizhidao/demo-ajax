<?php
    header("Content-Type:text/html;charset=utf-8");
    $data=$_POST;
    $username=$data['username'];

    $array=array("xiaohong","xiaobai","xiaolan","xiaohuang");

    $flag=in_array($username,$array);

    if($flag){
        echo "<font color='red'>该用户已经存在</font>";
    }else{
        echo "该用户可以使用";
    }


?>