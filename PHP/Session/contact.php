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
   
    echo $_SESSION['username'];

?>



</body>

</html>