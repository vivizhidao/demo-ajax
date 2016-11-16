<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

    header("Content-Type:text/html;charset=UTF-8");
    header("refresh:4;url=http://www.baidu.com");

?>

    <span>5</span>s之后将会跳转到百度，如果没有跳转，请点击<a href='http://www.baidu.com'>这里</a>

<script>

    window.onload=function(){

        var num=5;

        setInterval(function(){

            num--;
            document.querySelector("span").innerHTML=num;

        },1000)
    }


</script>

</body>
</html>