<?php

    $data=$_POST;
    $messsage=$data['message'];
    $array=array("你好吖");
    $num=array_rand($array);
    echo $array[$num];





?>