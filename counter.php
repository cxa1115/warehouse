<?php

    $num = 0;
    if(!@$file = fopen("read.txt", "r")){
        echo "文件不存在！";
        $num = 0;
    }else{
    	$num = fgets($file, 10);
    	fclose($file);
    }

    $num++;
    $file1 = fopen("read.txt", "w");
    fwrite($file1, $num);
    fclose($file1);

    #echo $num;
    $numberarr = str_split($num);

    foreach ($numberarr as $v) {
        echo "<img src = 'numbers/" . $v. ".png'>";   
    }


?>