<?php
session_start();

session_destroy();
echo "<script type='text/javascript'> window.location.replace('../index.php')</script>";
 ?>
