<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="GBK">
    <title></title>
</head>
<body>
        <?php
                $users=array(
                        array("username"=>"小红","age"=>19,"desc"=>"很红"),
                        array("username"=>"小明","age"=>19,"desc"=>"很明"),
                        array("username"=>"小兰","age"=>18,"desc"=>"很兰")
                );
        ?>


        <table>
                <tr>
                        <td>姓名</td>
                        <td>年龄</td>
                        <td>描述</td>
                </tr>
                <?php

                    for($i=0;$i<count($users);$i++){  ?>
                    <tr>
                        <?php foreach($users[$i] as $key=>$val){ ?>
                            <td>
                                <?php echo $val; ?>
                            </td>
                        <?php } ?>
                    </tr>

                    <?php } ?>

        </table>



</body>
</html>