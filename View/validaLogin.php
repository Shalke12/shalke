<?php

if (!isset($_SESSION["login"])) {

//    echo "<pre>";
//    var_dump($_SESSION);
//    echo "</pre>";
//    exit();
    echo "<script>";
    echo "window.location.href = '../index.php';";
    echo "</script> ";
}
?>

