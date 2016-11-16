<?php


        $data=$_GET;
       //接收客户端以get 方式提交的数据

        foreach($data as $key=>$val){
                echo  $val."----------"."<br/>";
        }

?>