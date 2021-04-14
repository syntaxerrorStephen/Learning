<?php
  include_once 'header.php';
  include_once 'includes/functions.inc.php';
?>

<style>
div.dunno {
    height: 10em;
    position: relative }
div.dunno input {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
</style>

<?php
    if (isset($_SESSION["useruid"])) {
      echo $useruid
    }
?>