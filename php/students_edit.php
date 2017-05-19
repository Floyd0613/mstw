<?php
    require_once("connDB.php");
    $sid = $_GET["sid"];
    $sql = "SELECT * FROM `students` WHERE s_id='$sid'";
    #$sql = "SELECT * FROM `students` WHERE s_id=".$_GET["sid"];
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="jquery.validate.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    
    
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="javascript:;" method="post">
                    <div class="form-group">
                        <label>姓名</label>
                        <input type="text" class="form-control" name="name" placeholder="請輸入姓名" value="<?php echo $row["s_name"]?>"id="name"required>
                    </div>
                    <div class="form-group">
                        <label>電話</label>
                        <input type=text class="form-control" name="phone" placeholder="請輸入電話號碼或手機" value="<?php echo $row["s_phone"]?>"id="phone" required maxlength="10">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="mail" placeholder="請輸入Email"class="form-control"value="<?php echo $row["s_mail"]?>" id="mail" required>
                        
                    </div>
                    <div class="form-group">
                        <label>地址</label>
                        <input type="text" name="addr" placeholder="請輸入地址"class="form-control" id="addr" value="<?php echo $row["s_addr"]?>">
                        
                    </div>
                    <div class="form-group">
                        <label>備註</label>
                        <textarea class="form-control" rows="3" name="comment" id="comment">
                            <?php echo $row["s_comment"];?>
                        </textarea>
                        <script>
                            CKFinder.setupCKEditor();
                            CKEDITOR.replace( 'comment',{});
                        </script>
                    </div>
                    <input type="hidden" name="sid" value="<?php echo $row["s_id"];?>">
                    <button type="submit" class="btn btn-primary" id="submit">修改</button>
                    <button class="btn btn-danger" onclick="location.href='students.php'">取消</button>
                </form>
            </div>
        </div>
    </div>
    
<!--    <script src="ckfinder/ckfinder.js"></script>-->
    <script>
        function CKupdate(){
            for(instance in CKEDITOR.instances)
                CKEDITOR.instances[instance].updateElement();
        }
        $(document).ready(function(){
            
            $("form").validate({
                submitHandler:function(){
                    //$("#submit").click(function(){
                        CKupdate();
                        var data = $("form").serialize();
                        $.ajax({
                            url:"students_update.php",
                            type:"post",
//                            data:{
//                                name:$("#name").val(),
//                                phone:$("#phone").val(),
//                                mail:$("#mail").val(),
//                                addr:$("#addr").val(),
//                                comment:$("#comment").val(),
//                            },
                            data:data,
                            success:function(e){
                                location.href="students.php"
                            },error:function(){
                                alert("ERROR");
                            }
                        })
                    //});
                }
            });
                     

            
           
        });
//        CKFinder.setupCKEditor();
        
    </script>
</body>

</html>
