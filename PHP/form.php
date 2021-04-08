<html>
<head>
<meta charset="UTF-8">
<title>Title</title>
</head>
<body>

<form method="GET">
    <input type="text" name="person">
    <button>Submit</button>
</form>

<?php
    $name = $_GET['person'];
    echo  $name." is handsome!";
?>

</body>

</html>
