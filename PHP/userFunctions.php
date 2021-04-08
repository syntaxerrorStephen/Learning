<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


<?php
    //User Function
    
    

    function newCalc($x) {
        $newno = $x * 0.75;
        echo "Here is %75 of what you wrote: ".$newno;
    }

    $x = 100;
    newCalc($x);
    echo "<br>";
    $a = 10;
    newCalc($a);
?>

</body>

</html>
