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
    
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="javascript:;" method="post">
                    <div class="form-group">
                        <label>姓名</label>
                        <input type="text" class="form-control" name="name" placeholder="請輸入姓名" id="name"required>
                    </div>
                    <div class="form-group">
                        <label>電話</label>
                        <input type=text class="form-control" name="phone" placeholder="請輸入電話號碼或手機" id="phone" required maxlength="10">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="mail" placeholder="請輸入Email"class="form-control" id="mail" required>
                        
                    </div>
                    <div class="form-group">
                        <label>地址</label>
                        <input type="text" name="addr" placeholder="請輸入地址"class="form-control" id="addr">
                        
                    </div>
                    <div class="form-group">
                        <label>備註</label>
                        <textarea class="form-control" rows="3" name="comment" id="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">新增</button>
                    <button class="btn btn-danger" onclick="location.href='students.php'">取消</button>
                </form>
            </div>
        </div>
    </div>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function(){
            $("form").validate({
                submitHandler:function(){
                    //$("#submit").click(function(){
                        var data = $("form").serialize();
                        $.ajax({
                            url:"students_new.php",
                            type:"post",
        //                    data:{
        //                        name:$("#name").val(),
        //                        phone:$("#phone").val(),
        //                        mail:$("#mail").val(),
        //                        addr:$("#addr").val(),
        //                    },
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
        //CKEDITOR.replace('comment',{});
    </script>
</body>

</html>
