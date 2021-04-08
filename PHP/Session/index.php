<?php
    session_start();
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>

<?php
    
    /*
    $_COOKIE
    $_SESSION
    */ 
   
    $_SESSION['username'] = "steve69420";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
        echo "You are not logged in";
    } else {
        echo "You are logged in";
    }

?>



</body>

</html>