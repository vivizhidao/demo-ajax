<?php

    header("Content-Type:text/html;charset=utf-8");

    $name="xiaoming";
    $age=18;

    echo $name;
    echo "<br/>";
    echo $age;
    echo "<br/>";

    $price="10.12";
    echo $price;
    echo "<br/>";

    $flag=true;
    $flag1=false;
    echo $flag;
    echo "<br/>";
    echo $flag1;//什么都不输出，代表空字符集
    echo "<br/>";

    $array1=array(
    "name"=>"xiaoming",
    "age"=>20,
    "sex"=>"male"
    );

    foreach($array1 as $key=>$val){
        echo $key;
        echo "<br/>";
        echo $val;
        echo "<br/>";
    }

    $username="xiaoming";
    $sex="male";
    echo $username.$sex."45465";//字符串拼接
    echo "<br/>";

    //输出的固定用法
    var_dump($array1);

    echo "<br/>";

    //php自带的函数
    //doubleKill()
    function doubleKill($name="xiaoming"){
        echo "可爱的".$name;
    }//设置了一个默认值

    doubleKill("xiaoming");
    echo "<br/>";
    doubleKill();


    echo "<br/>";

    //count()计数
    $array2=array("123","345","567","789","342");
    $num=count($array2);
    echo $num;

    echo "<br/>";

    //in_array()是否在数组中
    $is=in_array("345",$array2);
    $is1=in_array("222",$array2);
    echo $is;
    echo "<br/>";
    echo $is1;

    echo "<br/>";

    //array_key_exists()检查关联数组中是否存在某key
    $flag2=array_key_exists("age",$array1);
    echo "是否存在：".$flag2;
    echo "<br/>";

    //file_get_contents()获取文件的内容
    $data=file_get_contents("view.txt");
    echo $data;


?>