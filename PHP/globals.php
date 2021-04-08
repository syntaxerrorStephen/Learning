<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
    //Super Globals
    /*
    $GLOBALS
    $_POST
    $_GET
    $_COOKIE
    $_SESSION
    */ 

    $x = 5;
    function something() {
        $y = 10;
        echo $GLOBALS['x'];
    }

    something();

?>

</body>

</html>
