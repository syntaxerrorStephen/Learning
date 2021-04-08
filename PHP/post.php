<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
    //Post Globals
    /*
    $GLOBALS
    $_POST
    $_GET
    $_COOKIE
    $_SESSION
    */ 

    ECHO $_POST['name'];
   

?>

<form method="POST">
    <input type="hidden" name="name" value="value">
    <button type="submit">Press Me</button>
</form>

</body>

</html>
