<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
    
    /*
    $_COOKIE
    $_SESSION
    */ 
   
    setcookie("name", "Stephen", time() + 86400);

    $_SESSION['name'] = "12";

?>



</body>

</html>
