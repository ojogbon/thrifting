<?php
ob_start();
$host = "us-cdbr-east-02.cleardb.com";
$user = "b1a757ed6ef1a0";
 $password ="0a776172";
 $database ="heroku_7edec63ace2b6c5";
$mycon=mysqli_connect($host,$user,$password);
if (!$mycon){
    echo 'error'.  die();
}  else {
   // echo 'alert...';
    $getdb = mysqli_select_db($mycon,$database);
    if (!$getdb){
    echo 'error'.  die();

} else {
    // echo 'alert...oooo';
}
}
