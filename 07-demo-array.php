<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="GBK">
    <title></title>
</head>
<body>
        <?php
                $users=array(
                        array("username"=>"С��","age"=>19,"desc"=>"�ܺ�"),
                        array("username"=>"С��","age"=>19,"desc"=>"����"),
                        array("username"=>"С��","age"=>18,"desc"=>"����")
                );
        ?>


        <table>
                <tr>
                        <td>����</td>
                        <td>����</td>
                        <td>����</td>
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