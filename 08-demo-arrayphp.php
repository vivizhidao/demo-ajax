<?php


        /*
          遍历二维数组，首先我要定义二维数组
        */

        $array=array(
                array("username"=>"老段","age"=>29),
                array("username"=>"聪聪","age"=>16),
                array("username"=>"小武","age"=>22)
        );


        for($i=0;$i<count($array);$i++){

                foreach($array[$i] as $key=>$val){
                        echo $key."-----".$val;
                        echo "<br/>";
                }
        }


?>