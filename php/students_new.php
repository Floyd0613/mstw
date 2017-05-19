<?php
    require_once("connDB.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $addr = $_POST["addr"];
    $comment = $_POST["comment"];
    $sql = "INSERT INTO `students`(s_name,s_phone,s_mail,s_addr,s_comment)VALUES('$name','$phone','$mail','$addr','$comment')";
    mysqli_query($conn,$sql);
    #header("Location:students.php");
    #header("Refresh:5;url=students.php");
?>