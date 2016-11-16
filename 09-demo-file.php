<?php

    $data=$_FILES;

    $tmpfile=$data['lifephoto']['tmp_name'];

    $fileName=$data['lifephoto']['name'];

    move_uploaded_file($tmpfile,"images/".$fileName);




?>