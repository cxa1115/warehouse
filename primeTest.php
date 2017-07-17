<!DOCTYPE html>
<html>
<head>
	<title>To test a Number is or not a Prime</title>
</head>
<body>

<?php

    function isPrime($num)
    {
    	for($x = 2; $x < $num; $x++){
    		if ($num % $x == 0) {
    		    return 0;
    		}
    	}
    	return 1;
    }
    $a = isPrime($_POST['number']);
    if ($a == 0){
    	echo "This number is not prime";
    }else{
    	echo "This number is prime";
    }

 ?>
 
</body>
</html>