<?php
    require_once("connDB.php");
    $sql = "SELECT * FROM `students` ORDER BY s_id ASC";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-6 col-md-offset-3">
               <a href="students_form.php" class="btn btn-primary">新增資料</a>
           </div>
       </div>
   </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                       <thead>
                           <tr>
                            <th>編號</th>
                            <th>姓名</th>
                            <th>電話</th>
                            <th>mail</th>
                            <th>地址</th>
                            <th>備註</th>
                            <th></th>
                            <th></th>
                        </tr>
                       </thead>
                        
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row["s_id"];?></td>
                        <td><?php echo $row["s_name"];?></td>
                        <td><?php echo $row["s_phone"];?></td>
                        <td><?php echo $row["s_mail"];?></td>
                        <td><?php echo $row["s_addr"];?></td>
                        <td><?php echo $row["s_comment"];?></td>
                        <td><a href="javascript:;"id="<?php echo $row["s_id"];?>" class="fa fa-trash fa-2x del"></a></td>
                        <td><a href="students_edit.php?sid=<?php echo $row["s_id"];?>"class="fa fa-wrench fa-2x"></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(".table").DataTable();
            $(".del").click(function(){
                var el = $(this);
                var id = el.attr("id");
                var data = "sid="+id;
                if(confirm("確認刪除?")){
                    $.ajax({
                        url:"del.php",
                        type:"get",
                        data:data,
                        beforeSend:function(e){
                            el.parents("tr").fadeOut(300,function(){
                                $(this).remove();
                            });
                        },
                        success:function(e){

                        },
                        error:function(){
                            alert("error");
                        }
                    })
                }
            });
        });
    </script>
</body>
</html>