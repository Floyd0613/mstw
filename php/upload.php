<?php
    require_once("connDB.php");
    $filename = $_FILES["file"]["name"];
    $filetype = $_FILES["file"]["type"];
    $filesize = $_FILES["file"]["size"];
    $filetmp = $_FILES["file"]["tmp_name"];
    $error = $_FILES["file"]["error"];
    
    $src = imagecreatefromjpeg($filetmp);
    $src_w = imagesx($src);
    $src_h = imagesy($src);
//    echo $src_w."<br>";
//    echo $src_h."<br>";
    
    $thumb_w = 200;
    $thumb_h = ($src_h/$src_w*200);
//    echo $thumb_w."<br>";
//    echo $thumb_h."<br>";
    $thumb = imagecreatetruecolor($thumb_w,$thumb_h);
    imagecopyresampled($thumb,$src,0,0,0,0,$thumb_w,$thumb_h,$src_w,$src_h);
    


    $target ="images/".$filename;
    
    $sql = "INSERT INTO `gallery`(g_name,g_size)VALUES('$filename','$filesize')";
    
    if($error==0){
        if(move_uploaded_file($filetmp,$target)){
            echo "上傳成功";
            imagejpeg($thumb,"images/thumbs/".$filename); 
            mysqli_query($conn,$sql);
            header("Refresh:3;url=file.php");
        }else{
            echo "上傳失敗";
            header("Refresh:3;url=file.php");
        }
    }else if($error==4){
        echo "無檔案";
        header("Refresh:3;url=file.php");
    }else{
        echo "上傳錯誤";
        header("Refresh:3;url=file.php");
    }
?>