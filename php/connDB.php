<?php
    header("ContentType:text/html;charset=utf-8");
    $db_host = "localhost";
    $db_user = "id1297491_qwerty";
    $db_pw = "qwerty";
    $db_name = "id1297491_qwerty";
    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫連線錯誤");
    mysqli_query($conn,"SET NAMES utf8");
?>