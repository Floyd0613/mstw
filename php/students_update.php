<?php
    require_once("connDB.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $addr = $_POST["addr"];
    $comment = $_POST["comment"];
    $sid = $_POST["sid"];
    $sql = "UPDATE `students` SET s_name='$name',s_phone='$phone',s_mail='$mail',s_addr='$addr',s_comment='$comment' WHERE s_id='$sid'";
    mysqli_query($conn,$sql);
//    header("Location:students.php");
?>