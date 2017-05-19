<?php
    require_once("connDB.php");
    $sql = "SELECT * FROM `gallery`";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js"></script>
    <script src="lightbox.min.js"></script>

</head>
<body>
    <div class="container">
        <?php while($row=mysqli_fetch_assoc($result)){?>
        <div class="box">
            <a href="images/<?php echo $row["g_name"];?>"data-lightbox="lb">
                <img src="images/thumbs/<?php echo $row["g_name"];?>" alt="">
            </a>
        </div>
        <?php } ?>
    </div>
    <script>
        $(document).ready(function(){
            $(".container").imagesLoaded(function(){
                $(".container").masonry({
                    isFitWidth:true
                });
            });
        });
    </script>
</body>
</html>