<?php
    require_once("connDB.php");
    $sid = $_GET["sid"];
    $sql = "DELETE FROM `students` WHERE s_id=$sid";
    mysqli_query($conn,$sql);
    #header("Location:students.php");
?>